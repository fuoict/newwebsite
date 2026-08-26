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
        Schema::table('colleges', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('college_abbr');
        });

        // Seed slugs from abbreviations (lowercase)
        $mapping = [
            1 => 'coaed',
            2 => 'cobmehs',
            3 => 'conas',
            4 => 'comas',
            5 => 'colaw',
            6 => 'cocom',
        ];
        foreach ($mapping as $id => $slug) {
            \DB::table('colleges')->where('id', $id)->update(['slug' => $slug]);
        }

        // Now make it unique and not nullable
        Schema::table('colleges', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('colleges', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
