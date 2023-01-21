<?php

namespace App\Models;

use App\Models\CommandeVente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    protected $fillable = ['id','nom', 'prenom', 'telephone', 'email', 'ville', 'adresse'];

    use HasFactory, SoftDeletes;

    public function CommandeVente() {
        return $this->hasMany(CommandeVente::class);
    }

    //pour deleting client avec son commentaire
    public static function boot() {
        parent::boot();

        static::deleting(function($post){

            $post->CommandeVente()->delete();

        });
    }
}
