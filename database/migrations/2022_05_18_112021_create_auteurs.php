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
        Schema::create('auteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->timestamps();
        });
         // crée un auteur inconnu
         Schema::table('livres', function(Blueprint $table) {
            $table->unsignedBigInteger('id_auteur');

            // Par défaut auteur inconnu
            $table->foreign('id_auteur')->references('id')->on('auteurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auteurs');
    }
};
