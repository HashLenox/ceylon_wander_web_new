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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->foreignId('location_id')->references('id')->on('locations');
            $table->foreignId('room_type_id')->references('id')->on('room_types');
            $table->integer('max_person_count');
            $table->integer('number_of_rooms');
            $table->integer('available_rooms');
            $table->string('description')->nullable();
            $table->json('features');
            $table->decimal('price', 10, 2);
            $table->string('image_path')->nullable();
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
