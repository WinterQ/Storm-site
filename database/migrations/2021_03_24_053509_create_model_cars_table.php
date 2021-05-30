<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('engine_id')->constrained('engines')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name','50');
            $table->string('photo','255');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_cars');
    }
}
