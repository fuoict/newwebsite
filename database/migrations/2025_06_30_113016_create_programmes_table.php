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
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->string('programme_name')->unique();
            $table->enum('programme_type', ['Undergraduate', 'Postgraduate', 'Diploma']);
            $table->string('programme_code')->unique();
            $table->text('programme_description')->nullable();
            $table->string('duration')->nullable(); // e.g., '4 years', '2 years', '1 year'
            $table->enum('entry_requirements', ['Olevel', 'Alevel', 'Conversion', 'IUT', 'Direct-Entry'])->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
