<?php

namespace Tests\Feature\App\Http\Livewire;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Locator;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocatorTest extends TestCase
{
    use RefreshDatabase;


    public function test_example()
    {


        Livewire::test(Locator::class)
        ->call('search');

        //$response->assertStatus(200);
    }
}
