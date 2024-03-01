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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category')->references('id')->on('food_categories');
            $table->foreignId('location_id')->references('id')->on('locations');
            $table->text('description')->nullable();
            $table->decimal('price_small', 10, 2)->nullable();
            $table->decimal('price_regular', 10, 2)->nullable();
            $table->decimal('price_large', 10, 2)->nullable();
            $table->boolean('status')->default(true);
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
