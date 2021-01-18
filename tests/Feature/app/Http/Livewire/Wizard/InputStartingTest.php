<?php

namespace Tests\Feature\app\http\livewire\wizard;


use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use App\ValueObjcets\TimeVO;
use App\Http\Livewire\Wizard\InputStarting;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputStartingTest extends TestCase
{
    private ProductModelTest $modelForTest;

    use RefreshDatabase;

    public function setup(): void
    {
        parent::setup();

        $this->modelForTest = new ProductModelTest;

        $this->modelForTest->starting = new TimeVO(1, 15);
    }

    /** @test  */
    function it_set_incoming_model()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->assertSet('product', $this->modelForTest)
            ->assertSet('product_hour', $this->modelForTest->starting->hour)
            ->assertSet('product_minute', $this->modelForTest->starting->minute);
    }

    /** @test  */
    function it_data_no_has_errors_when_input_is_valid()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->set('product_hour', InputStarting::MIN_HOURS_LIMIT)
            ->set('product_hour', InputStarting::MINUTES_INTERVAL[1])
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_product_hour_must_be_required()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->set('product_hour', null)
            ->call('validateData')
            ->assertHasErrors(['product_hour' => 'required']);
    }

    /** @test  */
    function it_product_hour_cannot_be_less_than_minimum_allowed()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->set('product_hour', InputStarting::MIN_HOURS_LIMIT - 1)
            ->call('validateData')
            ->assertHasErrors([
                'product_hour' => 'between',
            ]);
    }
    /** @test  */
    function it_product_hour_cannot_be_greater_than_maximum_allowed()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->set('product_hour', InputStarting::MAX_HOURS_LIMIT + 1)
            ->call('validateData')
            ->assertHasErrors([
                'product_hour' => 'between',
            ]);
    }

    /** @test  */
    function it_product_minute_must_be_required()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->set('product_minute', null)
            ->call('validateData')
            ->assertHasErrors([
                'product_minute' => 'required',
            ]);
    }

    /** @test  */
    function it_minute_must_be_in_a_valid_range()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->set('product_minute', -5)
            ->call('validateData')
            ->assertHasErrors([
                'product_minute' => 'in',
            ]);
    }

    /** @test  */
    function it_starting_save_on_experience_model()
    {
        Experience::factory()->create(['starting' => new TimeVO(1, 30)]);
        $experience = Experience::first(['id', 'starting']);
        $newStarting = new TimeVO(0, 45);

        Livewire::test(InputStarting::class, ['model' => $experience])
            ->set('product_hour', $newStarting->hour)
            ->set('product_minute', $newStarting->minute)
            ->call('save');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'starting->hour' => $newStarting->hour,
                'starting->minute' => $newStarting->minute
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputStarting::class, ['model' => $this->modelForTest])
            ->assertSeeHtml('name="product_hour"')
            ->assertSeeHtml('wire:model="product_hour"')
            ->assertSeeHtml('name="product_minute"')
            ->assertSeeHtml('wire:model="product_minute"')
            ->assertViewHas('minHourLimit')
            ->assertViewHas('maxHourLimit')
            ->assertViewHas('minutesInterval');
    }
}
