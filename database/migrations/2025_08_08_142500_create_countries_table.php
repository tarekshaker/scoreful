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
        Schema::create('countries', function (Blueprint $table) {
            // ISO 3166-1 alpha-2 code as primary key
            $table->char('iso2', 2)->primary();
            $table->string('name');
            // Optional ISO3 for future use
            $table->char('iso3', 3)->nullable();
            $table->string('phone_code', 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
