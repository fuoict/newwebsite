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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_name')->unique();
            $table->string('department_code')->unique();
            $table->foreignId('college_id')->constrained('colleges')->onDelete('cascade');
            $table->string('hod_name')->nullable();
            $table->string('hod_email')->nullable();
            $table->string('hod_phone')->nullable();
            $table->string('hod_image')->nullable();
            $table->string('department_image')->nullable();
            $table->text('department_title')->nullable();
            $table->text('department_description')->nullable();
            $table->text('about_department')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('our-staffs')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
