<?php

namespace App\Models;

use App\Models\Client;
use App\Scope\TestScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommandeVente extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['id', 'dateCom', 'client_id'];


    public function client() {
        return $this->BelongsTo(Client::class, 'client_id');
    }

    public function ligneCommandeVente() {
        return $this->hasOne(LigneCommandeVente::class);
    }

    public function produit(){
        return $this->hasMany(Produit::class);
    }

    public function user() {

        return $this->belongsTo(User::class);

    }

    // public function scopeKhode(Builder $query) {

    //     return $query->get();

    // }


    public static function boot() {
        parent::boot();

        parent::addGlobalScope(new TestScope);

        // static::deleting(function($client){

        //     $client->client()->delete();

        // });

        // static::restoring(function($client){

        //     $client->client()->restore();

        // });
    }
}
