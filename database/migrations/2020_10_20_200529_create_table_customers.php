<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("customer_IDcard");
            $table->string("customer_firstname");
            $table->string("customer_lastname");
            $table->string("customer_gender");
            $table->string("customer_phone");
            $table->string("customer_email");
            $table->string("customer_address");
            $table->string("room_id");
            $table->integer("booking_deposit");
            $table->string("booking_statusResidence");
            $table->string("booking_statusPayment");
            $table->string("booking_timeperiod");
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
        Schema::dropIfExists('customers');
    }
}
