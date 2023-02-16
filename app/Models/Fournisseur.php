<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fournisseur extends Model
{
    protected $fillable = ['nom','telephone','email','ville','adresse'];

    use HasFactory, SoftDeletes;

    public function commandeAchet() {
        return $this->hasOne('Fournisseur');
    }

    public function user() {

        return $this->belongsTo(User::class);

    }
}
