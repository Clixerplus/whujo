<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Wizard\InputName;
use App\Http\Livewire\Wizard\InputSkillLevel;

class InputSkillLevelTest extends TestCase
{

    /** @test  */
    function it_set_skiPll_level_attribute()
    {
        $level = config('product.skill_levels');

        Livewire::test(InputSkillLevel::class, [$level[0]])
            ->assertSet('skillLevel', $level[0]);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        $level = config('product.skill_levels');

        Livewire::test(InputSkillLevel::class)
            ->set('skillLevel', $level[0])
            ->call('save')
            ->assertEmitted('saveAttribute', ['skillLevel' => $level[0]]);
    }

    /** @test  */
    function skill_level_must_exist_in_enum()
    {
        Livewire::test(InputSkillLevel::class)
            ->set('skillLevel', ['WrongOption'])
            ->call('save')
            ->assertHasErrors(['skillLevel']);
    }

    /** @test  */
    function skill_level_is_required()
    {
        Livewire::test(InputSkillLevel::class)
            ->set('skillLevel', [null])
            ->call('save')
            ->assertHasErrors(['skillLevel']);
    }
}
