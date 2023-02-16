<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LigneCommandeVente extends Model
{
    protected $fillable = ['commandeVente_id','produit_id','qt'];

    use HasFactory, SoftDeletes;

    public function commandeVente() {
        return $this->BelongsTo(CommandeVente::class, 'commandeVente_id');
    }

    public function produit() {
        return $this->BelongsTo(Produit::class, 'produit_id');
    }

    public function user() {

        return $this->belongsTo(User::class);

    }

}
