<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Specify the table if necessary
    // protected $table = 'images';

    // Fillable attributes to allow mass assignment
    protected $fillable = ['image_path', 'flight_image_path', 'destination_id', 'flight_id'];

    /**
     * Define relationship with the Destination model
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    /**
     * Define relationship with the Flight model
     */
    // public function flight()
    // {
    //     return $this->belongsTo(Flight::class, 'flight_id');
    // }
}

