<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'location', 'toDo', 'toProvide',
        'toBring', 'photos', 'minimumAge', 'skillLevel',
        'activityLevel', 'toKnow', 'groupSize', 'duration',
        'starting', 'price', 'privateGroup', 'pricePrivateGroup',
        'reservationLimitTime', 'status',
    ];

    protected $casts = [
        'toProvide' => 'array',
        'toBring'   => 'array'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
