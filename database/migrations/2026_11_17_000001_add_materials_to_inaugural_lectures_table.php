<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('inaugural_lectures', function (Blueprint $table) {
            $table->string('slides_path')->nullable()->after('image_path'); // inside public/resources/inaugural
            $table->string('event_url')->nullable()->after('slides_path');  // link to the event
        });
    }

    public function down(): void
    {
        Schema::table('inaugural_lectures', function (Blueprint $table) {
            $table->dropColumn(['slides_path', 'event_url']);
        });
    }
};
