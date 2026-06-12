<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $primaryKey = 'hotel_id';

    protected $fillable = [
        'destination_id', 'name', 'address', 'city', 'country', 'price_per_night', 'halal_certified', 'rating'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'destination_id');
    }
}

