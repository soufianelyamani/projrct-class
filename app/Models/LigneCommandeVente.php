<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LigneCommandeVente extends Model
{
    protected $fillable = ['commandeVente_id','produit_id','qt'];

    use HasFactory, SoftDeletes;

    public function CommandeVente() {
        return $this->BelongsTo('CommandeVente');
    }

    public function Produit() {
        return $this->BelongsTo('Produit');
}

}
