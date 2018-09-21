<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProjectUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_project_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_project_id')->foreign('company_project_id')->references('id')->on('company_projects');
            $table->integer('company_user_id')->foreign('company_user_id')->references('id')->on('company_users');;
            $table->tinyInteger('active');
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
        Schema::dropIfExists('company_project_users');
    }
}
