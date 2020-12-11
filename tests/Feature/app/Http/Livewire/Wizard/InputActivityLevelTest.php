<?php

namespace Tests\Feature\App\http\livewire\wizard;


use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Wizard\InputActivityLevel;

class InputActivityLevelTest extends TestCase
{
    /** @test  */
    function it_set_activity_level_attribute()
    {
        $level = config('product.activity_levels');

        Livewire::test(InputActivityLevel::class, [$level[0]])
            ->assertSet('activityLevel', $level[0]);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        $level = config('product.activity_levels');

        Livewire::test(InputActivityLevel::class, [$level[0]])
            ->call('save')
            ->assertEmitted('saveAttribute', ['activityLevel' => $level[0]]);
    }

    /** @test  */
    function activity_level_must_exist_in_enum()
    {
        Livewire::test(InputActivityLevel::class, ['WrongOption'])
            ->call('save')
            ->assertHasErrors(['activityLevel' => 'in']);
    }

    /** @test  */
    function activity_level_is_required()
    {
        Livewire::test(InputActivityLevel::class, [null])
            ->call('save')
            ->assertHasErrors(['activityLevel' => 'required']);
    }
}
