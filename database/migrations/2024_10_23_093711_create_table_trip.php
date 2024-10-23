<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_id')->constrained('trucks')->onDelete('cascade'); // Foreign key to trucks table
            $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade'); // Foreign key to drivers table
            $table->string('start_location', 255); // Start location
            $table->string('end_location', 255); // End location
            $table->integer('distance'); // Distance
            $table->date('trip_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
