<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('packages', function (Blueprint $table) {
        $table->id();
        $table->text('route');
        $table->text('departure_time');
        $table->text('arrival_time');
        $table->decimal('price', 8, 2);
        $table->date('date');
        $table->text('status');
        $table->text('class');
        $table->timestamps();
    });
    
}

    public function down()
    {
        Schema::dropIfExists('packages');
    }
};