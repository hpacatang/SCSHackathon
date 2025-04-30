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
        Schema::create('weather_risk', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->enum('risk_level', ['Low', 'Medium', 'High']);
            $table->text('forecast_details');
            $table->dateTime('date_issued');
            $table->foreignId('linked_to_shipment_id')->constrained('shipment')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_risk');
    }
};
