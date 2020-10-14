<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('Id_etudiant');
            $table->unsignedBigInteger('Id_ville');
            $table->foreign('Id_ville')->references('Id_ville')->on('villes')->onDelete('cascade');
            $table->unsignedBigInteger('Id_serie');
            $table->foreign('Id_serie')->references('Id_serie')->on('serie_bacs')->onDelete('cascade');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email');
            $table->string('Age');
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
        Schema::dropIfExists('etudiants');
    }
}
