<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\ChangeColumn;
use Illuminate\Support\Facades\Schema;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->mediumInteger('week1');
            $table->mediumInteger('week2');
            $table->mediumInteger('week3');
            $table->mediumInteger('week4');
            $table->mediumInteger('finaltask');
            $table->mediumInteger('finalscore');
            $table->timestamps();

            $table->foreign('person_id')->references('id')->on('person');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score');
    }
}
