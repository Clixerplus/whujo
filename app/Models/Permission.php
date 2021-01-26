<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as SpatieModelsPermission;

class Permission extends SpatieModelsPermission
{
    use HasFactory;
}
