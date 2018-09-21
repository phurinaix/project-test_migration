<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_user_id')->foreign('company_user_id')->references('id').on('company_users');
            $table->integer('position_id')->foreign('position_id')->references('id').on('positions');
            $table->string('full_name', 100);
            $table->string('nickname', 100)->nullable();
            $table->string('id_card', 30)->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->text('address')->nullable();
            $table->string('path', 191);
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
        Schema::dropIfExists('company_user_profiles');
    }
}
