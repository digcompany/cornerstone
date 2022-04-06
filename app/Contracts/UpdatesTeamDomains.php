<?php

namespace App\Contracts;

interface UpdatesTeamDomains
{
    /**
     * Validate and update the given  company's domain.
     *
     * @param  mixed  $user
     * @param  mixed  $team
     * @param  array  $input
     * @return void
     */
    public function update($user, $team, array $input);
}
