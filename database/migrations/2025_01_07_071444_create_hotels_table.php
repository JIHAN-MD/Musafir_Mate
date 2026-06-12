<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('hotel_id');
            $table->unsignedBigInteger('destination_id'); // Ensure it's unsigned big integer
            $table->foreign('destination_id')
            ->references('destination_id')
            ->on('destinations')
            ->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->decimal('price_per_night', 8, 2);
            $table->boolean('halal_certified')->default(false);
            $table->decimal('rating', 3, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
