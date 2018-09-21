<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->foreign('company_id')->references('id')->on('companies');
            $table->string('username', 100)->unique();
            $table->string('password', 100);
            $table->string('facebook_id', 191)->nullable();
            $table->string('google_id', 191)->nullable();
            $table->tinyInteger('type');
            $table->tinyInteger('active');
            $table->rememberToken();
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
        Schema::dropIfExists('company_users');
    }
}
