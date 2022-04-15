<?php

namespace Tests\Feature;

use App\Http\Livewire\UpdateTeamCompanyDataForm;
use App\Models\Team;
use App\Models\User;
use DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB as FacadesDB;
use Livewire;
use Tests\TestCase;

class TeamCompanyDataCanBeUpdatedTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_team_company_data_can_be_updated()
    {
        $this->actingAs($user = User::factory()->withPersonalTeam()->create());

        Livewire::test(UpdateTeamCompanyDataForm::class, ['team' => $user->currentTeam])
                    ->set(['state' => ['address' => ['street' => 'test', 'city' => 'test', 'state' => 'test', 'zip' => 'test']]])
                    ->call('updateTeamCompanyData');

        $this->assertCount(1, $user->fresh()->ownedTeams);

        $this->assertEquals('test', $user->currentTeam->fresh()->company_data->address->street);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_team_company_data_requires_validation()
    {
        $this->actingAs($user = User::factory()->withPersonalTeam()->create());

        Livewire::test(UpdateTeamCompanyDataForm::class, ['team' => $user->currentTeam])
                    ->set(['state' => ['email' => 'test']])
                    ->call('updateTeamCompanyData')->assertHasErrors(['email']);



        $this->assertCount(1, $user->fresh()->ownedTeams);

        $this->assertNotEquals('test', $user->currentTeam->fresh()->company_data->email);
    }
}
