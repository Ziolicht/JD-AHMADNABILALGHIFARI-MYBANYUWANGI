<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
Schema::create('events', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique()->nullable();
    $table->text('description')->nullable();
    $table->string('category')->nullable();
    $table->string('location')->nullable();
    $table->timestamp('starts_at');
    $table->timestamp('ends_at')->nullable();
    $table->string('contact_whatsapp')->nullable();
    $table->string('image_path')->nullable();
    $table->boolean('is_published')->default(true);
    $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
    $table->timestamps();
});

    }

    public function down(): void {
        Schema::dropIfExists('events');
    }
};
