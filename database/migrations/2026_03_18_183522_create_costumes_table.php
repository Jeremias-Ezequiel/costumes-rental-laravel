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
        Schema::create('costumes', function (Blueprint $table) {
            $table->id();
            $table->string('description', 30);
            $table->enum('size', ['l', 'm', 'xl', 'xxl']);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('costumeStatus_id');
            $table->foreign('costumeStatus_id')->references('id')->on('costume_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumes');
    }
};
