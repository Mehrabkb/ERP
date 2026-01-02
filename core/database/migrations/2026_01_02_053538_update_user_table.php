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
        Schema::table('users', function (Blueprint $table) {

            $table->string('lastname')->after('name');
            $table->string('national_code')->unique()->after('lastname');
            $table->string('mobile')->unique()->after('national_code');
            $table->string('avatar')->nullable()->after('mobile');

            $table
            ->foreignId('user_role_id')
            ->constrained('user_roles', 'user_role_id')
            ->nullable()
            ->cascadeOnDelete();

            $table
            ->foreignId('employee_role_id')
            ->constrained('employee_roles', 'employee_role_id')
            ->nullable()
            ->cascadeOnDelete();
     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            if (Schema::hasColumn('users', 'user_role_id')) {
                $table->dropForeign(['user_role_id']);
            }

            if (Schema::hasColumn('users', 'employee_role_id')) {
                $table->dropForeign(['employee_role_id']);
            }

            $table->dropColumn([
                'lastname',
                'mobile',
                'national_code',
                'avatar',
                'user_role_id',
                'employee_role_id',
            ]);
        });
    }
};
