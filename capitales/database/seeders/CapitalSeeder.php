<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Capital;

class CapitalSeeder extends Seeder
{
    public function run()
    {
        $capitales = [
            [
                'nombre' => 'Buenos Aires',
                'pais' => 'Argentina',
                'poblacion' => 2890000,
                'continente' => 'América del Sur',
                'latitud' => -34.6037,
                'longitud' => -58.3816,
                'altitud' => 25,
                'imagen' => 'buenosaires.jpg',
            ],
            [
                'nombre' => 'Paris',
                'pais' => 'Francia',
                'poblacion' => 2148000,
                'continente' => 'Europa',
                'latitud' => 48.8566,
                'longitud' => 2.3522,
                'altitud' => 35,
                'imagen' => 'paris.jpg',
            ],
            [
                'nombre' => 'Tokio',
                'pais' => 'Japón',
                'poblacion' => 13960000,
                'continente' => 'Asia',
                'latitud' => 35.6895,
                'longitud' => 139.6917,
                'altitud' => 40,
                'imagen' => 'tokio.jpg',
            ],
        ];

        foreach ($capitales as $data) {
            Capital::create($data);
        }
    }
}

