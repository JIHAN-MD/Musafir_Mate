<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*class Restaurant extends Model
{
    use HasFactory;

    protected $primaryKey = 'restaurant_id';

    protected $fillable = [
        'destination_id', 'name', 'address', 'city', 'country', 'halal_certified', 'rating'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'destination_id');
    }
}*/

class Restaurant extends Model
{
    protected $primaryKey = 'restaurant_id';

    protected $fillable = [
        'destination_id', 'name', 'address', 'city', 'country', 'halal_certified', 'rating'
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id',  'destination_id');
    }
}
