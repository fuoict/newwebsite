<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('General'); // Events, Academic, Staff Development, General
            $table->string('icon')->default('bx bxs-news'); // boxicon class
            $table->string('image')->nullable(); // uploaded image path
            $table->text('excerpt')->nullable(); // short summary shown on homepage
            $table->longText('body')->nullable(); // full article content
            $table->string('event_date_label')->nullable(); // e.g. "Thursday, June 19, 2025 by 2PM"
            $table->boolean('is_featured')->default(false); // show in right column on homepage
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
