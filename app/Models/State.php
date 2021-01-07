<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cities()
    {
        $this->hasMany(City::class);
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
