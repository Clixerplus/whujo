<?php

namespace Tests\Feature\App\Http\Livewire;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Category;
use App\Models\Locality;
use App\Models\Microservice;
use App\Http\Livewire\ServiceSearch;
use App\Http\Livewire\Wizard\InputPrice;

use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceSearchTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_show_a_list_of_matching_search_results()
    {
        Service::factory()->create(['name' => 'New service']);
        Service::factory()->create(['name' => 'Old service']);

        Livewire::test(ServiceSearch::class, [
            'search' => 'new',
        ])
            ->assertViewHas('results')
            ->assertDontSeeHtml('Old service')
            ->assertSeeHtml('New service');
    }

    /** @test */
    function it_show_a_not_found_message_when_there_are_no_matching_results()
    {
        Service::factory()->create(['name' => 'New service']);

        Livewire::test(ServiceSearch::class, [
            'search' => 'old',
        ])
            ->assertViewHas('results')
            ->assertDontSeeHtml('New service')
            ->assertSeeHtml(__('No results for your search'));
    }

    /** @test */
    function it_only_show_published_product()
    {
        Service::factory()->create([
            'name' => 'Product Published',
            'status' => STATUS_PUBLISHED
        ]);
        Service::factory()->create([
            'status' => STATUS_UNPUBLISHED,
            'name' => 'Product hidden'
        ]);
        Service::factory()->create([
            'status' => STATUS_INCOMPLETE,
            'name' => 'Product hidden'
        ]);

        Livewire::test(ServiceSearch::class, [
            'search' => 'Product',
        ])
            ->assertDontSeeHtml('Product hidden')
            ->assertSeeHtml('Product Published');
    }

    /** @test */
    function it_can_filter_product_by_price_bewteen_a_range()
    {
        Service::factory()->create([
            'name' => 'Product not in range',
            'price' => 5000
        ]);
        Service::factory()->create([
            'name' => 'Product not in range',
            'price' => 50000
        ]);
        Service::factory()->create([
            'name' => 'Product in range',
            'price' => 20000
        ]);

        Livewire::test(ServiceSearch::class)
            ->assertSet('minPrice', 0)
            ->assertSet('maxPrice', PHP_FLOAT_MAX)
            ->set('search', 'Product')
            ->set('minPrice', 10000)
            ->set('maxPrice', 25000)
            ->assertDontSeeHtml('Product not in range')
            ->assertSeeHtml('Product in range');
    }

    /**
     * @dataProvider filtersProvider
     * @test
     */
    function it_can_filter_product($field)
    {
        Locality::factory(2)->create();
        Category::factory(2)->create();

        Service::factory()->create([
            'name' => 'Product hidde',
            'category_id' => 1,
            'state_id'    => 1,
            'city_id'     => 1,
            'locality_id' => 1,
        ]);

        Service::factory()->create([
            'name' => 'Product show',
            'category_id' => 2,
            'state_id'    => 2,
            'city_id'     => 2,
            'locality_id' => 2,
        ]);

        Livewire::test(ServiceSearch::class)
            ->assertSet($field, null)
            ->set('search', 'Product')
            ->set($field, 2)
            ->assertDontSeeHtml('Product hidden')
            ->assertSeeHtml('Product show');
    }

    function filtersProvider()
    {
        return [
            'filter by category' => ['category'],
            'filter by state'    => ['state'],
            'filter by city'     => ['city'],
            'filter by location' => ['locality'],
        ];
    }

    /**
     * @dataProvider OrderByOptionsProvider
     * @test
     */
    function it_can_sort_the_results_by_given_option($option, $resultsInOrder)
    {
        Service::factory()->create([
            'price' => InputPrice::MIN_PRICE_ALLOWED + 10,
            'name'  => 'Name A',
            'created_at' => now()->subDay()
        ]);
        Service::factory()->create([
            'price' => InputPrice::MIN_PRICE_ALLOWED,
            'name'  => 'Name B'
        ]);
        Service::factory()->create([
            'price' => InputPrice::MIN_PRICE_ALLOWED + 5,
            'name'  => 'Name C',
            'created_at' => now()->subMonth()
        ]);

        Livewire::test(ServiceSearch::class, [
            'search'  => 'Name',
            'type'    => config('product.TYPE_SERVICE'),
            'orderBy' => $option
        ])
            ->assertSeeHtmlInOrder($resultsInOrder);
    }

    function OrderByOptionsProvider()
    {
        return [
            'sort by lowest price'  => [
                'lowest',  ['Name B', 'Name C', 'Name A']
            ],

            'sort by highest price' => [
                'highest', ['Name A', 'Name C', 'Name B']
            ],

            'sort by newest' => [
                'newest', ['Name B', 'Name A', 'Name C']
            ],
        ];
    }

    /** @test */
    function it_show_12_results_per_page()
    {
        Service::factory(12)->create();
        Service::factory()->create(['name' => 'Product test']);

        Livewire::test(ServiceSearch::class)
            ->set('page', 1)
            ->assertDontSee('Product test')
            ->set('page', 2)
            ->assertSee('Product test');
    }

    /** @test */
    function it_can_filters_by_microservices()
    {
        Service::factory()->create(['name' => 'Product without microservices']);
        Service::factory()->hasMicroservices()->create(['name' => 'Product with microservices']);

        Livewire::test(ServiceSearch::class)
            ->set('search', 'Product')
            ->set('hasMicroservices', true)
            ->assertDontSee('Product without microservices')
            ->assertSee('Product with microservices');
    }

    /** @test */
    function it_can_filter_by_microservices_with_a_specific_term()
    {
        Service::factory()->has(
            Microservice::factory(['name' => 'Other Name'])
        )->create(['name' => 'Product hidden']);

        Service::factory()->has(
            Microservice::factory(['name' => 'Micro Name'])
        )->create(['name' => 'Product showing']);

        Livewire::test(ServiceSearch::class)
            ->set('search', 'Product')
            ->set('hasMicroservices', true)
            ->set('microservice', 'Micro')
            ->assertDontSee('Product hidden')
            ->assertSee('Product showing');
    }

    /**
     *  @dataProvider filterToResetProvider
     *  @test
     */
    function it_can_reset_all_filters($key, $setValue, $resetValue)
    {
        Livewire::test(ServiceSearch::class)
            ->set($key, $setValue)
            ->call('resetFilters')
            ->assertSet($key, $resetValue);
    }

    function filterToResetProvider()
    {
        return [
            'can reset category' => ['category', '1', null],
            'can reset state'    => ['state', '1', null],
            'can reset city'     => ['city', '1', null],
            'can reset locality' => ['locality', '1', null],
            'can reset minPrice' => ['minPrice', '1', 0],
            'can reset maxPrice' => ['maxPrice', '1', PHP_FLOAT_MAX],
            'can reset hasMicroservices' => ['hasMicroservices', true, false],
            'can reset microservices'    => ['microservice', 'string', null],
        ];
    }
}
