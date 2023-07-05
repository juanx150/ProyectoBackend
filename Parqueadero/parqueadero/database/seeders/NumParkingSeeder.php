<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\NumParking;

class NumParkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NumParking::created([
        
        'NumParking' => 'B1',
        'TipoVehiculo' => 'carro',
        'ParkingEsta' => 'disponible',
        "Precio" => 3000,
         ]);

        NumParking::created([
        
                'NumParking' => 'A1',
                'TipoVehiculo' => 'moto',
                'ParkingEsta' => 'ocupado',
                "Precio" => 1000,
                'user_id' => User::all()->random()->id,
        ]);      
    }
}
