<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageServiceTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('package_service')) {
            Schema::create('package_service', function (Blueprint $table) {
                $table->id();
                $table->foreignId('package_id')->constrained()->onDelete('cascade');
                $table->foreignId('service_id')->constrained()->onDelete('cascade');
                $table->timestamps();
            });
        }
    }


    public function down()
    {
        // Drop the pivot table if needed (for rolling back migrations)
        Schema::dropIfExists('package_service');
    }
}
