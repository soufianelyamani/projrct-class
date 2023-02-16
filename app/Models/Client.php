<?php

namespace App\Models;

use App\Models\CommandeVente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    protected $fillable = ['id','nom', 'prenom', 'telephone', 'email', 'ville', 'adresse', 'user_id'];

    use HasFactory, SoftDeletes;

    public function commandeVente() {
        return $this->hasMany(CommandeVente::class);
    }

    public function user() {

        return $this->belongsTo(User::class);

    }

    //pour deleting client avec son commentaire
    public static function boot() {
        parent::boot();

        static::deleting(function($commandeVente){

            $commandeVente->commandeVente()->delete();

        });

        static::restoring(function($commandeVente){

            $commandeVente->commandeVente()->restore();

        });
    }
}
