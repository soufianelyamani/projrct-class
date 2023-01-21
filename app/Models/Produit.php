<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    protected $fillable = ['libelle','typeProduit_id','prix','image','description','qtStock'];

    use HasFactory, SoftDeletes;

    public function TypeProduit() {
        return $this->BelongsTo('TypeProduit');
    }

    public function LigneCommendeVente(){
        return $this->hasOne('LigneCommendeVente');
    }

    public function CommandeVente(){
        return $this->belongsToMany(CommandeVente::class);
    }

    public function CommandeAchat(){
        return $this->belongsToMany(CommandeAchat::class);
    }

}
