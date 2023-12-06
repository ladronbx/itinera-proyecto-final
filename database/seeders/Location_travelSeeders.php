<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Location_travelSeeders extends Seeder
{
    public function run(): void
    {
        DB::table('location_travels')->insert([
            'travel_id' => '1',
            'location_id' => '1',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '2',
            'location_id' => '2',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '3',
            'location_id' => '3',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '4',
            'location_id' => '4',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '5',
            'location_id' => '5',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '6',
            'location_id' => '6',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '7',
            'location_id' => '7',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '8',
            'location_id' => '8',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '9',
            'location_id' => '9',
        ]);

        DB::table('location_travels')->insert([
            'travel_id' => '10',
            'location_id' => '10',
        ]);
    }
}
