<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function experiences()
    {
        $this->hasMany(Experience::class);
    }

    public function services()
    {
        $this->hasMany(Service::class);
    }

    public function scopeOnlyActive($query)
    {
        return $this->all();
    }
}
