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
        Schema::table('users', function (Blueprint $table) {
            // Add nullable first to avoid breaking existing data
            $table->char('country_code', 2)->nullable()->after('password');
            $table->index('country_code');
        });

        Schema::table('users', function (Blueprint $table) {
            // Add foreign key constraint referencing countries.iso2
            $table->foreign('country_code')
                ->references('iso2')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop foreign key and column
            $table->dropForeign(['country_code']);
            $table->dropIndex(['country_code']);
            $table->dropColumn('country_code');
        });
    }
};
