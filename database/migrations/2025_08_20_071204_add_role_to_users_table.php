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
            $table->string('mobile')->after('email');
            $table->string('show_password')->after('password');
            $table->string('role')->after('show_password');
            $table->enum('is_public', ['1', '0'])->default('1')->after('role')->comment('1=Active, 0=Inactive');
            $table->timestamp('last_login')->nullable()->after('is_public');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mobile'); // Dropping mobile column
            $table->dropColumn('show_password'); // Dropping show_password column
            $table->dropColumn('role'); // Dropping role column
            $table->dropColumn('is_public'); // Dropping is_public column
            $table->dropColumn('last_login'); // Dropping last_login column
        });
    }
};
