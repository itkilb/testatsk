<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('car_brand_id');
            $table->foreign('car_brand_id')->references('id')->on('car_brands');
            $table->bigInteger('car_model_id');
            $table->foreign('car_model_id')->references('id')->on('car_models');
            $table->integer('year')->nullable();
            $table->bigInteger('mileage')->nullable();
            $table->integer('car_color_id');
            $table->foreign('car_color_id')->references('id')->on('car_colors');
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
        Schema::dropIfExists('cars');
    }
};
