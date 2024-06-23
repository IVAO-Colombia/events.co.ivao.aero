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
        Schema::create('booking_atcs', function (Blueprint $table) {
            $table->id();
            $table->string('dependence');
            $table->time('start_at');
            $table->time('end_at');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('order')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_atcs');
    }
};
