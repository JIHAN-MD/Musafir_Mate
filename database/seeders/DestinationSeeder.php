<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            [
                'name' => 'Istanbul',
                'description' => 'Istanbul is a beautiful city that straddles Europe and Asia across the Bosphorus Strait...',
                'country' => 'Turkey',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kuala Lumpur',
                'description' => 'The capital city of Malaysia, known for its iconic Petronas Towers and vibrant culture.',
                'country' => 'Malaysia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marrakech',
                'description' => 'Marrakech is a vibrant city located in Morocco. Known for its historical significance, the city offers a rich cultural experience with beautiful palaces, gardens, and markets.',
                'country' => 'Morocco',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more destinations as needed
        ]);
    }
}
