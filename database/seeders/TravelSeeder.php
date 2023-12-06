<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('travels')->insert([
            'start_date' => now(),
            'end_date' => now()->addDays(7)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(7),
            'end_date' => now()->addDays(12)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(1),
            'end_date' => now()->addDays(9)
        ]);

        DB::table('travels')->insert([
            'start_date' => now(),
            'end_date' => now()->addDays(4)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(3),
            'end_date' => now()->addDays(6)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(7),
            'end_date' => now()->addDays(14)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(2),
            'end_date' => now()->addDays(9)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(1),
            'end_date' => now()->addDays(8)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(3),
            'end_date' => now()->addDays(5)
        ]);

        DB::table('travels')->insert([
            'start_date' => now()->addDays(5),
            'end_date' => now()->addDays(15)
        ]);
    }
}