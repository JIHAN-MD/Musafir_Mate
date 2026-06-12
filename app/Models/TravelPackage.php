<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    use HasFactory;

    // Specify the custom primary key
    protected $primaryKey = 'id';

    // Allow mass assignment for the specified fields
    /*protected $fillable = [
        'destination_id',
        'name',
        'description',
        'price',
        'duration', // Include 'duration' if it is part of the travel package
        'image',    // Include 'image' for storing the package's image path
    ];*/

    protected $fillable = ['destination_id','name', 'description', 'price'];


    // Define the relationship with the Destination model
    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'destination_id');
    }

    // Define the relationship with the Booking model
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'package_id', 'package_id');
    }

    // Accessor to format the price
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }

    // Accessor to display the duration as "X days"
    public function getFormattedDurationAttribute()
    {
        return $this->duration . ' days';
    }

    // Scope for filtering packages by destination
    public function scopeByDestination($query, $destinationId)
    {
        return $query->where('destination_id', $destinationId);
    }



}
