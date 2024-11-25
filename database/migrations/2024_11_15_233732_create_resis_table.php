<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resis', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->after('additional_info');
            $table->string('customer_name');
            $table->string('phone');
            $table->string('address');
            $table->string('postal_code');
            $table->string('car_type');
            $table->date('booking_date');
            $table->time('booking_time');
            $table->string('service_package');
            $table->decimal('total_price', 10, 2)->nullable(); // Optional field for total price
            $table->string('status')->default('pending'); // Default status
            $table->text('additional_info')->nullable(); // Optional field for additional info
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
        Schema::dropIfExists('resis');
    }
}