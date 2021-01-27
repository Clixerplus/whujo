<?php

namespace Tests\Feature\App\Http\Livewire;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Experience;
use App\Http\Livewire\SearchProduct;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchProductTest extends TestCase
{
    use RefreshDatabase;

    

    /** @test */
    public function testExample()
    {

        $this->assertTrue(true);
    }
}
