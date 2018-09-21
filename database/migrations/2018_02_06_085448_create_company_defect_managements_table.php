<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDefectManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_defect_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_defect_id')->foreign('company_defect_id')->references('id')->on('company_defects');
            $table->integer('company_user_id')->foreign('company_user_id')->references('id')->on('company_users');
            $table->string('outsource', 150)->nullable();
            $table->tinyInteger('type');
            $table->integer('manage_by');
            $table->string('signature', 191)->nullable();
            $table->string('approver', 191)->nullable();
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
        Schema::dropIfExists('company_defect_managements');
    }
}
