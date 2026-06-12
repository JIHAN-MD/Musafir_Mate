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
        Schema::table('images', function (Blueprint $table) {
            $table->unsignedBigInteger('flight_id')->after('destination_id'); // Add flight_id column
            $table->foreign('flight_id')->references('flight_id')->on('flights')->onDelete('cascade'); // Foreign key relationship
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['flight_id']);
            $table->dropColumn('flight_id');
        });
    }
};

