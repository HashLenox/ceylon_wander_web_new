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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->integer('type');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->text('description')->nullable();
            $table->decimal('longitude', 10, 7);
            $table->decimal('latitude', 10, 7);
            $table->string('address');
            $table->string('contact_no', 10);
            $table->boolean('status')->default(true);
            $table->integer('points')->default('10');
            $table->string('image_path')->nullable();
            $table->json('features');
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
        Schema::dropIfExists('locations');
    }
};
