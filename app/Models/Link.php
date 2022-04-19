<?php

namespace App\Models;

use Dyrynda\Database\Support\BindsOnUuid;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Link extends Model implements Sortable
{
    use HasFactory;
    use BindsOnUuid;
    use GeneratesUuid;
    use HasChildren;
    use UsesLandlordConnection;
    use SortableTrait;

    protected $casts = [
        'type' => LinkType::class,
        'target' => LinkTarget::class,
        'view' => LinkMenu::class,
    ];

    protected $childTypes = [
        'internal_link' => InternalLink::class,
        'external_link' => ExternalLink::class,
        'internal_iframe' => InternalIframe::class,
        'external_iframe' => ExternalIframe::class,
    ];

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->user();
    }

    public function label() : Attribute
    {
        return new Attribute(
            get: fn ($value, $attributes) => $value || $attributes['icon'] ? $value : $this->url,
            set: fn ($value, $attributes) => $value,
        );
    }
}
