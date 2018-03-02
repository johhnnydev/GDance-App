<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fathers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('father_fname');
            $table->string('father_mname');
            $table->string('father_lname');
            $table->string('father_suffix');
            $table->string('father_address');
            $table->string('father_birthday');
            $table->string('father_age');
            $table->string('father_civil_status');
            $table->string('father_nationality');
            $table->string('father_religion');
            $table->string('father_occupation');
            $table->string('father_company_contact');
            $table->string('father_working_status');
            $table->string('father_education');
            $table->string('father_degree');
            $table->string('father_contact_number');
            $table->string('father_email_address');
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
        Schema::dropIfExists('fathers');
    }
}
