<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('centres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_name')->nullable();
            $table->string('director_name')->nullable();
            $table->string('director_title')->nullable();
            $table->string('director_image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('intro')->nullable();           // Short welcome paragraph
            $table->longText('description')->nullable();  // Full about content (HTML)
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('objectives')->nullable();       // Key objectives / services
            $table->string('image')->nullable();          // Centre hero/banner image
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('centres');
    }
};
