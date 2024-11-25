<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            // Pastikan untuk memeriksa apakah kolom belum ada sebelum menambahkannya
            if (!Schema::hasColumn('bookings', 'package_id')) {
                $table->unsignedBigInteger('package_id')->nullable()->after('resi_code');
            }
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (Schema::hasColumn('bookings', 'package_id')) {
                $table->dropColumn('package_id');
            }
        });
    }

};
