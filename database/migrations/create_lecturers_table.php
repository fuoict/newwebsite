<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('title')->nullable();           // Dr., Prof., Mr., Mrs., Engr.
            $table->string('name');
            $table->string('position')->nullable();        // Senior Lecturer, HOD, etc.
            $table->string('specialization')->nullable();  // Area of Specialization

            // Department & College (fetched from existing tables)
            $table->foreignId('college_id')->nullable()->constrained('colleges')->onDelete('set null');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('set null');

            // Contact
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // Academic Profile
            $table->text('biography')->nullable();
            $table->text('qualifications')->nullable();    // Academic qualifications
            $table->text('research_interest')->nullable();

            // Academic & Social Links
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

            // Photo
            $table->string('photo')->nullable();

            // Settings
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
