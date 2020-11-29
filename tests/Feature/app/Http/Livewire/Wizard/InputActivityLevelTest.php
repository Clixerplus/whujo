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

        Livewire::test(InputActivityLevel::class, ['activityLevel' => $level[0]])
            ->assertSet('activityLevel', $level[0]);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        $level = config('product.activity_levels');

        Livewire::test(InputActivityLevel::class, ['activityLevel' => $level[0]])
            ->call('updatedActivityLevel', $level[0])
            ->assertEmitted('addAttribute', ['activity_level' => $level[0]]);
    }

    /** @test  */
    function activity_level_must_exist_in_enum()
    {
        Livewire::test(InputActivityLevel::class, ['activityLevel' => 'WrongOption'])
            ->call('updatedActivityLevel', 'WrongOption')
            ->assertHasErrors(['activityLevel']);
    }

    /** @test  */
    function activity_level_is_required()
    {
        Livewire::test(InputActivityLevel::class, ['activityLevel' => null])
            ->call('updatedActivityLevel', null)
            ->assertHasErrors(['activityLevel']);
    }
}
