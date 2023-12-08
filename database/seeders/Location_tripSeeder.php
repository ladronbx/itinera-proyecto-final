<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Location_tripSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('location_trip')->insert([
            'trip_id' => '1',
            'location_id' => '1',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '2',
            'location_id' => '2',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '3',
            'location_id' => '3',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '4',
            'location_id' => '4',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '5',
            'location_id' => '5',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '6',
            'location_id' => '6',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '7',
            'location_id' => '7',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '8',
            'location_id' => '8',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '9',
            'location_id' => '9',
        ]);

        DB::table('location_trip')->insert([
            'trip_id' => '10',
            'location_id' => '10',
        ]);
    }
}
