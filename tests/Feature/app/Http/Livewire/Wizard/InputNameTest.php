<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Str;
use App\Http\Livewire\Wizard\InputName;


class InputNameTest extends TestCase
{

    private $productName = 'Product Name';

    /** @test  */
    function it_set_name_attribute()
    {
        Livewire::test(InputName::class, [$this->productName])
            ->assertSet('name', $this->productName);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {

        Livewire::test(InputName::class)
            ->set('name',  $this->productName)
            ->call('save')
            ->assertEmitted('saveAttribute', ['name' => $this->productName]);
    }

    /** @test  */
    function name_is_required()
    {
        Livewire::test(InputName::class)
            ->set('name',  '')
            ->call('save')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test  */
    function name_must_have_a_minimun_chars()
    {
        Livewire::test(InputName::class)
            ->set('name',  'abcd')
            ->call('save')
            ->assertHasErrors(['name' => 'between']);
    }

    /** @test  */
    function name_must_have_a_maximum_chars()
    {
        Livewire::test(InputName::class)
            ->set('name',  Str::random(151))
            ->call('save')
            ->assertHasErrors(['name' => 'between']);
    }
}
