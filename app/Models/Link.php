<?php

namespace App\Models;

use Dyrynda\Database\Support\BindsOnUuid;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    use BindsOnUuid;
    use GeneratesUuid;
    use HasChildren;

    protected $casts = [
        'type' => LinkType::class,
        'target' => LinkTargetTypes::class,
    ];

    protected $childTypes = [
        'internal_link' => InternalLink::class,
        'external_link' => ExternalLink::class,
        'internal_iframe' => InternalIframe::class,
        'external_iframe' => ExternalIframe::class,
    ];

    protected $guarded = [];
}
