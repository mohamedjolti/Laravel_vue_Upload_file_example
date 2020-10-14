<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choixes', function (Blueprint $table) {
            $table->id('Choix_id');
            $table->unsignedBigInteger('Question_id');
            $table->foreign('Question_id')->references('Question_id')->on('questions')->onDelete('cascade');
            $table->string('description');
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
        Schema::dropIfExists('choixes');
    }
}
