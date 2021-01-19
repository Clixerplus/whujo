<?php

namespace App\Models;


use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'user_id', 'category_id', 'state_id', 'city_id', 'locality_id',
        'address', 'name', 'description', 'features', 'price', 'published_at',
    ];

    protected $casts = [
        'features' => 'array',
        'photos'   => 'array',
    ];

    public function microservices()
    {
        return $this->hasMany(Microservice::class);
    }

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
        return TYPE_SERVICE;
    }
}
