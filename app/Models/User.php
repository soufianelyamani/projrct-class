<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function clients() {

        return $this->hasMany(Client::class);

    }

    // public function commandeVentes() {

    //     return $this->hasMany(commandeVentes::class);

    // }

    // public function commandeAchats() {

    //     return $this->hasMany(CommandeAchat::class);

    // }

    // public function Fournisseurs() {

    //     return $this->hasMany(Fournisseur::class);

    // }

    // public function LigneCommandeAchats() {

    //     return $this->hasMany(LigneCommandeAchat::class);

    // }

    // public function LigneCommandeVentes() {

    //     return $this->hasMany(LigneCommandeVente::class);

    // }

    // public function Produis() {

    //     return $this->hasMany(Produit::class);

    // }

    // public function TypeProduits() {

    //     return $this->hasMany(TypeProduit::class);

    // }
}
