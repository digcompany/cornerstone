<?php

namespace App\Actions\Charter;

use App\Aggregates\TeamAggregate;
use App\Contracts\UpdatesTeamDomains;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Validator;

class UpdateTeamDomain implements UpdatesTeamDomains
{
    /**
     * Validate and update the given  company's domain.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @param  array  $input
     * @return void
     */
    public function update($user, $team, array $input)
    {
        Gate::forUser($user)->authorize('update', $team);

        $restrictedDomains = config('charter.restricted_domains', []);

        $appDomain = parse_url(config('app.url'))['host'] ?? '';

        $restrictedDomains[] = $appDomain;

        Validator::make($input, [
            'domain' => ['nullable', 'string',Rule::unique('landlord.teams')->ignore($team->uuid, 'uuid'), 'max:255', 'not_in:'.implode(',', $restrictedDomains)],
        ])->validateWithBag('updateTeamDomain');

        TeamAggregate::retrieve(
            uuid: $team->uuid
        )->updateTeamDomain(
            domain: $input['domain']
        )->persist();
    }
}
