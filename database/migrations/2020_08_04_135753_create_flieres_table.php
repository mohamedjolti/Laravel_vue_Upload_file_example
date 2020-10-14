<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flieres', function (Blueprint $table) {
            $table->id('Id_filiere');
            $table->unsignedBigInteger('Id_pole');
            $table->foreign('Id_pole')->references('Id_pole')->on('poles')->onDelete('cascade');
            $table->string('Name');
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
        Schema::dropIfExists('flieres');
    }
}
