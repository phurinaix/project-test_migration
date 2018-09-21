<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDefectManagementReportImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_defect_management_report_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_defect_management_report_id')->foreign('company_defect_management_report_id')->references('id')->on('company_defect_management_reports');
            $table->string('path', 191);
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
        Schema::dropIfExists('company_defect_management_report_images');
    }
}
