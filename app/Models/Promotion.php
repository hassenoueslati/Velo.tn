<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable=['nomPromotion','categoriePromotion','descriptionPromotion','dateDebutPromo','dateFinPromo','image','etatProduit'];

    public function produit()
    {

        return $this->hasMany(Produit::class);
    }
}
