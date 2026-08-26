<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('lecturers', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
        });

        // Auto-generate slugs from existing names
        $lecturers = DB::table('lecturers')->select('id', 'name')->get();
        foreach ($lecturers as $lecturer) {
            $slug = Str::slug($lecturer->name);
            // Ensure uniqueness
            $base = $slug;
            $count = 1;
            while (DB::table('lecturers')->where('slug', $slug)->where('id', '!=', $lecturer->id)->exists()) {
                $slug = $base . '-' . $count;
                $count++;
            }
            DB::table('lecturers')->where('id', $lecturer->id)->update(['slug' => $slug]);
        }

        Schema::table('lecturers', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
    }

    public function down(): void
    {
        Schema::table('lecturers', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
