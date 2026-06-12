<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DestinationSeeder::class,
            HotelSeeder::class,
            RestaurantSeeder::class,
            TravelPackageSeeder::class,
            FlightSeeder::class,
            ImagesTableSeeder::class,
        ]);
    }
}