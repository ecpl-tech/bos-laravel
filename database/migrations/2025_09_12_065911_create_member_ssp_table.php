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
        Schema::create('member_ssp', function (Blueprint $table) {
            $table->id();
            $table->string('membership_no')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('dob')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('region')->nullable();
            $table->string('push_noti')->nullable();
            $table->string('ip')->nullable();
            $table->string('device')->nullable();
            $table->string('device_id')->nullable();
            $table->string('fcm_token')->nullable();
            $table->enum('is_public', ['1', '0'])->default('1')->comment('1: Active, 0: Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_ssp');
    }
};
