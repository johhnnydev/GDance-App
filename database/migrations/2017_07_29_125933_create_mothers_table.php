<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMothersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mothers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mother_fname');
            $table->string('mother_mname');
            $table->string('mother_lname');
            $table->string('mother_suffix');
            $table->string('mother_address');
            $table->string('mother_birthday');
            $table->string('mother_age');
            $table->string('mother_civil_status');
            $table->string('mother_nationality');
            $table->string('mother_religion');
            $table->string('mother_occupation');
            $table->string('mother_company_contact');
            $table->string('mother_working_status');
            $table->string('mother_education');
            $table->string('mother_degree');
            $table->string('mother_contact_number');
            $table->string('mother_email_address');
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
        Schema::dropIfExists('mothers');
    }
}
