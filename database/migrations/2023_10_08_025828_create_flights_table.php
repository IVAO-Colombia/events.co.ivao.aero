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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->char('flight', 10);
            $table->char('type', 10);
            $table->char('airline', 30)->nullable();
            $table->char('departure', 4);
            $table->char('departure_gate', 30)->nullable();
            $table->mediumText('route')->nullable();
            $table->char('destination', 4);
            $table->char('destination_gate', 30)->nullable();
            $table->char('aircraft', 20)->nullable();
            $table->time('departure_time')->nullable();
            $table->time('arrival_time')->nullable();
            $table->mediumText('information')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            // $table->foreign('airline')->references('icao')->on('airlines');
            // $table->foreign('departure')->references('icao')->on('airports');
            // $table->foreign('destination')->references('icao')->on('airports');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
