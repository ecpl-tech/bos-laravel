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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('course');
            $table->foreignId('paper_id')->constrained('paper_details');
            $table->foreignId('faculty_id')->constrained('faculty');
            $table->string('topic');
            $table->string('session');
            $table->date('date');
            $table->time('time');
            $table->string('video_url')->nullable();
            $table->string('zoom_link')->nullable();
            $table->enum('is_public', ['1', '0'])->default('1')->comment('1=active, 0=inactive');
            $table->enum('status', ['upcoming', 'live', 'recorded','cancel'])->default('upcoming');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lectures');
    }
};
