<?php

namespace App\Models;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

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
}
