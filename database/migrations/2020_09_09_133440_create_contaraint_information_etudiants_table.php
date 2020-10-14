<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContaraintInformationEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contaraint_information_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('Ville');
            $table->string('Pole');
            $table->string('Age');
            $table->string('Poids');
            $table->string('National');
            $table->string('Regional');
            $table->string('Etudier_prive');
            $table->string('Etudier_hors_region');
            $table->string('Type_logement');
            $table->string('Taille');
            $table->string('version');
            $table->string('Pre_operation');
            $table->unsignedBigInteger('Id_etudiant');
            $table->foreign('Id_etudiant')->references('Id_etudiant')->on('etudiants')->onDelete('cascade');
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
        Schema::dropIfExists('contaraint_information_etudiants');
    }
}
