<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('room_id');
            $table->date('bill_date');//วันออกบิล
            $table->integer('bill_water');//ค่าน้ำ
            $table->integer('bill_serviceWater');//ค่าบริการน้ำ
            $table->integer('bill_unitsWater');//ยูนิดน้ำ
            $table->integer('bill_electricity');//ค่่าไฟฟ้า
            $table->integer('bill_serviceElectricity');//ค่าบริการไฟฟ้า
            $table->integer('bill_unitselEctricity');//ยูนิดไฟฟ้า
            $table->date('bill_setdate');//วันที่กำหนด
            $table->date('bill_paydate');//วันที่จ่าย
            $table->integer('bill_fines');//ค่่่าปรับ
            $table->string('biil_status');
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
        Schema::dropIfExists('bill');
    }
}
