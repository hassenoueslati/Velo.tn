<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locationvelo extends Model
{
    use HasFactory;
    public function velo()
    {
        return $this->belongsToMany(velo::class);
    }
}
