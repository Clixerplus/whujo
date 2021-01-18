<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $incrementing = false;

    protected $keyType = 'string';

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function localities()
    {
        return $this->hasMany(Locality::class);
    }
}
