<?php

namespace App\Models;

use App\AddressData;
use App\CompanyData;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Laravel\Jetstream\Events\TeamCreated;
use Laravel\Jetstream\Events\TeamDeleted;
use Laravel\Jetstream\Events\TeamUpdated;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\Team as JetstreamTeam;

class Team extends JetstreamTeam
{
    use HasFactory;
    use HasProfilePhoto;
    use UsesLandlordConnection;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'personal_team' => 'boolean',
    ];

    // protected $appends = [
    //     'url',
    // ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];

    public function configure()
    {
        config([
            'database.connections.company.database' => $this->teamDatabase->name ?? null,
            'cache.prefix' => $this->id,
        ]);

        DB::purge('company');

        DB::reconnect('company');

        Schema::connection('company')->getConnection()->reconnect();

        app('cache')->purge(
            config('cache.default')
        );

        return $this;
    }

    public function applyTeamScopeToUserBase()
    {
        User::addGlobalScope('team', function ($query) {
            $query->whereHas('teams', function ($query) {
                $query->where('teams.id', $this->id);
            });
            $query->orWhereHas('ownedTeams', function ($query) {
                $query->where('teams.id', $this->id);
            });
            $query->orWhereIn('email', $this->teamInvitations->pluck('email')->toArray());
        });
    }

    public function use()
    {
        app()->forgetInstance('company');

        app()->forgetInstance('team');

        app()->instance('team', $this);

        app()->instance('company', $this->company_data);

        return $this;
    }

    public function teamDatabase()
    {
        return $this->belongsTo(TeamDatabase::class);
    }

    public function url() : Attribute
    {
        return new Attribute(
            get: fn ($value, $attributes) => isset($attributes['domain']) ? $this->preferHttps($attributes['domain']) : config('app.url'),
        );
    }

    public function companyData() : Attribute
    {
        return new Attribute(
            get: fn ($value, $attributes) => $this->getCompanyData($value, $attributes),
            set: fn ($value, $attributes) => json_encode($value),
        );
    }

    public function getCompanyData($value, $attributes)
    {
        $companyData = json_decode($attributes['company_data'], true);
        $address = new AddressData(
            city: $companyData['address']['city'] ?? '',
            state:  $companyData['address']['state'] ?? '',
            zip: $companyData['address']['zip'] ?? '',
            street: $companyData['address']['street'] ?? '',
            country: $companyData['address']['country'] ?? 'USA',
            lineTwo: $companyData['address']['lineTwo'] ?? null,
        );

        return new CompanyData(
            name: $this->name,
            address: $address,
            logoUrl: $this->profile_photo_url,
            logoPath: $this->profile_photo_path ?? 'profile-photos/no_image.jpg',
            phone: $companyData['phone'] ?? '(_ _ _) _ _ _- _ _ _ _',
            fax: $companyData['fax'] ?? '(_ _ _) _ _ _- _ _ _ _',
            email: $companyData['email'] ?? null,
            website: $companyData['website'] ?? null,
        );
    }

    //use  native laravel http client to check if domain supports https
    public function preferHttps($domain)
    {
        try {
            $response = Http::get("https://{$domain}");
            if ($response && $response->status() === 200) {
                return "https://{$domain}";
            }
        } catch (\Exception $e) {
        }

        return "http://{$domain}";
    }
}
