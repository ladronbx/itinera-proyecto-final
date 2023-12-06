<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('locations')->insert([
            'name' => 'Roma',
            'description' => 'Roma es la capital de Italia, es una ciudad cosmopolita que tiene una larga historia que se remonta a los tiempos de los antiguos romanos.',
        ]);

        DB::table('locations')->insert([
            'name' => 'Madrid',
            'description' => 'Madrid es la capital de España, conocida por su rica colección de arte europeo y el Palacio Real.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'París',
            'description' => 'París es la capital de Francia, famosa por su torre Eiffel, el Louvre y la catedral de Notre-Dame.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Londres',
            'description' => 'Londres es la capital de Inglaterra, conocida por su icónico Big Ben y la Torre de Londres.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Berlín',
            'description' => 'Berlín es la capital de Alemania, famosa por su historia y el Muro de Berlín.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Tokio',
            'description' => 'Tokio es la capital de Japón, conocida por su moderna tecnología y la Torre de Tokio.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Nueva York',
            'description' => 'Nueva York es una ciudad en los Estados Unidos, conocida por la Estatua de la Libertad y Times Square.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Sídney',
            'description' => 'Sídney es una ciudad en Australia, famosa por su Ópera y el Puente del Puerto de Sídney.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Río de Janeiro',
            'description' => 'Río de Janeiro es una ciudad en Brasil, conocida por su icónica estatua del Cristo Redentor y la playa de Copacabana.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'El Cairo',
            'description' => 'El Cairo es la capital de Egipto, famosa por las pirámides de Giza y la Esfinge.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Moscú',
            'description' => 'Moscú es la capital de Rusia, conocida por el Kremlin y la Plaza Roja.',
        ]);
    }
}