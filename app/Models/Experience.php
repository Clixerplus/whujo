<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'location', 'todo', 'toProvide',
        'toBring', 'photos', 'minimum_age', 'skill_level',
        'activity_level', 'to_know', 'group_size', 'duration',
        'starting', 'price', 'private_group', 'price_private_group',
        'reservation_limit_time', 'status',
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
