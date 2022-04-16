<?php

namespace App\Http\Livewire;

use App\Contracts\UpdatesTeamCompanyData;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateTeamCompanyDataForm extends Component
{

    /**
     * The team instance.
     *
     * @var mixed
     */
    public $team;

    /**
     * The component's state.
     *
     * @var array
     */
    public $state = [];

    /**
     * Mount the component.
     *
     * @param  mixed  $team
     * @return void
     */
    public function mount($team)
    {
        $this->team = $team;

        $this->state = $team->companyData->toArray();
        if ($this->state['fax'] == config('company.empty_phone')) {
            $this->state['fax'] = null;
        }
        if ($this->state['phone'] == config('company.empty_phone')) {
            $this->state['phone'] = null;
        }
        if ($this->state['email'] == '') {
            $this->state['email'] = null;
        }
    }

    /**
     * Update the  company's name.
     *
     * @param  \Laravel\Jetstream\Contracts\UpdatesTeamDomains  $updater
     * @return void
     */
    public function updateTeamCompanyData(UpdatesTeamCompanyData $updater)
    {
        $this->resetErrorBag();

        $updater->update($this->user, $this->team, $this->state);

        $this->emit('saved');

        $this->emit('refresh-navigation-menu');

        $this->mount($this->team->fresh());
    }

    /**
     * Get the current user of the application.
     *
     * @return mixed
     */
    public function getUserProperty()
    {
        return Auth::user();
    }

    public function render()
    {
        return view('livewire.update-team-company-data-form');
    }
}
