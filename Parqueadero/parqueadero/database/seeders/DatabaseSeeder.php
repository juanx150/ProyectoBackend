<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        // $this->call(ParkingSeeder::class); 
        $this->call(NumParkingSeeder::class); 
    }
}
