<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use App\Http\Livewire\Wizard\InputName;
use App\Http\Livewire\Wizard\InputSkillLevel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\MockClass\ProductModelTest;

class InputSkillLevelTest extends TestCase
{
    use RefreshDatabase;
    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->skillLevel = SKILL_LVL_BEGINNER;

        Livewire::test(InputSkillLevel::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.skillLevel', $model->skillLevel);
    }

    /** @test  */
    function it_skillLevel_has_no_error_when_input_is_listed()
    {
        Livewire::test(InputSkillLevel::class, ['model' => new ProductModelTest])
            ->set('product.skillLevel', SKILL_LVL_BEGINNER)
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_skillLevel_must_exist()
    {
        Livewire::test(InputSkillLevel::class, ['model' => new ProductModelTest])
            ->set('product.skillLevel', 'WrongOption')
            ->call('save')
            ->assertHasErrors(['product.skillLevel' => 'in']);
    }

    /** @test  */
    function it_skillLevel_is_required()
    {
        Livewire::test(InputSkillLevel::class, ['model' => new ProductModelTest])
            ->set('product.skillLevel', '')
            ->call('save')
            ->assertHasErrors(['product.skillLevel' => 'required']);
    }

    /** @test  */
    function it_skillLevel_save_on_experience_model()
    {
        Experience::factory()->create(['skillLevel' => SKILL_LVL_BEGINNER]);
        $experience = Experience::first(['id', 'skillLevel']);
        $newSkillLevel = SKILL_LVL_MEDIUM;

        Livewire::test(InputSkillLevel::class, ['model' => $experience])
            ->set('product.skillLevel', $newSkillLevel)
            ->call('save')
            ->assertHasNoErrors(['product.skillLevel' => 'in']);

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'skillLevel' => $newSkillLevel
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputSkillLevel::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.skillLevel"')
            ->assertSeeHtml('wire:model="product.skillLevel"')
            ->assertViewHas('levelOptions')
            ->assertSeeHtml(SKILL_LVL_BEGINNER)
            ->assertSeeHtml(SKILL_LVL_MEDIUM)
            ->assertSeeHtml(SKILL_LVL_ADVANCED)
            ->assertSeeHtml(SKILL_LVL_EXPERT);
    }
}
