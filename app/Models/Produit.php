<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
protected $fillable=['nomProduit','descriptionProduit','prixProduit','quantity','category_id','image','etatProduit'];
    protected $table='produits';
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }



}
