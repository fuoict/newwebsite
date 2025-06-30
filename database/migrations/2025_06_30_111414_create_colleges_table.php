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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('college_name');
            $table->string('college_abbr');
            $table->string('dean_name');
            $table->string('dean_image')->nullable();
            $table->string('dean_speach_title')->nullable();
            $table->text('dean_speach_desc')->nullable();
            $table->text('about_college')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
