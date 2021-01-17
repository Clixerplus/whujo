<?php

namespace App\Models;


use App\Casts\TimeCast;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'user_id', 'category_id', 'name', 'location', 'description',
        'toProvide', 'toBring', 'photos', 'minimumAge', 'skillLevel',
        'activityLevel', 'toKnow', 'groupSize', 'duration', 'starting',
        'price', 'privateGroup', 'privateGroupPrice', 'reservationLimitTime',
        'status', 'state_id', 'city_id', 'locality_id', 'address',
    ];

    protected $casts = [
        'toProvide' => 'array',
        'toBring'   => 'array',
        'duration'  => TimeCast::class,
        'starting'  => TimeCast::class,
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }

    public function getTypeAttribute()
    {
        return config('product.TYPE_EXPERIENCE');
    }
}
