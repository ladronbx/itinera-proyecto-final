<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Trip_activitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('trips_activities')->insert([
            'trip_id' => 1,
            'activity_id' => 1,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 1,
            'activity_id' => 2,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 1,
            'activity_id' => 3,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 1,
            'activity_id' => 4,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 1,
            'activity_id' => 5,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 2,
            'activity_id' => 11,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 2,
            'activity_id' => 12,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 2,
            'activity_id' => 13,
        ]);

        DB::table('trips_activities')->insert([
            'trip_id' => 2,
            'activity_id' => 14,
        ]);
    }
}
