<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('tracker', function (Blueprint $table) {
            $table->id();
            $table->decimal('gps_lat', 10, 7);
            $table->decimal('gps_long', 10, 7);
            $table->string('rfid_code')->unique();
            $table->float('temperature');
            $table->float('humidity');
            $table->dateTime('timestamp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracker');
    }
};
