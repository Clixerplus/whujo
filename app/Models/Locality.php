<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $incrementing = false;

    protected $keyType = 'string';

    public function city()
    {
        $this->belongsTo(City::class);
    }

    public function experiences()
    {
        $this->hasMany(Experience::class);
    }

    public function services()
    {
        $this->hasMany(Service::class);
    }
}
