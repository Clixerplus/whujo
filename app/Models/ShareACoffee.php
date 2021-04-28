<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShareACoffee extends Experience
{
    protected $table = 'experiences';

    public function getTypeAttribute()
    {
        return 'share-a-coffee';
    }
}
