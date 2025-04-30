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
        Schema::create('alert', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Weather', 'Delay', 'GeoRisk', 'Port Congestion']);
            $table->text('message');
            $table->dateTime('datetime');
            $table->foreignId('shipment_id')->constrained('shipment')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alert');
    }
};
