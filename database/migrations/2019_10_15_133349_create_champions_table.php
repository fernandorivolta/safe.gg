<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('lore');
            $table->text('subname');
            $table->text('passive');
            $table->text('passive_img');
            $table->text('skill_q');
            $table->text('skill_q_img');
            $table->text('skill_w');
            $table->text('skill_w_img');
            $table->text('skill_e');
            $table->text('skill_e_img');
            $table->text('skill_r');
            $table->text('skill_r_img');
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
        Schema::dropIfExists('champions');
    }
}
