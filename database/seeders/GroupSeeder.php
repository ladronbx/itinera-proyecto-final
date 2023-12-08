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
        DB::table('groups')->insert([
            'user_id' => 5,
            'trip_id' => 2,
        ]);

        DB::table('groups')->insert([
            'user_id' => 6,
            'trip_id' => 2,
        ]);

        DB::table('groups')->insert([
            'user_id' => 7,
            'trip_id' => 3,
        ]);

        DB::table('groups')->insert([
            'user_id' => 8,
            'trip_id' => 4,
        ]);

        DB::table('groups')->insert([
            'user_id' => 9,
            'trip_id' => 4,
        ]);

        DB::table('groups')->insert([
            'user_id' => 10,
            'trip_id' => 4,
        ]);

    }
}
