<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('department_featured_links', function (Blueprint $table) {
            $table->text('content')->nullable()->after('url');
            $table->text('body')->nullable()->after('content');
        });
    }

    public function down(): void
    {
        Schema::table('department_featured_links', function (Blueprint $table) {
            $table->dropColumn(['content', 'body']);
        });
    }
};
