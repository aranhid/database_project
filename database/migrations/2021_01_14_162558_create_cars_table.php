<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
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
            $table->foreignId('manufacturer_id')->references('id')->on('car_manufacturers');
            $table->foreignId('model_id')->references('id')->on('car_models');
            $table->foreignId('generation_id')->references('id')->on('car_generations');
            $table->foreignId('body_type_id')->references('id')->on('car_body_types');
            $table->foreignId('body_color_id')->references('id')->on('car_body_colors');
            $table->foreignId('drive_type_id')->references('id')->on('car_drive_types');
            $table->foreignId('transmission_type_id')->references('id')->on('car_tranmission_types');
            $table->foreignId('fuel_type_id')->references('id')->on('fuel_types');
            $table->year('assembly_date');
            $table->decimal('price', 10, 2);
            $table->foreignId('status_id')->references('id')->on('car_statuses');
            $table->foreignId('state_id')->references('id')->on('car_states');
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
}
