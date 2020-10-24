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
            $table->string('bill_code');
            $table->string('customer_id');
            $table->string('room_id');
            $table->string('bill_title');//หัวข้อ
            $table->dateTime('bill_date');//วันออกบิล

            $table->integer('bill_unitsWater');//ยูนิดน้ำ 5
            $table->integer('bill_serviceWater');//ค่าบริการน้ำ 20
            $table->integer('bill_unitUsedWater');//ยูนิดที่ใช้ ส่วนต่างของ 8000 - 8003 = 3
            $table->integer('bill_water');//ค่าน้ำ  3 * 20 + 5 = 75

            $table->integer('bill_unitselEctricity');//ยูนิดไฟฟ้า
            $table->integer('bill_serviceElectricity');//ค่าบริการไฟฟ้า
            $table->integer('bill_unitUsedEctricity');//ยูนิดที่ใช้ ส่วนต่างของ 8000 - 8003 = 3
            $table->integer('bill_electricity');//ค่าไฟฟ้า
            $table->integer('bill_roomcost');

            $table->dateTime('bill_setdate');//วันที่กำหนด
            $table->dateTime('bill_paydate');//วันที่จ่าย
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
