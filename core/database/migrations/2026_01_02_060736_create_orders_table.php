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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->text('description');
            $table->json('files')->nullable();
                
            $table->foreignId('process_id')
            ->constrained('processes', 'process_id')
            ->cascadeOnDelete();

            $table->integer('count');
                
            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete();

            $table->decimal('price', 12, 2);
                
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
