<?php

namespace App\StorableEvents;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class TeamCompanyDataUpdated extends ShouldBeStored
{
    public function __construct(
        public $teamUuid,
        public array $companyData
    ) {
    }
}
