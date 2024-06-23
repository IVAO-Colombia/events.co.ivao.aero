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
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->char('icao', 4)->unique();
            $table->char('iata', 3);
            $table->char('name', 70);
            $table->float('latitude', 25, 23);
            $table->float('longitude', 25, 23);
            $table->char('country', 2);
            $table->char('municipality', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
