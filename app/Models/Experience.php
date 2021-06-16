<?php

namespace App\Models;



use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Casts\TimeCast;
use App\Traits\HasSlug;
use App\Models\Category;
use App\Models\Locality;
use Spatie\Tags\HasTags;
use App\Traits\HasRating;
use App\Traits\HasPublish;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Experience extends Model
{
    use HasFactory;
    use HasSlug;
    use HasTags;
    use HasRating;
    use HasPublish;

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
            $builder->where('shareACoffee', false);
        });

        self::creating(function ($model) {
            $model->type = self::class;
        });
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
        return config('product.TYPE_EXPERIENCE');
    }
    public function getCoverPhotoAttribute()
    {
        return $this->photos[0];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', STATUS_PUBLISHED);
    }

    public function scopebyNameAndDescription(Builder $query, string $search): Builder
    {
        return $query->where(function ($q) use ($search) {
            $q->where('name', 'like', $search);
            $q->orWhere('description', 'like', $search);
        });
    }
}
