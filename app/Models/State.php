<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $incrementing = false;

    protected $keyType = 'string';

    public function cities()
    {
        $this->hasMany(City::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
