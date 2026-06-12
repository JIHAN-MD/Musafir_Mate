<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*return new class extends Migration
{
    /**
     * Run the migrations.

    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('restaurant_id');
            $table->unsignedBigInteger('destination_id'); // Ensure it's unsigned big integer
            $table->foreign('destination_id')
            ->references('destination_id')
            ->on('destinations')
            ->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->boolean('halal_certified')->default(false);
            $table->decimal('rating', 3, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.

    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};*/

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('restaurant_id');
            $table->unsignedBigInteger('destination_id'); // Ensure it's unsigned big integer
            $table->foreign('destination_id')
                  ->references('destination_id')
                  ->on('destinations')
                  ->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->boolean('halal_certified')->default(false);
            $table->decimal('rating', 3, 2)->nullable();
            $table->string('phone')->nullable(); // Add phone number column
            $table->string('website')->nullable(); // Add website column
            $table->text('description')->nullable(); // Add description column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
