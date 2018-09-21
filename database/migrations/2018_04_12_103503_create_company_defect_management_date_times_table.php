<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDefectManagementDateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_defect_management_date_times', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_defect_management_id')->foreign('company_defect_management_id')->references('id')->on('company_defect_managements');
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
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
        Schema::dropIfExists('company_defect_management_date_times');
    }
}
