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
        Schema::create('registration_ssp', function (Blueprint $table) {
            $table->id();
            $table->string('course')->nullable();
            $table->string('registration_no');
            $table->string('name')->nullable();
            $table->string('dob')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('region')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->text('push_noti')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->string('device')->nullable();
            $table->enum('is_public', ['1', '0'])->default('1')->comment('1: Active, 0: Inactive');
            $table->string('device_id')->nullable();
            $table->string('fcm_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
