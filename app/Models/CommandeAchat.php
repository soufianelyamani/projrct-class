<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommandeAchat extends Model
{

    protected $fillable = ['dateCom','fournisseur_id'];

    use HasFactory, SoftDeletes;

    public function Fournisseur() {

        return $this->belongsTo('Fournisseur');

    }

    public function LigneCommendeAchat() {
        return $this->hasOne('LigneCommendeAchat');
    }

    public function Produit(){
        return $this->belongsToMany(Produit::class);
    }
}
