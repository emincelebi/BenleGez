<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{

    public function run()
    {
        $popularCars = [
            'Alfa Romeo',
            'Audi',
            'Bmw',
            'Chevrolet',
            'Citroen',
            'Dacia',
            'Fiat',
            'Ford',
            'Honda',
            'Hyundai',
            'Jaguar',
            'Kia',
            'Mazda',
            'Mercedes',
            'Mini',
            'Mitsubishi',
            'Nissan',
            'Opel',
            'Peugeot',
            'Porsche',
            'Renault',
            'Seat',
            'Skoda',
            'Subaru',
            'Suzuki',
            'Tofaş',
            'Toyota',
            'Volkswagen',
            'Volvo',
        ];

        foreach ($popularCars as $name) {
            DB::table('cars')->insert([
                'name' => $name,
            ]);
        }
    }
}
