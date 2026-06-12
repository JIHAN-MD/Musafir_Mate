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
    Schema::create('flights', function (Blueprint $table) {
        $table->id('flight_id');
        $table->string('flight_no');
        $table->date('depart_date');
        $table->date('return_date');
        $table->decimal('price', 10, 2);
        $table->unsignedBigInteger('destination_id'); // Ensure it's unsigned big integer
        $table->foreign('destination_id')
        ->references('destination_id')
        ->on('destinations')
        ->onDelete('cascade');
        $table->timestamps();
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
