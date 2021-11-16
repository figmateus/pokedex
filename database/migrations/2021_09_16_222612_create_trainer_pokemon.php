<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerPokemon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_pokemon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainer_id');
            $table->foreignId('pokemon_id');
            $table->timestamps();

            $table->foreign('trainer_id')->references('id')->on('Trainers');
            $table->foreign('pokemon_id')->references('id')->on('pokemon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainer_pokemon');
    }
}
