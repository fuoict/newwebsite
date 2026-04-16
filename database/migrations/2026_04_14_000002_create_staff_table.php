<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();        // Dr., Prof., Mr., Mrs., etc.
            $table->string('name');
            $table->string('position')->nullable();     // HOD, Senior Lecturer, Lecturer I, etc.
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();        // uploaded photo path
            $table->text('bio')->nullable();
            $table->text('qualifications')->nullable(); // e.g. "B.Sc (Ilorin), M.Sc (Lagos), Ph.D (ABU)"
            $table->string('specialization')->nullable();
            $table->foreignId('college_id')->nullable()->constrained('colleges')->onDelete('set null');
            $table->unsignedBigInteger('department_id')->nullable(); // FK to departments if table exists
            $table->integer('sort_order')->default(0); // control display order
            $table->boolean('is_hod')->default(false); // highlight as Head of Department
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
