<?php

namespace App\Models;

use App\Casts\TimeCast;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShareACoffee extends Experience
{
    protected $table = 'experiences';

    protected $fillable = [
        'user_id', 'category_id', 'name', 'location', 'description',
        'toProvide', 'toBring', 'photos', 'minimumAge', 'skillLevel',
        'activityLevel', 'toKnow', 'groupSize', 'duration', 'starting',
        'price', 'privateGroup', 'privateGroupPrice', 'reservationLimitTime',
        'status', 'state_id', 'city_id', 'locality_id', 'address', 'modality',
        'shareACoffee'
    ];

    protected $casts = [
        'toProvide' => 'array',
        'toBring'   => 'array',
        'photos'    => 'array',
        'duration'  => TimeCast::class,
        'starting'  => TimeCast::class,
        'shareACoffee' => 'boolean'
    ];


    protected $hidden = [
        'address'
    ];


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('shareACoffee', true);
        });

        self::creating(function ($model) {
            $model->type = self::class;
        });
    }

    public function getRouteAttribute()
    {
        return route('shareACoffee-show', $this);
    }
}
