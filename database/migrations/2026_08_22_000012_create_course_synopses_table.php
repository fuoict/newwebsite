<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_synopses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->string('course_code');
            $table->string('course_title');
            $table->text('description')->nullable();
            $table->integer('unit')->default(1);
            $table->integer('level'); // 100, 200, 300, 400, 500, 600
            $table->enum('type', ['core', 'elective', 'required'])->default('core');
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_synopses');
    }
};
