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
        Schema::create('faculty_assign_paper', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('paper_id');
            $table
                ->enum('status', ['0', '1'])
                ->nullable()
                ->comment('0=Inactive, 1=Active');
            $table->timestamps();

            $table->foreign('faculty_id')->references('id')->on('faculty');
            $table->foreign('paper_id')->references('id')->on('paper_details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_assign_paper');
    }
};
