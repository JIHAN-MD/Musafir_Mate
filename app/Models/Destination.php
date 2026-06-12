<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $primaryKey = 'destination_id';

    protected $fillable = [
        'name', 'description', 'country', 'image' // Add 'image' to the fillable property
    ];

    // Default image accessor (optional)
    public function getImageAttribute($value)
    {
        // If image is null, return a default image path
        return $value ? $value : 'frontend/images/default-image.jpg'; // Adjust default path as needed
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'destination_id', 'destination_id');
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class, 'destination_id', 'destination_id');
    }

    public function travelPackages()
    {
        return $this->hasMany(TravelPackage::class, 'destination_id', 'destination_id');
    }

    // Destination.php
    public function images()
    {
        return $this->hasMany(Image::class, 'destination_id', 'destination_id');
    }


}

