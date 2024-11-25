<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // ID auto-increment
            $table->string('customer_name');
            $table->text('comment');
            $table->string('image')->nullable();
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
        
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn(['customer_name', 'comment', 'image']);
        });
    }
};