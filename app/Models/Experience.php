<?php

namespace App\Models;

use App\Models\User;
use App\Casts\TimeCast;
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
        'reservationLimitTime', 'status', 'city_id', 'departament_id',
        'locality_id', 'address'
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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function departament()
    {
        return $this->belongsTo(Departament::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}
