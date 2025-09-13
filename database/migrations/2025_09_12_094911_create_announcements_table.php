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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();
            $table->boolean('mock_test_paper')->default(0)->comment('1=checked, 0=unchecked');
            $table->string('category')->nullable();
            $table->longText('title')->nullable();
            $table->string('type')->nullable();
            $table->longText('description')->nullable();
            $table->string('date')->nullable();
            $table->enum('is_new', ['1', '0'])->default('1')->comment('1=new, 0=old');
            $table->enum('is_public', ['1', '0'])->default('1')->comment('1=active, 0=inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
