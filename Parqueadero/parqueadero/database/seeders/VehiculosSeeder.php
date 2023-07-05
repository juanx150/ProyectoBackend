<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Vehiculos;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculos::created([
            'color' => 'Blanco',
            'placa' => 'BXU927',
            'tipovehiculo' => 'Carro',
            'user_id' => User::all()->random()->id,
         ]);

         Vehiculos::created([
            'color' => 'Gris',
            'placa' => 'PF227',
            'tipovehiculo' => 'Moto',
            'user_id' => User::all()->random()->id,
        ]); 
         
    }
}
