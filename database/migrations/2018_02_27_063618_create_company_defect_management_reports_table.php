<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDefectManagementReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_defect_management_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_defect_management_id')->foreign('company_defect_management_id')->references('id')->on('company_defects_managements');
            $table->integer('company_user_id')->foreign('company_user_id')->references('id')->on('company_project_users');
            $table->text('detail');
            $table->dateTime('date_time');
            $table->tinyInteger('type');
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
        Schema::dropIfExists('company_defect_management_reports');
    }
}
