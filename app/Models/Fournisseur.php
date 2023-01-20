<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable = ['nom','telephone','email','ville','adresse'];

    use HasFactory;

    public function commandeAchet() {
        return $this->hasOne('Fournisseur');
    }
}
