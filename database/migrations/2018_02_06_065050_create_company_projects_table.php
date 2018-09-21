<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->foreign('company_id')->references('id')->on('companies');
            $table->string('code', 8);
            $table->string('name', 150);
            $table->text('detail')->nullable();
            $table->text('address')->nullable();
            $table->string('latitude', 191);
            $table->string('longitude', 191);
            $table->string('logo_path', 191);
            $table->tinyInteger('active');
            $table->string('bim_model_urn', 191)->nullable();
            $table->string('bim_model_image_path', 191)->nullable();
            $table->integer('type');
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
        Schema::dropIfExists('company_projects');
    }
}
