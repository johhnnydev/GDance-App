<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guardian_fname');
            $table->string('guardian_mname');
            $table->string('guardian_lname');
            $table->string('guardian_suffix');
            $table->string('guardian_address');
            $table->string('guardian_birthday');
            $table->string('guardian_age');
            $table->string('guardian_civil_status');
            $table->string('guardian_nationality');
            $table->string('guardian_religion');
            $table->string('guardian_occupation');
            $table->string('guardian_company_contact');
            $table->string('guardian_working_status');
            $table->string('guardian_education');
            $table->string('guardian_degree');
            $table->string('guardian_contact_number');
            $table->string('guardian_email_address');
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
        Schema::dropIfExists('guardians');
    }
}
