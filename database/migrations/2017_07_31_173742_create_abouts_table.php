<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('interest_hobbies')->nullable();
            $table->string('skills_talents')->nullable();
            $table->string('attributes_attitudes')->nullable();
            $table->string('goals_ambitions')->nullable();
            $table->string('assets_strengths')->nullable();
            $table->string('liabilities_weaknesses')->nullable();
            $table->string('present_concerns')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('abouts');
    }
}
