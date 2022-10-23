<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Velo;

class Location extends Model
{
    protected $table = 'location';
    protected $primaryKey = 'id';
    protected $fillable = ['lieu', 'cin', 'dateDebut', 'dateFin'];
    public $timestamps = false;

    public function velo()
    {
        return $this->belongsTo(Velo::class);
    }
}
