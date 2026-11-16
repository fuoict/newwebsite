<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('course_synopses', function (Blueprint $table) {
            // Sub-stream within a department, e.g. "Arabic" or "Islamic"
            // for the combined Department of Arabic and Islamic Studies.
            $table->string('stream', 60)->nullable()->after('department_id');
        });
    }

    public function down(): void
    {
        Schema::table('course_synopses', function (Blueprint $table) {
            $table->dropColumn('stream');
        });
    }
};
