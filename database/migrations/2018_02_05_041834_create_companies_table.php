<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 8);
            $table->string('name', 100);
            $table->text('detail')->nullable();
            $table->string('phone_number', 15);
            $table->string('logo_path', 191);
            $table->string('latitude', 191);
            $table->string('longitude', 191);
            $table->text('address')->nullable();
            $table->string('password_remember', 10);
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
        Schema::dropIfExists('companies');
    }
}
