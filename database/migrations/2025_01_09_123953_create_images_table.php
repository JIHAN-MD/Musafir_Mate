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
        Schema::create('images', function (Blueprint $table) {
            $table->id('image_id');
            $table->unsignedBigInteger('destination_id'); // Ensure it's unsigned big integer
            $table->foreign('destination_id')
            ->references('destination_id')
            ->on('destinations')
            ->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
