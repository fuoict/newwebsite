<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('section')->default('university'); // university, admissions, academics, publications, other
            $table->string('parent_slug')->nullable();
            $table->string('route_name')->nullable();
            $table->string('icon')->nullable();
            $table->text('intro')->nullable();
            $table->longText('body')->nullable(); // HTML content
            $table->json('members')->nullable(); // For BOT, Governing Council, Senate etc.
            $table->json('officers')->nullable(); // For VC, DVC, Registrar etc.
            $table->json('downloads')->nullable(); // For download pages
            $table->json('gallery')->nullable(); // For gallery page
            $table->string('banner_image')->nullable();
            $table->string('banner_text')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('sidebar_links')->nullable(); // JSON array of sidebar navigation
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
