<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LigneCommandeAchat extends Model
{
    protected $fillable = ['commandeAchat_id','produit_id','qt'];

    use HasFactory, SoftDeletes;

    public function CommandeAchat() {
        return $this->BelongsTo('CommandeAchat');
    }

    public function Produit() {
        return $this->BelongsTo('Produit');
    }

    public function user() {

        return $this->belongsTo(User::class);

    }
}
