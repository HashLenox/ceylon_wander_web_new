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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->foreignId('location_id')->references('id')->on('locations');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->date('first_date');
            $table->date('last_date');
            $table->boolean('approval')->default(false);
            $table->boolean('arrived')->default(false);
            $table->integer('status');
            $table->string('remark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
