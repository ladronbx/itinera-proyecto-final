<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('trips')->insert([
            'start_date' => now(),
            'end_date' => now()->addDays(7)
        ]);

        DB::table('trips')->insert([
            'start_date' => now()->addDays(7),
            'end_date' => now()->addDays(12)
        ]);
    }
}