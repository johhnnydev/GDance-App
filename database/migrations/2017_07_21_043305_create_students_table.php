<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create STUDENT TABLE
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usn');
            $table->string('yr_crs');            
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('nickname');
            $table->string('birthday');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('nationality');
            $table->string('religion');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('living_in');
            $table->string('living_with');
            $table->string('contact_number');
            $table->string('email_address');
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
        // Drop table when rollback.
        Schema::dropIfExists('students');
    }
}
