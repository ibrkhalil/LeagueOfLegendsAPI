<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champion_skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('small_name');
            $table->string('name');
            $table->string('description');
            $table->bigInteger('champ_id')->unsigned();
            $table->foreign('champ_id')->references('id')->on('champions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champion_skills');
    }
}
