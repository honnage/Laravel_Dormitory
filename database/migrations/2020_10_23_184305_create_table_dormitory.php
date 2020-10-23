<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDormitory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dormitory', function (Blueprint $table) {
            $table->id();
            // $table->string('dormitory_name');
            $table->integer('dormitory_unitsWater');
            $table->integer('dormitory_serviceWater');
            $table->integer('dormitory_unitselEctricity');
            $table->integer('dormitory_serviceElectricity');
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
        Schema::dropIfExists('dormitory');
    }
}
