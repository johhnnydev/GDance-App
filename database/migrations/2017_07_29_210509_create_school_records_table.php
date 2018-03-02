<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_elem');            
            $table->string('school_elem_years');            
            $table->string('school_junior');            
            $table->string('school_junior_years');            
            $table->string('school_senior')->nullable();            
            $table->string('school_senior_years')->nullable();            
            $table->string('school_college')->nullable();            
            $table->string('school_college_years')->nullable();            
            $table->string('school_college_course')->nullable();                        
            $table->string('easy_subjects')->nullable();                        
            $table->string('difficult_subjects')->nullable();                        
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
        Schema::dropIfExists('school_records');
    }
}
