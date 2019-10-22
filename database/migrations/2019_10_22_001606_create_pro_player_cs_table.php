<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProPlayerCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proplayercs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('roundcontribution', 20);
            $table->string('deathperround', 20);
            $table->string('mapsplayed', 20);
            $table->string('kddiff', 20);
            $table->string('team', 60);
            $table->integer('age');
            $table->string('nationality', 60);
            $table->string('proplayername', 60);
            $table->string('nick', 40);
            $table->string('steamlink', 120);
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
        Schema::dropIfExists('proplayercs');
    }
}
