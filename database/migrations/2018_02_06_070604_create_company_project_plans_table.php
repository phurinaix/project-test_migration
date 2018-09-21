<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProjectPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_project_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_project_id')->foreign('company_project_id')->references('id')->on('company_projects');
            $table->string('name', 100);
            $table->integer('floor');
            $table->string('part', 191);
            $table->string('path', 191);
            $table->tinyInteger('active');
            $table->softDeletes();
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
        Schema::dropIfExists('company_project_plans');
    }
}
