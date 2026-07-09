<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('lecturers')) {
            return;
        }

        Schema::table('lecturers', function (Blueprint $table) {
            if (! Schema::hasColumn('lecturers', 'scopus')) {
                $table->string('scopus')->nullable()->after('linktree');
            }
            if (! Schema::hasColumn('lecturers', 'wos')) {
                $table->string('wos')->nullable()->after('scopus');
            }
            if (! Schema::hasColumn('lecturers', 'publons')) {
                $table->string('publons')->nullable()->after('wos');
            }
            if (! Schema::hasColumn('lecturers', 'ad_scientific')) {
                $table->string('ad_scientific')->nullable()->after('publons');
            }
        });
    }

    public function down(): void
    {
        Schema::table('lecturers', function (Blueprint $table) {
            if (Schema::hasColumn('lecturers', 'ad_scientific')) {
                $table->dropColumn('ad_scientific');
            }
            if (Schema::hasColumn('lecturers', 'publons')) {
                $table->dropColumn('publons');
            }
            if (Schema::hasColumn('lecturers', 'wos')) {
                $table->dropColumn('wos');
            }
            if (Schema::hasColumn('lecturers', 'scopus')) {
                $table->dropColumn('scopus');
            }
        });
    }
};
