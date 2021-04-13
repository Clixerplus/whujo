<?php

namespace Tests\Feature\App\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use App\Http\Livewire\Wizard\InputToProvide;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputToProvideTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $experience = Experience::factory()->create();

        Livewire::test(InputToProvide::class, ['experience' => $experience])
            ->assertSet('experience', $experience)
            ->assertSet('experience.toProvide', $experience->toProvide);
    }

    /** @test */
    function it_add_provision_into_the_toProvision_property()
    {
        Experience::factory()->create(['toProvide' => ['Provision1']]);


        Livewire::test(InputToProvide::class, [
            'experience' => Experience::first(['id', 'toProvide'])
        ])
            ->set('provision', 'Provision2')
            ->call('addProvisionToList')
            ->assertSet('experience.toProvide', ['Provision1', 'Provision2']);
    }

    /** @test  */
    function it_provision_is_required()
    {
        Experience::factory()->create(['toProvide' => []]);

        Livewire::test(InputToProvide::class, [
            'experience' => Experience::first(['id', 'toProvide'])
        ])
            ->set('provision', '')
            ->call('addProvisionToList')
            ->assertHasErrors(['provision' => 'required'])
            ->assertSet('experience.toProvide', []);
    }

    /** @test  */
    function it_provision_must_be_a_string()
    {
        Experience::factory()->create(['toProvide' => []]);

        Livewire::test(InputToProvide::class, [
            'experience' => Experience::first(['id', 'toProvide'])
        ])
            ->set('provision', ['provision'])
            ->call('addProvisionToList')
            ->assertHasErrors(['provision' => 'string'])
            ->assertSet('experience.toProvide', []);
    }

    /** @test  */
    function it_provision_length_cannot_be_less_than_limit_allowed()
    {
        Experience::factory()->create(['toProvide' => []]);

        Livewire::test(InputToProvide::class, [
            'experience' => Experience::first(['id', 'toProvide'])
        ])
            ->set('provision', InputToProvide::MIN_TEXT_LENGTH)
            ->call('addProvisionToList')
            ->assertHasErrors(['provision' => 'min'])
            ->assertSet('experience.toProvide', []);
    }

    /** @test  */
    function it_remove_a_provision_from_the_list()
    {
        Experience::factory()->create([
            'toProvide' => ['Provision1', 'Provision2']
        ]);

        Livewire::test(InputToProvide::class, [
            'experience' => Experience::first(['id', 'toProvide'])
        ])
            ->assertSet('experience.toProvide', ['Provision1', 'Provision2'])
            ->call('removeProvisionFromList', 0)
            ->assertSet('experience.toProvide', [1 => 'Provision2']);
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Experience::factory()->create([
            'toProvide' => ['Provision1', 'Provision2']
        ]);

        Livewire::test(InputToProvide::class, [
            'experience' => Experience::first(['id', 'toProvide'])
        ])
            ->assertViewHas('experience')
            ->assertSeeHtml('name="provision"')
            ->assertSeeHtml('wire:model.debounce.500ms="provision"')
            ->assertSeeHtml('wire:click="addProvisionToList"')
            ->assertSeeHtml('wire:click="removeProvisionFromList(0)"')
            ->assertSeeHtml('wire:click="removeProvisionFromList(1)"')
            ->assertSeeHtml('Provision1')
            ->assertSeeHtml('Provision2')
            ->assertViewHas('min_length');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        $experience = Experience::factory()->create();

        Livewire::test(InputToProvide::class, ['model' => $experience])
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }
}
