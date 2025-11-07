<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('thresholds', function (Blueprint $table) {
            $table->id();
            $table->float('min_value');
            $table->string('description');
            $table->timestamps();
        });

        // Perhatikan: gunakan nama tabel yang sama ('thresholds')
        DB::table('thresholds')->insert([
            ['min_value' => 3.0, 'description' => 'warning', 'created_at' => now(), 'updated_at' => now()],
            ['min_value' => 5.0, 'description' => 'Danger',  'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thresholds');
    }
};
