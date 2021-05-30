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
            $table->foreignId('model_car_id')->constrained('model_cars')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('bodywork_id')->constrained('bodyworks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('color_id')->constrained('colors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('transmission_id')->constrained('transmissions')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('engine_power');
            $table->integer('length');
            $table->integer('width');
            $table->integer('height');
            $table->integer('count_seats');
            $table->date('year_release');
            $table->boolean('status')->default(true);
            $table->string('photo');
            $table->integer('price');
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
