<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('groups')->insert([
            'user_id' => 1,
            'trip_id' => 1,
        ]);

        DB::table('groups')->insert([
            'user_id' => 2,
            'trip_id' => 1,
        ]);
        
        DB::table('groups')->insert([
            'user_id' => 3,
            'trip_id' => 1,
        ]);
        DB::table('groups')->insert([
            'user_id' => 4,
            'trip_id' => 1,
        ]);
    }
}
