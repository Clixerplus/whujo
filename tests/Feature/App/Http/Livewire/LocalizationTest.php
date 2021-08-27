<?php

namespace Tests\Feature\App\Http\Livewire;

use App\Http\Livewire\Localization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class LocalizationTest extends TestCase
{


    /** @test */
    public function it_can_change_locale()
    {
        Livewire::test(Localization::class)
            ->assertSet('lang', 'es')
            ->call('changeLocale', 'en')
            ->assertSet('lang', 'en');

        $this->get('/');

        $this->assertEquals('en', app()->getLocale());
    }

    /** @test */
    public function it_can_change_locale_only_for_valid_options()
    {
        Livewire::test(Localization::class)
            ->assertSet('lang', 'es')
            ->call('changeLocale', 'pr')
            ->assertSet('lang', 'es');

        $this->get('/');

        $this->assertEquals('es', app()->getLocale());
    }
}
