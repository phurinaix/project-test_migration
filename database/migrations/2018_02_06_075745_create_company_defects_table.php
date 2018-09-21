<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDefectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_defects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->foreign('company_id')->references('id')->on('companies');
            $table->integer('company_project_id')->foreign('company_project_id')->references('id')->on('company_projects');
            $table->integer('company_project_plan_id')->nullable()->foreign('company_project_plan_id')->references('id')->on('company_project_plans');;
            $table->string('title', 191);
            $table->text('detail')->nullable();
            $table->date('deadline');
            $table->integer('created_by');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('company_defects');
    }
}
