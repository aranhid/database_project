<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCarTranmissionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['transmission_type_id']);
        });
        
        Schema::rename('car_tranmission_types', 'car_transmission_types');

        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('transmission_type_id')->references('id')->on('car_transmission_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['transmission_type_id']);
        });
        
        Schema::rename('car_transmission_types', 'car_tranmission_types');

        Schema::table('cars', function (Blueprint $table) {
            $table->foreign('transmission_type_id')->references('id')->on('car_tranmission_types');
        });
    }
}