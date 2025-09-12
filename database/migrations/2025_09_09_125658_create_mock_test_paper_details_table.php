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
        Schema::create('mock_test_paper_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mtp_id');
            $table->foreign('mtp_id')->references('id')->on('mock_test_paper');
            $table->unsignedBigInteger('paper_id');
            $table->foreign('paper_id')->references('id')->on('paper_details');
            $table->string('paper_date');
            $table->string('paper_time');
            $table->string('question')->nullable();
            $table->string('question_date')->nullable();
            $table->string('answer')->nullable();
            $table->string('answer_date')->nullable();
            $table->string('corrigendum')->nullable();
            $table->enum('is_public', ['1', '0'])->default('1')->comment('1=active, 0=inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mock_test_paper_detail');
    }
};
