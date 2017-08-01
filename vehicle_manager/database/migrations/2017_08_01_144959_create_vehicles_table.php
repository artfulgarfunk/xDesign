<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('vehicles', function (Blueprint $table) {
    $table->increments('id');
    $table->string('type');
    $table->string('usage');
    $table->string('license_plate');
    $table->string('weight_category');
    $table->string('no_seats');
    $table->string('has_trailer');
    $table->string('owner_name');
    $table->string('owner_company');
    $table->string('owner_profession');
    $table->string('transmission');
    $table->string('colour');
    $table->string('is_hgv');
    $table->string('no_doors');
    $table->string('sunroof');
    $table->string('has_gps');
    $table->string('no_wheels');
    $table->string('engine_cc');
    $table->string('fuel_type');
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
        Schema::drop('vehicles');
    }
}
