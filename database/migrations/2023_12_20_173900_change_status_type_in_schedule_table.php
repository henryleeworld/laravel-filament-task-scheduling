<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            $table->enum('new_status', ['active', 'inactive', 'trashed'])->default('active')->after('status');
        });

        DB::table(Config::get('filament-database-schedule.table.schedules', 'schedules'))->where('status', 0)->update(['new_status' => 'inactive']);
        DB::table(Config::get('filament-database-schedule.table.schedules', 'schedules'))->where('status', 1)->update(['new_status' => 'active']);
        // DB::table(Config::get('filament-database-schedule.table.schedules', 'schedules'))->where('status', 3)->update(['new_status' => 'trashed']);

        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            // $table->renameColumn('new_status', 'status');
            DB::statement('ALTER TABLE schedules CHANGE new_status status enum("active", "inactive", "trashed") not null default "active"');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            $table->boolean('old_status')->default(true)->after('status');
        });

        DB::table(Config::get('filament-database-schedule.table.schedules', 'schedules'))->where('status', 'inactive')->update(['old_status' => 0]);
        DB::table(Config::get('filament-database-schedule.table.schedules', 'schedules'))->where('status', 'active')->update(['old_status' => 1]);
        DB::table(Config::get('filament-database-schedule.table.schedules', 'schedules'))->where('status', 'trashed')->update(['old_status' => 3]);

        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            $table->dropColumn('status');
        });
        Schema::table(Config::get('filament-database-schedule.table.schedules', 'schedules'), function (Blueprint $table) {
            $table->renameColumn('old_status', 'status');
        });
    }
};
