<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    public function up(): void
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->string('seat_code')->unique(); // Contoh: 1A, 1B
            $table->boolean('is_reserved')->default(false); // Status apakah bangku sudah dipesan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
}
