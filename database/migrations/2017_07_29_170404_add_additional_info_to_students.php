<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalInfoToStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function($table){
            $table->string('legal_status');
            $table->string('languages_spoken');
            $table->string('emergency_contact_person');
            $table->string('emergency_contact_number');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function($table){
            $table->dropColumn('legal_status');
            $table->dropColumn('languages_spoken');
            $table->dropColumn('emergency_contact_person');
            $table->dropColumn('emergency_contact_number');
        }); 
    }
}
