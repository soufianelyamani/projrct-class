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
        Schema::create('produits', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('libelle');
            $table->unsignedBigInteger('typeProduit_id')->unique();
            $table->foreign('typeProduit_id')->references('id')->on('type_Produits');
            $table->float('prix');
            $table->string('image');
            $table->string('description');
            $table->integer('qtStock');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
