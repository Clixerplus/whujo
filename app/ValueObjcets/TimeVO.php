<?php

namespace App\ValueObjcets;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class TimeVO implements Arrayable
{

    /**
     * Variable contentiva de la hora
     *
     * @var int
     */
    public $hour;

    /**
     * Variable contentiva de la minute
     *
     * @var int
     */
    public $minute;

    /**
     * Object Constructor
     *
     * @param int $hour
     * @param int $minute
     * @return TimeVO
     */
    public function __construct($hour = 0, $minute = 0)
    {
        $this->hour = $hour;

        $this->minute = $minute;
    }

    /**
     * Convert object to array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'hour'   => $this->hour,
            'minute' => $this->minute
        ];
    }
}
