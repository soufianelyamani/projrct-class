<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LigneCommandeAchat extends Model
{
    protected $fillable = ['commandeAchat_id','produit_id','qt'];

    use HasFactory;

    public function CommandeAchat() {
        return $this->BelongsTo('CommandeAchat');
    }

    public function Produit() {
        return $this->BelongsTo('Produit');
    }
}
