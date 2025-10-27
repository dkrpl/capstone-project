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
        Schema::create('earthquake_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained('devices')->oneDelete('cascade');
            $table->float('magnitude');
            $table->enum('status', ['warning', 'danger']);
            $table->dateTime('occurred_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earthquake_events');
    }
};
