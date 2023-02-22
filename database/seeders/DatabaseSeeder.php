<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $hs = new HotelSeeder();
        $hs->run();

                
        $rs = new RoomSeeder();
        $rs->run();

 
       User::create([
            'name' => 'Ana',
            'email' => 'ana@example.com',
            'password' => bcrypt('ana'),
        ]);
        
        User::create([
            'name' => 'Tamara',
            'email' => 'tamara@example.com',
            'password' => bcrypt('tamara'),
        ]);
        
        User::create([
            'name' => 'Aleksa',
            'email' => 'aleksa@example.com',
            'password' => bcrypt('aleksa'),
        ]);

        $res = new ReservationSeeder();
        $res->run();


    }
}
