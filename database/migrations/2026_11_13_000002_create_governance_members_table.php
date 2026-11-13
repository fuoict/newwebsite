<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('governance_members', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('bot')->index(); // bot | council
            $table->string('name');
            $table->string('role')->default('Member');
            $table->string('initials')->nullable();  // fallback monogram when no photo
            $table->string('photo')->nullable();     // filename in img/board or img/council
            $table->text('bio')->nullable();         // short "about" shown in the modal
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('governance_members');
    }
};
