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
        Schema::create('bookings', function (Blueprint $table) {
        $table->id(); // This will create an auto-incrementing unsigned big integer primary key
        $table->unsignedBigInteger('user_id'); // Make sure this matches the 'id' column type in the users table
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // Other columns go here...
        $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
