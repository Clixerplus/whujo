<?php

namespace Tests\Feature\App\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Livewire\Wizard\InputReservationLimitTime;

class InputReservationLimitTimeTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->reservationLimitTime = InputReservationLimitTime::INTERVALS[1];

        Livewire::test(InputReservationLimitTime::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.reservationLimitTime', $model->reservationLimitTime);
    }

    /** @test */
    function it_reservationLimitTime_has_no_errors_when_input_is_valid()
    {
        Livewire::test(InputReservationLimitTime::class, ['model' => new ProductModelTest])
            ->set('product.reservationLimitTime', InputReservationLimitTime::INTERVALS[1])
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test */
    function it_reservationLimitTime_is_required()
    {
        Livewire::test(InputReservationLimitTime::class, ['model' => new ProductModelTest])
            ->set('product.reservationLimitTime', '')
            ->call('validateData')
            ->assertHasErrors(['product.reservationLimitTime' => 'required']);
    }


    /** @test  */
    function it_reservationLimitTime_is_in_intervals()
    {
        Livewire::test(InputReservationLimitTime::class, ['model' => new ProductModelTest])
            ->set('product.reservationLimitTime', '900')
            ->call('validateData')
            ->assertHasErrors(['product.reservationLimitTime' => 'in']);
    }

    /** @test  */
    function it_reservationLimitTime_save_on_experience_model()
    {
        Experience::factory()->create([
            'reservationLimitTime' => InputReservationLimitTime::INTERVALS[0]
        ]);
        $experience = Experience::first(['id', 'reservationLimitTime']);
        $newReservationLimitTime = InputReservationLimitTime::INTERVALS[1];

        Livewire::test(InputReservationLimitTime::class, ['model' => $experience])
            ->set('product.reservationLimitTime', $newReservationLimitTime)
            ->call('save');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'reservationLimitTime' => $newReservationLimitTime
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputReservationLimitTime::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.reservationLimitTime"')
            ->assertSeeHtml('wire:model="product.reservationLimitTime"')
            ->assertViewHas('intervals');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Livewire::test(InputReservationLimitTime::class, ['model' => new ProductModelTest])
            ->set('product.reservationLimitTime', 1)
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }

    /** @test */
    function it_listen_for_step_change_request_and_rejects_it()
    {
        Livewire::test(InputReservationLimitTime::class, ['model' => new ProductModelTest])
            ->set('product.reservationLimitTime', -1)
            ->emit('canChangeStep')
            ->assertNotEmitted('dataIsValid');
    }
}
