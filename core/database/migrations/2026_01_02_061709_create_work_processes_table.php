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
        Schema::create('work_processes', function (Blueprint $table) {
            $table->id('work_process_id');

            $table->foreignId('process_step_id')
            ->constrained('process_steps', 'process_step_id')
            ->cascadeOnDelete();

            $table->foreignId('process_id')
            ->constrained('processes', 'process_id')
            ->cascadeOnDelete();

            $table->foreignId('order_id')
            ->constrained('orders', 'order_id')
            ->cascadeOnDelete();

            $table->foreignId('sub_process_id')
            ->constrained('sub_processes', 'sub_process_id')
            ->cascadeOnDelete();

            $table->text('description')->nullable();
            $table->integer('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_processes');
    }
};
