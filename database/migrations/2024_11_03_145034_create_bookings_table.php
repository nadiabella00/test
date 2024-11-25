<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('resi_code')->unique()->nullable();
        $table->string('customer_name'); 
        $table->string('email');
        $table->string('phone');
        $table->text('number_of_passengers');
        $table->date('booking_date');
        $table->time('booking_time');
        $table->string('choose_bench'); 
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};