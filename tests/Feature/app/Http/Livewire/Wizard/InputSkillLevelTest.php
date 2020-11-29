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

        Livewire::test(InputSkillLevel::class, ['skillLevel' => $level[0]])
            ->assertSet('skillLevel', $level[0]);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        $level = config('product.skill_levels');

        Livewire::test(InputSkillLevel::class, ['skillLevel' => $level[0]])
            ->call('updatedSkillLevel', $level[0])
            ->assertEmitted('addAttribute', ['skill_level' => $level[0]]);
    }

    /** @test  */
    function skill_level_must_exist_in_enum()
    {
        Livewire::test(InputSkillLevel::class, ['skillLevel' => 'WrongOption'])
            ->call('updatedSkillLevel', 'WrongOption')
            ->assertHasErrors(['skillLevel']);
    }

    /** @test  */
    function skill_level_is_required()
    {
        Livewire::test(InputSkillLevel::class, ['skillLevel' => null])
        ->call('updatedSkillLevel', null)
        ->assertHasErrors(['skillLevel']);
    }
}
