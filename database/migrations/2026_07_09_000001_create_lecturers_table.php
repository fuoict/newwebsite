<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('lecturers')) {
            return;
        }

        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('position')->nullable();
            $table->string('specialization')->nullable();
            $table->foreignId('college_id')->nullable()->constrained('colleges')->onDelete('set null');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('set null');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('biography')->nullable();
            $table->text('qualifications')->nullable();
            $table->text('research_interest')->nullable();
            $table->string('google_scholar')->nullable();
            $table->string('researchgate')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('personal_website')->nullable();
            $table->string('orcid')->nullable();
            $table->string('academia_edu')->nullable();
            $table->string('linktree')->nullable();
            $table->string('scopus')->nullable();
            $table->string('wos')->nullable();
            $table->string('publons')->nullable();
            $table->string('ad_scientific')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('is_hod')->default(false);
            $table->boolean('is_published')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
