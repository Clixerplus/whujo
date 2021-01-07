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
        $this->belongsTo(State::class);
    }
    
    public function experiences()
    {
        $this->hasMany(Experience::class);
    }

    public function services()
    {
        $this->hasMany(Service::class);
    }

    public function localities()
    {
        $this->hasMany(Locality::class);
    }
}
