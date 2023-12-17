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
            'name' => 'Valencia',
            'description' => 'Valencia es una ciudad en España, conocida por su Ciudad de las Artes y las Ciencias y su festtividad de las Fallas.',
            'image_1' => 'https://image-proxy.libere.app/images/webp:1024/plain/https://air-production-cms-uploads.storage.googleapis.com/uploads/2022/03/31083557/oceanografic-III.jpg@webp',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Galicia',
            'description' => 'Galicia es una comunidad autónoma en España, conocida por su gastronomía y sus paisajes.',
        ]);

        DB::table('locations')->insert([
            'name' => 'Sevilla',
            'description' => 'Sevilla es una ciudad en España, famosa por su Catedral y la Giralda.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Madrid',
            'description' => 'Madrid es la capital de España, famosa por su Plaza Mayor y el Museo del Prado.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Barcelona',
            'description' => 'Barcelona es una ciudad en España, conocida por su Sagrada Familia y el Parque Güell.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Asturias',
            'description' => 'Asturias es una comunidad autónoma en España, famosa por sus paisajes y su gastronomía.',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Granada',
            'description' => 'Granada es una ciudad en España, conocida por su Alhambra y el barrio del Albaicín.',
        ]);

        DB::table('locations')->insert([
            'name' => 'Málaga',
            'description' => 'Málaga es una ciudad en la costa sur de España, famosa por su clima, playas y el Museo Picasso.',
        ]);

        DB::table('locations')->insert([
            'name' => 'Bilbao',
            'description' => 'Bilbao es una ciudad en el norte de España, conocida por el Museo Guggenheim y su gastronomía vasca.',
        ]);

        DB::table('locations')->insert([
            'name' => 'Valle de Arán',
            'description' => 'El Valle de Arán es una comarca en los Pirineos de España, conocida por sus paisajes montañosos y su cultura.',
        ]);

        DB::table('locations')->insert([
            'name' => 'Córdoba',
            'description' => 'Córdoba es una ciudad en Andalucía, España, famosa por su Mezquita-Catedral y el Puente Romano.',
        ]);
        
    }
}