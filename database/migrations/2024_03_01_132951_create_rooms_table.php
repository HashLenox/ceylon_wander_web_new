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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->foreignId('location_id')->references('id')->on('locations');
            $table->foreignId('room_type_id')->references('id')->on('room_types');
            $table->decimal('size', 10, 2);
            $table->json('price');
            $table->json('features')->nullable();
            $table->json('facilities')->nullable();
            $table->json('include')->nullable();
            $table->string('description')->nullable();
            $table->integer('number_of_rooms')->default(1);
            $table->integer('available_rooms')->default(0);
            $table->boolean('free_cancellation')->default(false);
            $table->boolean('prepayment')->default(false);
            $table->boolean('smoking')->default(false);
            $table->boolean('active')->default(true);
            $table->json('images')->nullable();
            $table->foreignId('created_by')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
