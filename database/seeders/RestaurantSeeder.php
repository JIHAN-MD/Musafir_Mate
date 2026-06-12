<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            // Restaurants in Istanbul (destination_id = 1)
            [
                'destination_id' => 1,
                'name' => 'Turkish Delight Eatery',
                'address' => '123 Bosphorus Blvd',
                'city' => 'Istanbul',
                'country' => 'Turkey',
                'halal_certified' => true,
                'rating' => 4.5,
                'phone' => '123-456-7891',
                'website' => 'https://turkishdelight.com',
                'description' => 'Authentic Turkish cuisine with a view of the Bosphorus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 1,
                'name' => 'Sultan’s Feast',
                'address' => '456 Ottoman St',
                'city' => 'Istanbul',
                'country' => 'Turkey',
                'halal_certified' => true,
                'rating' => 4.7,
                'phone' => '123-456-7892',
                'website' => 'https://sultansfeast.com',
                'description' => 'Fine dining in the heart of Istanbul.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 1,
                'name' => 'Golden Horn Diner',
                'address' => '789 Golden Horn Rd',
                'city' => 'Istanbul',
                'country' => 'Turkey',
                'halal_certified' => false,
                'rating' => 3.9,
                'phone' => '123-456-7893',
                'website' => 'https://goldenhorn.com',
                'description' => 'Casual dining with local flavors.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 1,
                'name' => 'Bosphorus Bites',
                'address' => '101 Sea Breeze Ln',
                'city' => 'Istanbul',
                'country' => 'Turkey',
                'halal_certified' => true,
                'rating' => 4.3,
                'phone' => '123-456-7894',
                'website' => 'https://bosphorusbites.com',
                'description' => 'Small plates with big flavors.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ... Add more Istanbul restaurants up to 10

            // Restaurants in Kuala Lumpur (destination_id = 2)
            [
                'destination_id' => 2,
                'name' => 'Petronas Plates',
                'address' => '123 Tower Blvd',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'halal_certified' => true,
                'rating' => 4.8,
                'phone' => '123-456-7895',
                'website' => 'https://petronasplates.com',
                'description' => 'Dine with a view of the Petronas Towers.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 2,
                'name' => 'KL Delights',
                'address' => '456 Twin Tower Ln',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'halal_certified' => true,
                'rating' => 4.6,
                'phone' => '123-456-7896',
                'website' => 'https://kldelights.com',
                'description' => 'Malaysian favorites in the heart of the city.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 2,
                'name' => 'Fusion Flavors KL',
                'address' => '789 Skyline Ave',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'halal_certified' => false,
                'rating' => 4.2,
                'phone' => '123-456-7897',
                'website' => 'https://fusionflavorskl.com',
                'description' => 'Innovative fusion cuisine.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 2,
                'name' => 'Roti Canai Paradise',
                'address' => '101 Curry Ln',
                'city' => 'Kuala Lumpur',
                'country' => 'Malaysia',
                'halal_certified' => true,
                'rating' => 4.7,
                'phone' => '123-456-7898',
                'website' => 'https://roticanaiparadise.com',
                'description' => 'Traditional Malaysian breakfasts.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ... Add more Kuala Lumpur restaurants up to 10

            // Restaurants in Marrakech (destination_id = 3)
            [
                'destination_id' => 3,
                'name' => 'Moroccan Magic',
                'address' => '123 Medina St',
                'city' => 'Marrakech',
                'country' => 'Morocco',
                'halal_certified' => true,
                'rating' => 4.9,
                'phone' => '123-456-7899',
                'website' => 'https://moroccanmagic.com',
                'description' => 'Authentic Moroccan dishes with a modern twist.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 3,
                'name' => 'Kasbah Kitchen',
                'address' => '456 Red Wall Rd',
                'city' => 'Marrakech',
                'country' => 'Morocco',
                'halal_certified' => true,
                'rating' => 4.4,
                'phone' => '123-456-7810',
                'website' => 'https://kasbahkitchen.com',
                'description' => 'A cozy spot near the famous Kasbah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 3,
                'name' => 'Desert Diner',
                'address' => '789 Sand Dunes Blvd',
                'city' => 'Marrakech',
                'country' => 'Morocco',
                'halal_certified' => false,
                'rating' => 4.0,
                'phone' => '123-456-7811',
                'website' => 'https://desertdiner.com',
                'description' => 'A dining experience inspired by the desert.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 3,
                'name' => 'Mint Tea & Tagines',
                'address' => '101 Spice Market Ln',
                'city' => 'Marrakech',
                'country' => 'Morocco',
                'halal_certified' => true,
                'rating' => 4.5,
                'phone' => '123-456-7812',
                'website' => 'https://mintteatandtagines.com',
                'description' => 'Famous for their mint tea and traditional tagines.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ... Add more Marrakech restaurants up to 10
        ]);

    }
}
