<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([
            'check_in_date' => '2023-03-15',
            'check_out_date' => '2023-03-18',
            'room_id' => 1,
            'user_id' => 1,
        ]);
        
        Reservation::create([
            'check_in_date' => '2023-03-10',
            'check_out_date' => '2023-03-12',
            'room_id' => 2,
            'user_id' => 1,
        ]);
        
        Reservation::create([
            'check_in_date' => '2023-04-01',
            'check_out_date' => '2023-04-03',
            'room_id' => 3,
            'user_id' => 2,
        ]);
        
        Reservation::create([
            'check_in_date' => '2023-05-05',
            'check_out_date' => '2023-05-07',
            'room_id' => 4,
            'user_id' => 1,
        ]);
        
        Reservation::create([
            'check_in_date' => '2023-06-20',
            'check_out_date' => '2023-06-25',
            'room_id' => 5,
            'user_id' => 2,
        ]);
    }
}
