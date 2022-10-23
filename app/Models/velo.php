<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Velo extends Model
{
    protected $table = 'velos';
    protected $primaryKey = 'id';
    protected $fillable = ['type', 'nombres', 'couleurs', 'prix'];
    public $timestamps = false;

    public function Location()
    {
        return $this->hasMany(Location::class, 'velo_id', 'id');
    }

    
}
