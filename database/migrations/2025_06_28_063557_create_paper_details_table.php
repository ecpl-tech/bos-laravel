<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paper_details', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();
            $table->string('paper')->nullable();
            $table->string('papername')->nullable();
            $table
                ->enum('status', ['0', '1'])
                ->nullable()
                ->comment('0=Inactive, 1=Active');
            $table->string('recorded_video')->nullable();
            $table->string('scheme')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paper_details');
    }
};
