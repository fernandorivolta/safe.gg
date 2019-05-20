<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaProplayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProPlayer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nick', 20);
            $table->string('team', 40);
            $table->string('region', 2);
            $table->string('position',3);
            $table->string('photo', 80);
            $table->string('nationality', 2);
            $table->string('name', 80);
            $table->string('account_id', 80);
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
        Schema::dropIfExists('ProPlayer');
    }
}
