<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeProduit extends Model
{
    protected $fillable = ['libelle'];

    use HasFactory, SoftDeletes;

    public function Produit() {
        return $this->hasOne('Produit');
    }
}
