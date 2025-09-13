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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['Student', 'Member'])->default('Student');
            $table->string('registration_no')->nullable();
            $table->string('membership_no')->nullable();
            $table->foreign('membership_no')->references('membership_no')->on('member_ssp');
            $table->unsignedBigInteger('lecture_id');
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->string('rating', 10)->nullable();
            $table->string('quality_of_ref_material', 10)->nullable();
            $table->string('feedback_1', 100)->nullable();
            $table->string('feedback_2', 100)->nullable();
            $table->string('feedback_3', 100)->nullable();
            $table->string('feedback_4', 100)->nullable();
            $table->string('feedback_5', 100)->nullable();
            $table->string('feedback_6', 100)->nullable();
            $table->string('feedback_7', 100)->nullable();
            $table->string('feedback_8', 100)->nullable();
            $table->string('feedback_9', 100)->nullable();
            $table->string('feedback_10', 100)->nullable();
            $table->string('feedback_11', 100)->nullable();
            $table->string('feedback_12', 100)->nullable();
            $table->string('feedback_13', 100)->nullable();
            $table->string('feedback_14', 100)->nullable();
            $table->string('feedback_15', 100)->nullable();
            $table->string('feedback_16', 100)->nullable();
            $table->string('feedback_17', 100)->nullable();
            $table->string('feedback_18', 100)->nullable();
            $table->string('feedback_19', 100)->nullable();
            $table->string('feedback_20', 100)->nullable();
            $table->string('feedback_21', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
