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
        Schema::create('payments', function (Blueprint $table) {
        $table->id('payment_id');
        $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
        $table->string('payment_method'); // e.g., credit card, PayPal
        $table->decimal('amount', 8, 2);
        $table->date('payment_date');
        $table->string('status'); // e.g., completed, failed
        $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
