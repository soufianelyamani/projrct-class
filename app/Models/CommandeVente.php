<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandeVente extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'dateCom', 'client_id'];


    public function Client() {
        return $this->BelongsTo(Client::class);
    }

    public function LigneCommandeVente() {
        return $this->hasOne(LigneCommandeVente::class);
    }

    public function Produit(){
        return $this->belongsToMany(Produit::class);
    }
}
