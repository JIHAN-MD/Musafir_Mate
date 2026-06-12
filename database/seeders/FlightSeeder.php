<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FlightSeeder extends Seeder
{
    public function run()
    {
        // Array of flights data
        DB::table('flights')->insert([
            // Malaysia Airlines (MAS) flights
            [
                'flight_no' => 'MAS123',
                'price' => 350.00,
                'destination_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'MAS124',
                'price' => 450.00,
                'destination_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'MAS125',
                'price' => 550.00,
                'destination_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'MAS126',
                'price' => 400.00,
                'destination_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // AirAsia flights
            [
                'flight_no' => 'AI202',
                'price' => 250.00,
                'destination_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'AI203',
                'price' => 300.00,
                'destination_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'AI204',
                'price' => 280.00,
                'destination_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'AI205',
                'price' => 320.00,
                'destination_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Firefly flights
            [
                'flight_no' => 'FY303',
                'price' => 150.00,
                'destination_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'FY304',
                'price' => 180.00,
                'destination_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'FY305',
                'price' => 200.00,
                'destination_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'FY306',
                'price' => 210.00,
                'destination_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Malindo Air flights
            [
                'flight_no' => 'OD405',
                'price' => 380.00,
                'destination_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'OD406',
                'price' => 400.00,
                'destination_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'OD407',
                'price' => 450.00,
                'destination_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'OD408',
                'price' => 500.00,
                'destination_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Scoot flights
            [
                'flight_no' => 'TR101',
                'price' => 330.00,
                'destination_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'TR102',
                'price' => 350.00,
                'destination_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'TR103',
                'price' => 370.00,
                'destination_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'flight_no' => 'TR104',
                'price' => 420.00,
                'destination_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
    ]);
    }
    //     // Loop through the flights array and insert each flight into the database
    //     foreach ($flights as $flightData) {
    //         Flight::create($flightData);
    //     }
    // }
}
