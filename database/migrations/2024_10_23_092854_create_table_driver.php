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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); // Equivalent to VARCHAR(255)
            $table->string('license_number', 50); // Equivalent to VARCHAR(50)
            $table->date('exp_sim'); // Equivalent to DATE
            $table->integer('experience_years'); // Equivalent to INT
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
