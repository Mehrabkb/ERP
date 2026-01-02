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
        Schema::create('sub_processes', function (Blueprint $table) {
            $table->id('sub_process_id');
            
            $table->foreignId('process_id')
            ->constrained('processes', 'process_id')
            ->cascadeOnDelete();

            $table->foreignId('unit_id')
            ->constrained('units', 'unit_id')
            ->cascadeOnDelete();

            $table->integer('step');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_process');
    }
};
