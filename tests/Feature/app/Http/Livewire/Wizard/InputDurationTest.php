<?php

namespace Tests\Feature\app\http\livewire\wizard;


use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use App\ValueObjcets\TimeVO;
use App\Http\Livewire\Wizard\InputDuration;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputDurationTest extends TestCase
{
    private ProductModelTest $modelForTest;

    use RefreshDatabase;

    public function setup(): void
    {
        parent::setup();

        $this->modelForTest = new ProductModelTest;

        $this->modelForTest->duration = new TimeVO(1, 15);
    }

    /** @test  */
    function it_set_incoming_model()
    {
        Livewire::test(InputDuration::class, ['model' => $this->modelForTest])
            ->assertSet('product', $this->modelForTest)
            ->assertSet('product_hour', $this->modelForTest->duration->hour)
            ->assertSet('product_minute', $this->modelForTest->duration->minute);
    }

    /** @test  */
    function it_product_hour_must_be_required()
    {
        Livewire::test(InputDuration::class, ['model' => $this->modelForTest])
            ->set('product_hour', null)
            ->call('save')
            ->assertHasErrors(['product_hour' => 'required']);
    }

    /** @test  */
    function it_product_hour_must_be_in_a_valid_range()
    {
        Livewire::test(InputDuration::class, ['model' => $this->modelForTest])
            ->set('product_hour', -1)
            ->call('save')
            ->assertSet('product_hour', -1)
            ->assertHasErrors([
                'product_hour' => 'between',
            ])
            ->set('product_hour', 17)
            ->assertSet('product_hour', 17)
            ->call('save')
            ->assertHasErrors([
                'product_hour' => 'between',
            ]);
    }

    /** @test  */
    function it_product_minute_must_be_required()
    {
        Livewire::test(InputDuration::class, ['model' => $this->modelForTest])
            ->set('product_minute', null)
            ->call('save')
            ->assertHasErrors([
                'product_minute' => 'required',
            ]);
    }

    /** @test  */
    function it_minute_must_be_in_a_valid_range()
    {
        Livewire::test(InputDuration::class, ['model' => $this->modelForTest])
            ->set('product_minute', 5)
            ->assertSet('product_minute', 5)
            ->call('save')
            ->assertHasErrors([
                'product_minute' => 'in',
            ]);
    }

    /** @test  */
    function it_duration_save_on_experience_model()
    {
        Experience::factory()->create(['duration' => new TimeVO(1, 30)]);
        $experience = Experience::first(['id', 'duration']);
        $newDuration = new TimeVO(0, 45);

        Livewire::test(InputDuration::class, ['model' => $experience])
            ->set('product_hour', $newDuration->hour)
            ->assertSet('product_hour', $newDuration->hour)
            ->set('product_minute', $newDuration->minute)
            ->assertSet('product_minute', $newDuration->minute)
            ->call('save')
            ->assertHasNoErrors(['product_minute' => 'in']);


        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'duration->hour' => $newDuration->hour,
                'duration->minute' => $newDuration->minute
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputDuration::class, ['model' => $this->modelForTest])
            ->assertSeeHtml('name="product_hour"')
            ->assertSeeHtml('wire:model="product_hour"')
            ->assertSeeHtml('name="product_minute"')
            ->assertSeeHtml('wire:model="product_minute"');
    }
}
