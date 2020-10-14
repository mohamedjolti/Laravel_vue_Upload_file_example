<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContaraintFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contaraint_filieres', function (Blueprint $table) {
            $table->id();
            $table->string('Moy_regional');
            $table->string('Moy_national');
            $table->string('Min_age');
            $table->string('Max_age');
            $table->string('Poids');
            $table->string('Vision');
            $table->string('Taille');
            $table->string('Pre_operation');
            $table->unsignedBigInteger('Id_filiere');
            $table->foreign('Id_filiere')->references('Id_filiere')->on('flieres')->onDelete('cascade');
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
        Schema::dropIfExists('contaraint_filieres');
    }
}
