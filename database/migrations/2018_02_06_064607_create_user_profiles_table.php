<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
            $table->integer('position_id')->foreign('position_id')->references('id')->on('position');;
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
        Schema::dropIfExists('user_profiles');
    }
}
