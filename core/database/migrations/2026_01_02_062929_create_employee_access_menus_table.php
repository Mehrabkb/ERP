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
        Schema::create('employee_access_menus', function (Blueprint $table) {
            $table->id('employee_access_menu_id');

            $table->foreignId('employee_role_id')
            ->constrained('employee_roles', 'employee_role_id')
            ->cascadeOnDelete();

            $table->foreignId('menu_id')
            ->constrained('menus', 'menu_id')
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_access_menus');
    }
};
