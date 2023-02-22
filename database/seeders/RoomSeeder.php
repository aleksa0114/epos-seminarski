<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'room_number' => 'Soba 101',
            'price_per_night' => 50,
            'hotel_id' => 1,
            'max_occupancy' => 2,
            
        ]);
        
        Room::create([
            'room_number' => 'Soba 102',
            'price_per_night' => 70,
            'hotel_id' => 1,
            'max_occupancy' => 10,
           
        ]);

        Room::create([
            'room_number' => 'Soba 201',
            'price_per_night' => 80,
            'max_occupancy' => 2,
            'hotel_id' => 2,
            
        ]);

        Room::create([
            'room_number' => 'Soba 202',
            'price_per_night' => 100,
            'hotel_id' => 2,
            'max_occupancy' => 8,
          
        ]);

        Room::create([
            'room_number' => 'Soba 301',
            'price_per_night' => 60,
            'hotel_id' => 3,
            'max_occupancy' => 6,
            
        ]);

        Room::create([
            'room_number' => 'Soba 302',
            'price_per_night' => 90,
            'hotel_id' => 3,
            'max_occupancy' => 5,
             
        ]);

        Room::create([
            'room_number' => 'Soba 303',
            'price_per_night' => 120,
            'hotel_id' => 3,
            'max_occupancy' => 4,
            
        ]);
    }
}
