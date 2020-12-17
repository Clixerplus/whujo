<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Microservice extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'name',
        'description', 'price',
    ];

    public function service()
    {
        $this->belongsTo(Service::class);
    }
}
