<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fathers', function (Blueprint $table) {
            $table->string('father_degree')->nullable()->change();
            $table->string('father_email_address')->nullable()->change();
            $table->string('father_company_contact')->nullable()->change();
        });
        Schema::table('mothers', function (Blueprint $table) {
            $table->string('mother_degree')->nullable()->change();
            $table->string('mother_email_address')->nullable()->change();
            $table->string('mother_company_contact')->nullable()->change();
        });
        Schema::table('guardians', function (Blueprint $table) {
            $table->string('guardian_suffix')->nullable()->change();
            $table->string('guardian_degree')->nullable()->change();
            $table->string('guardian_email_address')->nullable()->change();
            $table->string('guardian_company_contact')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fathers', function (Blueprint $table) {
            $table->string('father_degree')->change();
            $table->string('father_email_address')->change();
            $table->string('father_company_contact')->change();
        });
        Schema::table('mothers', function (Blueprint $table) {
            $table->string('mother_degree')->change();
            $table->string('mother_email_address')->change();
            $table->string('mother_company_contact')->change();
        });
        Schema::table('guardians', function (Blueprint $table) {
            $table->string('guardian_suffix')->change();
            $table->string('guardian_degree')->change();
            $table->string('guardian_email_address')->change();
            $table->string('guardian_company_contact')->change();
        });
    }
}
