<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Hotel::create([
            'name' => 'Grand Hotel',
            'description' => 'A luxurious 5-star hotel located in the heart of the city.',
            'location' => '123 Main Street, City Center',
            'rating' => 9.5,
            'price_per_night' => 250,
            'available_rooms' => 20
        ]);

        Hotel::create([
            'name' => 'Beach Resort',
            'description' => 'A beautiful beachfront resort with stunning ocean views.',
            'location' => '456 Beach Road, Oceanfront',
            'rating' => 8.9,
            'price_per_night' => 150,
            'available_rooms' => 10
        ]);

        Hotel::create([
            'name' => 'Mountain Lodge',
            'description' => 'A cozy mountain retreat surrounded by nature.',
            'location' => '789 Mountain Trail, Mountain Range',
            'rating' => 7.8,
            'price_per_night' => 100,
            'available_rooms' => 5
        ]);





    }
}
