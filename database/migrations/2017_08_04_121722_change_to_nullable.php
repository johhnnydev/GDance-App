<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fathers', function (Blueprint $table) {
            $table->string('father_suffix')->nullable()->change();
        });
        Schema::table('mothers', function (Blueprint $table) {
            $table->string('mother_suffix')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mothers', function (Blueprint $table) {
            $table->string('mother_suffix')->change();
        });
        Schema::table('fathers', function (Blueprint $table) {
            $table->string('father_suffix')->change();
        });
    }
}
