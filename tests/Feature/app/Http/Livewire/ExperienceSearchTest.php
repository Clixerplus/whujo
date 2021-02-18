<?php

namespace Tests\Feature\app\Http\Livewire;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Category;
use App\Models\Locality;
use App\Models\Experience;
use App\Http\Livewire\ExperienceSearch;
use App\ValueObjcets\TimeVO;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExperienceSearchTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_show_a_list_of_matching_search_results()
    {
        Experience::factory()->create(['name' => 'New experience']);
        Experience::factory()->create(['name' => 'Old experience']);

        Livewire::test(ExperienceSearch::class, [
            'search' => 'new',
        ])
            ->assertViewHas('results')
            ->assertDontSeeHtml('Old experience')
            ->assertSeeHtml('New experience');
    }

    /** @test */
    function it_show_a_not_found_message_when_there_are_no_matching_results()
    {
        Experience::factory()->create(['name' => 'New experience']);

        Livewire::test(ExperienceSearch::class, [
            'search' => 'old',
        ])
            ->assertViewHas('results')
            ->assertDontSeeHtml('New experience')
            ->assertSeeHtml(__('No results for your search'));
    }

    /** @test */
    function it_only_show_published_product()
    {
        Experience::factory()->create([
            'name' => 'Product Published',
            'status' => STATUS_PUBLISHED
        ]);
        Experience::factory()->create([
            'status' => STATUS_UNPUBLISHED,
            'name' => 'Product hidden'
        ]);
        Experience::factory()->create([
            'status' => STATUS_INCOMPLETE,
            'name' => 'Product hidden'
        ]);

        Livewire::test(ExperienceSearch::class)
            ->call('search', 'Product')
            ->assertDontSeeHtml('Product hidden')
            ->assertSeeHtml('Product Published');
    }

    /** @test */
    function it_can_filter_product_by_price_bewteen_a_range()
    {
        Experience::factory()->create([
            'name' => 'Product not in range',
            'price' => 5000
        ]);
        Experience::factory()->create([
            'name' => 'Product not in range',
            'price' => 50000
        ]);
        Experience::factory()->create([
            'name' => 'Product in range',
            'price' => 20000
        ]);

        Livewire::test(ExperienceSearch::class, [
            'minPrice' => 10000,
            'maxPrice' => 25000
        ])

            ->set('search', 'Product')
            ->call('search')
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

        Experience::factory()->create([
            'name' => 'Product hidde',
            'category_id' => 1,
            'state_id'    => 1,
            'city_id'     => 1,
            'locality_id' => 1,
        ]);

        Experience::factory()->create([
            'name' => 'Product show',
            'category_id' => 2,
            'state_id'    => 2,
            'city_id'     => 2,
            'locality_id' => 2,
        ]);

        Livewire::test(ExperienceSearch::class)
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
        Experience::factory()->create([
            'price' => 70000,
            'name'  => 'Name A',
            'created_at' => now()->subDay()
        ]);
        Experience::factory()->create([
            'price' => 500,
            'name'  => 'Name B'
        ]);
        Experience::factory()->create([
            'price' => 6000,
            'name'  => 'Name C',
            'created_at' => now()->subMonth()
        ]);

        Livewire::test(ExperienceSearch::class, [
            'search'  => 'Name',
            'type'    => config('product.TYPE_EXPERIENCE'),
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
        Experience::factory(12)->create();
        Experience::factory()->create(['name' => 'Product test']);

        Livewire::test(ExperienceSearch::class)
            ->set('page', 1)
            ->assertDontSee('Product test')
            ->set('page', 2)
            ->assertSee('Product test');
    }

    /**
     *  @dataProvider filterOptionProvider
     *  @test
     */
    function it_can_filters_by_options($field, $valueHidden, $valueShowing, $valueFilter)
    {
        Experience::factory()->create([
            'name' => 'Product hidden', $field => $valueHidden
        ]);
        Experience::factory()->create([
            'name' => 'Product showing', $field => $valueShowing
        ]);

        Livewire::test(ExperienceSearch::class)
            ->set('search', 'Product')
            ->set($field, $valueFilter)
            ->assertDontSee('Product hidden')
            ->assertSee('Product showing');
    }

    function filterOptionProvider()
    {
        return [
            'filter by minimumAge'    => ['minimumAge', 5, 18, 15],
           // 'filter by skillLevel'    => ['skillLevel', SKILL_LVL_BEGINNER, SKILL_LVL_ADVANCED, SKILL_LVL_ADVANCED],
            //'filter by activityLevel' => ['activityLevel', ACTIVITY_LVL_LIGHT, ACTIVITY_LVL_EXTREME, ACTIVITY_LVL_EXTREME],
            //'filter by privateGroup'  => ['privateGroup', false, true, true],
        ];
    }

    /**
     *  @dataProvider filterOptionRangeProvider
     *  @test
     */
    function it_can_filter_by_options_in_range($field, $valHidden, $valShowing, $attrRange, $filterValue)
    {
        Experience::factory()->create([
            'name' => 'Product hidden', $field => $valHidden
        ]);

        Experience::factory()->create([
            'name' => 'Product showing', $field => $valShowing
        ]);

        Livewire::test(ExperienceSearch::class)
            ->set('search', 'Product')
            ->set($attrRange, $filterValue)
            ->assertDontSee('Product hidden')
            ->assertSee('Product showing');
    }

    function filterOptionRangeProvider()
    {
        return [
            'filter by minGroupSize'         => ['groupSize', 5, 15, 'minGroupSize', 10],
            'filter by maxGroupSize'         => ['groupSize', 15, 5, 'maxGroupSize', 10],
            'filter by minPrivateGroupPrice' => ['privateGroupPrice', 2500, 15000, 'minPrivateGroupPrice', 10000],
            'filter by maxPrivateGroupPrice' => ['privateGroupPrice', 15000, 2500, 'maxPrivateGroupPrice', 10000],
            'filter by minDuration'          => ['duration', new TimeVO(1, 0), new TimeVO(5, 0), 'minDuration', 3],
            'filter by maxDuration'          => ['duration', new TimeVO(5, 0), new TimeVO(1, 0), 'maxDuration', 3],

        ];
    }

    /**
     *  @dataProvider filterToResetProvider
     *  @test
     */
    function it_can_reset_all_filters($key, $setValue, $resetValue)
    {
        Livewire::test(ExperienceSearch::class)
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
            'can reset minimumAge'      => ['minimumAge', 1, null],
            'can reset skillLevel'      => ['skillLevel', 'string', null],
            'can reset activityLevel'   => ['activityLevel', 'string', null],
            'can reset minGroupSize'    => ['minGroupSize', 5, 0],
            'can reset maxGroupSize'    => ['maxGroupSize', 5, 15],
            'can reset minDuration'     => ['minDuration', 5, 0],
            'can reset maxDuration'     => ['maxDuration', 5, 17],
            'can reset privateGroup'    => ['privateGroup', true, false],
            'can reset minPrivateGroupPrice'    => ['minPrivateGroupPrice', 5, 0],
            'can reset maxPrivateGroupPrice'    => ['maxPrivateGroupPrice', 5, PHP_FLOAT_MAX],
        ];
    }
}
