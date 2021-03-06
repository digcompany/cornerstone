<?php

namespace App\Models;

use Dyrynda\Database\Support\BindsOnUuid;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Cashier\Billable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use BindsOnUuid;
    use GeneratesUuid;
    use Impersonate;
    use Billable;
    use UsesLandlordConnection;
    use HasChildren;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password', 'uuid', 'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'trial_ends_at' => 'datetime',
        'type' => UserType::class,
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     *
     * case SuperAdmin = 'super_admin';
     * case Admin = 'admin';
     * case Organization = 'organization';
     * case User = 'user';
     * case Customer = 'customer';
     * case Guest = 'guest';
     */

    protected $childTypes = [
        'user' => User::class,
        'super_admin' => SuperAdmin::class,
        'upgraded_user' => UpgradedUser::class,
    ];

    public function getAuthIdentifier()
    {
        return $this->uuid;
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return $this->uuidColumn();
    }

    public function isMemberOfATeam()
    {
        return $this->allTeams()->count() > 0;
    }

    public function teamDatabases()
    {
        return $this->hasMany(TeamDatabase::class);
    }
}
