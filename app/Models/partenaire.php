<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partenaire extends Model
{
    use HasFactory;
    public function atelier()
    {
        return $this->belongsToMany(atelier::class);
    }
}
