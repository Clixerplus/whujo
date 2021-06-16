<?php

namespace App\Traits;

trait HasPublish
{
    public function isPublished()
    {
        return $this->status == 'STATUS_PUBLISHED';
    }
    public function isComplete()
    {
        return $this->status != 'STATUS_INCOMPLETE';
    }
}
