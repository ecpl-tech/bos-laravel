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
        Schema::create('mock_test_paper', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('title');
            $table->string('active_date');
            $table->string('active_time')->nullable();
            $table->enum('is_public', ['1', '0'])->default('1')->comment('1: Active, 0: Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mock_test_paper');
    }
};
