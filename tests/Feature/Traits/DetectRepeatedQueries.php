<?php

namespace Tests\Feature\Traits;

use Illuminate\Support\Facades\DB;

trait DetectRepeatedQueries
{
    public function enableQueryLog()
    {
        DB::enableQueryLog();
    }

    /**
     * Assert there are not repeated qieries being executed
     */
    public function assertQueryRepeatExactly($times)
    {
        $selects = $this->prepareSelects();

        foreach ($selects as $select => $amount) {
            $this->assertEquals(
                $times,
                $amount,
                "The following SELECT was executed $amount times:\n\n $select"
            );
        }
    }

    /**
     * Assert there are not repeated qieries being executed
     */
    public function assertRepeatedQueries()
    {
        $selects = $this->prepareSelects();

        foreach ($selects as $select => $amount) {
            $this->assertEquals(
                1,
                $amount,
                "The following SELECT was executed $amount times:\n\n $select"
            );
        }
    }

    /**
     * Assert there are not repeated qieries being executed
     */
    public function assertQueryRepetitionsLessThan($times)
    {
        $selects = $this->prepareSelects();

        foreach ($selects as $select => $amount) {
            $this->assertLessThanOrEqual(
                $times,
                $amount,
                "The following SELECT was executed $amount times:\n\n $select"
            );
        }
    }

    private function prepareSelects()
    {
        $queries = array_column(DB::getQueryLog(), 'query');
        $selects = array_filter($queries, function ($query) {
            return strpos($query, 'select') === 0;
        });

        return array_count_values($selects);
    }

    public function flushQueryLog()
    {
        DB::flushQueryLog();
    }
}
