<?php

namespace App\Models;


use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Traits\HasSlug;
use App\Models\Category;
use App\Models\Locality;
use Spatie\Tags\HasTags;
use App\Models\Microservice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use HasSlug;
    use HasTags;

    protected $fillable = [
        'user_id', 'category_id', 'state_id', 'city_id', 'locality_id',
        'address', 'name', 'description', 'features', 'price', 'published_at',
        'modality'
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

    public function isPublished()
    {
        return $this->status == 'STATUS_PUBLISHED';
    }
    public function isComplete()
    {
        return $this->status != 'STATUS_INCOMPLETE';
    }

    public function getTypeAttribute()
    {
        return config('product.TYPE_SERVICE');
    }
}
