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
        Schema::table('departments', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('department_code');
        });

        // Seed slugs from department codes (lowercase)
        $mapping = [
            1 => 'dais', 2 => 'dhis', 3 => 'dll', 4 => 'ehs', 5 => 'mls',
            6 => 'nsc', 7 => 'phe', 8 => 'bio', 9 => 'chm', 10 => 'cps',
            11 => 'phy', 12 => 'bfn', 13 => 'bua', 14 => 'eco', 15 => 'mss',
            16 => 'soc', 17 => 'pol', 18 => 'pad', 19 => 'isl', 20 => 'law',
            21 => 'dcs', 22 => 'dict', 23 => 'dse', 24 => 'dop', 25 => 'dlaris',
            26 => 'dass',
        ];
        foreach ($mapping as $id => $slug) {
            \DB::table('departments')->where('id', $id)->update(['slug' => $slug]);
        }

        Schema::table('departments', function (Blueprint $table) {
            $table->string('slug')->unique()->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('departments', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
