<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $primaryKey = 'flight_id';

    protected $fillable = [
        'flight_no',
        'price',
        'destination_id',
    ];

    // Relationship with Images
    // public function images()
    // {
    //     return $this->hasMany(Image::class, 'flight_id');
    // }

    // Relationship with Destination
    public function destination()
    {
        return $this->belongsTo(Destination::class,'destination_id', 'destination_id');
    }
}
