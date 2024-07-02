<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            $table->boolean('limit_history_count')->default(false);
            $table->integer('max_history_count')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            $table->dropColumn(['limit_history_count','max_history_count']);
        });
    }
};
