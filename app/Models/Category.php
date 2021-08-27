<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'parent_id', 'active'
    ];

    public function experiences()
    {
        $this->hasMany(Experience::class);
    }

    public function services()
    {
        $this->hasMany(Service::class);
    }

    public function scopeActivated($query)
    {
        return $query->where('active', true);
    }

    public function scopeDeactivated($query)
    {
        return $query->where('active', false);
    }

    public function childs()
    {
        return self::where('parent_id', $this->id)->get();
    }
}
