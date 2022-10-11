<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class velo extends Model
{
    use HasFactory;
    public function locationvelo()
    {
        return $this->belongsToMany(locationvelo::class);
    }
}
