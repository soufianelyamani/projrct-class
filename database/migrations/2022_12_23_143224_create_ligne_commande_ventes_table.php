<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_commande_ventes', function (Blueprint $table) {
            $table->foreignId('commandeVente_id')->constrained('commande_ventes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('produit_id')->constrained('produits')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne_commande_ventes');
    }
};
