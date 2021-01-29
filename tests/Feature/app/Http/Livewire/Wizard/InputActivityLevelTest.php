<?php

namespace Tests\Feature\App\http\livewire\wizard;


use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use Tests\Feature\MockClass\ProductModelTest;
use App\Http\Livewire\Wizard\InputActivityLevel;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputActivityLevelTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->activityLevel = ACTIVITY_LVL_LIGHT;

        Livewire::test(InputActivityLevel::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.activityLevel', $model->activityLevel);
    }

    /** @test */
    function it_no_errors_with_valid_data()
    {
        Livewire::test(InputActivityLevel::class, ['model' => new ProductModelTest])
            ->set('product.activityLevel', ACTIVITY_LVL_LIGHT)
            ->assertSet('product.activityLevel', ACTIVITY_LVL_LIGHT)
            ->call('validateData')
            ->assertHasNoErrors('product.activityLevel');
    }

    /** @test  */
    function it_activityLevel_must_exist_in_enum()
    {
        Livewire::test(InputActivityLevel::class, ['model' => new ProductModelTest])
            ->set('product.activityLevel', 'abc')
            ->call('validateData')
            ->assertHasErrors(['product.activityLevel' => 'in']);
    }

    /** @test  */
    function it_activityLevel_is_required()
    {
        Livewire::test(InputActivityLevel::class, ['model' => new ProductModelTest])
            ->set('product.activityLevel', '')
            ->call('validateData')
            ->assertHasErrors(['product.activityLevel' => 'required']);
    }

    /** @test  */
    function it_name_can_be_save_on_experience_model()
    {
        Experience::factory()->create(['activityLevel' => ACTIVITY_LVL_LIGHT]);
        $experience = Experience::first(['id', 'activityLevel']);
        $newLevel = ACTIVITY_LVL_EXTREME;

        Livewire::test(InputActivityLevel::class, ['model' => $experience])
            ->set('product.activityLevel', $newLevel)
            ->call('save');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'activityLevel' => $newLevel
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputActivityLevel::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.activityLevel"')
            ->assertSeeHtml('wire:model="product.activityLevel"');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Livewire::test(InputActivityLevel::class, ['model' => new ProductModelTest])
            ->set('product.activityLevel', ACTIVITY_LVL_EXTREME)
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }

    /** @test */
    function it_listen_for_step_change_request_and_rejects_it()
    {
        Livewire::test(InputActivityLevel::class, ['model' => new ProductModelTest])
            ->emit('canChangeStep')
            ->assertNotEmitted('dataIsValid');
    }
}
