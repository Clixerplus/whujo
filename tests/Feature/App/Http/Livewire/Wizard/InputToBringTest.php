<?php

namespace Tests\Feature\App\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use App\Http\Livewire\Wizard\InputToBring;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputToBringTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        Experience::factory()->create();
        $experience = Experience::first(['id', 'toBring']);

        Livewire::test(InputToBring::class, ['experience' => $experience])
            ->assertSet('experience', $experience)
            ->assertSet('experience.toBring', $experience->toBring);
    }

    /** @test */
    function it_add_requeriment_into_the_toBring_property()
    {
        Experience::factory()->create(['toBring' => ['Requeriment1']]);

        Livewire::test(InputToBring::class, [
            'experience' => Experience::first(['id', 'toBring'])
        ])
            ->set('requeriment', 'Requeriment2')
            ->call('addRequerimentToList')
            ->assertSet('experience.toBring', ['Requeriment1', 'Requeriment2']);
    }

    /** @test  */
    function it_requeriment_is_required()
    {
        Experience::factory()->create(['toBring' => []]);

        Livewire::test(InputToBring::class, [
            'experience' => $experience = Experience::first(['id', 'toBring'])
        ])
            ->set('requeriment', '')
            ->call('addRequerimentToList')
            ->assertHasErrors(['requeriment' => 'required'])
            ->assertSet('experience.toBring', []);
    }

    /** @test  */
    function it_requeriment_must_be_a_string()
    {
        Experience::factory()->create(['toBring' => []]);

        Livewire::test(InputToBring::class, [
            'experience' => Experience::first(['id', 'toBring'])
        ])
            ->set('requeriment', ['Requeriment'])
            ->call('addRequerimentToList')
            ->assertHasErrors(['requeriment' => 'string'])
            ->assertSet('experience.toBring', []);
    }

    /** @test  */
    function it_requeriment_length_is_greater_than_5()
    {
        Experience::factory()->create(['toBring' => []]);

        Livewire::test(InputToBring::class, ['experience' => Experience::first(['id', 'toBring'])])
            ->set('requeriment', 'abcd')
            ->call('addRequerimentToList')
            ->assertHasErrors(['requeriment' => 'min'])
            ->assertSet('experience.toBring', []);
    }

    /** @test  */
    function it_remove_a_requeriment_from_the_list()
    {
        Experience::factory()->create([
            'toBring' => ['Requeriment1', 'Requeriment2']
        ]);

        Livewire::test(InputToBring::class, ['experience' => Experience::first(['id', 'toBring'])])
            ->assertSet('experience.toBring', ['Requeriment1', 'Requeriment2'])
            ->call('removeRequerimentFromList', 0)
            ->assertSet('experience.toBring', [1 => 'Requeriment2']);
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Experience::factory()->create([
            'toBring' => ['Requeriment1', 'Requeriment2']
        ]);

        Livewire::test(InputToBring::class, ['experience' => Experience::first()])
            ->assertViewHas('experience')
            ->assertSeeHtml('name="requeriment"')
            ->assertSeeHtml('wire:model.debounce.500ms="requeriment"')
            ->assertSeeHtml('wire:click="addRequerimentToList"')
            ->assertSeeHtml('wire:click="removeRequerimentFromList(0)"')
            ->assertSeeHtml('wire:click="removeRequerimentFromList(1)"')
            ->assertSeeHtml('Requeriment1')
            ->assertSeeHtml('Requeriment2');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        $experience = Experience::factory()->create();

        Livewire::test(InputToBring::class, ['model' => $experience])
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }
}
