<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('activities')->insert([
            'name' => 'Visita al Coliseo',
            'description' => 'Tour guiado por el Coliseo en Roma.',
            'duration' => 3,
            'location_id' => 1
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Tour por el Prado',
            'description' => 'Visita al Museo del Prado en Madrid.',
            'duration' => 2,
            'location_id' => 2
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Visita a la Torre Eiffel',
            'description' => 'Tour guiado por la Torre Eiffel en París.',
            'duration' => 2,
            'location_id' => 3
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Tour por el Big Ben',
            'description' => 'Visita al Big Ben en Londres.',
            'duration' => 1,
            'location_id' => 4
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Visita al Muro de Berlín',
            'description' => 'Tour guiado por el Muro de Berlín.',
            'duration' => 2,
            'location_id' => 5
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Tour por la Torre de Tokio',
            'description' => 'Visita a la Torre de Tokio.',
            'duration' => 2,
            'location_id' => 6
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Visita a la Estatua de la Libertad',
            'description' => 'Tour guiado por la Estatua de la Libertad en Nueva York.',
            'duration' => 3,
            'location_id' => 7
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Tour por la Ópera de Sídney',
            'description' => 'Visita a la Ópera de Sídney.',
            'duration' => 2,
            'location_id' => 8
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Visita al Cristo Redentor',
            'description' => 'Tour guiado por el Cristo Redentor en Río de Janeiro.',
            'duration' => 3,
            'location_id' => 9
        ]);
        
        DB::table('activities')->insert([
            'name' => 'Tour por las Pirámides de Giza',
            'description' => 'Visita a las Pirámides de Giza en El Cairo.',
            'duration' => 4,
            'location_id' => 10
        ]);
    }
}
