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
        Schema::create('shipment', function (Blueprint $table) {
            $table->id();
            $table->string('origin');
            $table->string('destination');
            $table->dateTime('departure_date');
            $table->dateTime('estimated_arrival');
            $table->enum('status', ['Shipped', 'In Transit', 'At Port', 'Delayed']);
            $table->enum('risk_level', ['Low', 'Medium', 'High']);
            $table->foreignId('inventory_id')->constrained('inventory')->onDelete('cascade');
            $table->foreignId('tracker_id')->constrained('tracker')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment');
    }
};
