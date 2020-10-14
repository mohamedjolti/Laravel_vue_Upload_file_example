<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universites', function (Blueprint $table) {
            $table->id('Id_universite');
            $table->unsignedBigInteger('id_region');
            $table->foreign('id_region')->references('id_region')->on('regions')->onDelete('cascade');
            $table->string('Nom');
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
        Schema::dropIfExists('universites');
    }
}
