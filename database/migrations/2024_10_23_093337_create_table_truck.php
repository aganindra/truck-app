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
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->string('license_number', 255); // Equivalent to VARCHAR(255)
            $table->string('model', 255); // Equivalent to VARCHAR(255)
            $table->integer('capacity'); // Equivalent to INT
            $table->date('exp_kir'); // Equivalent to DATE
            $table->string('status', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trucks');
    }
};
