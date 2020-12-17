<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'category_id', 'city_id', 'departament_id', 'locality_id',
        'address', 'name', 'description', 'features', 'price', 'published_at',
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function microservices()
    {
        return $this->hasMany(Microservice::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
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
