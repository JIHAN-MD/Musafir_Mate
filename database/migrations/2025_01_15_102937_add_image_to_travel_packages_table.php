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
        Schema::table('travel_packages', function (Blueprint $table) {
            $table->string('image')->nullable(); // Allows storing the image path
        });
    }

    public function down()
    {
        Schema::table('travel_packages', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }

};
