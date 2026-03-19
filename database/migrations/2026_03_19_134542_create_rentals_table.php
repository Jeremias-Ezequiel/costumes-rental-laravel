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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('costume_id');
            $table->unsignedBigInteger('rentalStatus_id');
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('costume_id')->references('id')->on('costumes');
            $table->foreign('rentalStatus_id')->references('id')->on('rental_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
