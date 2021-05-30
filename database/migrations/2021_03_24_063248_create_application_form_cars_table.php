<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_form_cars', function (Blueprint $table) {
            $table->primary(['application_form_id', 'car_id']);
            $table->foreignId('application_form_id')->constrained('application_forms')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('car_id')->constrained('cars')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('count_cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_form_cars');
    }
}
