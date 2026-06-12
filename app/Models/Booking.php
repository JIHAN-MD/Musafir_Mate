<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'user_id', 'package_id', 'payment_status', 'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'booking_id', 'booking_id');
    }

    public function travelPackage()
    {
        return $this->belongsTo(TravelPackage::class, 'package_id', 'package_id');
    }
}
