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
            'travel_id' => 1,
        ]);

        DB::table('groups')->insert([
            'user_id' => 2,
            'travel_id' => 1,
        ]);
        
        DB::table('groups')->insert([
            'user_id' => 3,
            'travel_id' => 1,
        ]);
        DB::table('groups')->insert([
            'user_id' => 4,
            'travel_id' => 1,
        ]);
        DB::table('groups')->insert([
            'user_id' => 5,
            'travel_id' => 2,
        ]);

        DB::table('groups')->insert([
            'user_id' => 6,
            'travel_id' => 2,
        ]);

        DB::table('groups')->insert([
            'user_id' => 7,
            'travel_id' => 3,
        ]);

        DB::table('groups')->insert([
            'user_id' => 8,
            'travel_id' => 4,
        ]);

        DB::table('groups')->insert([
            'user_id' => 9,
            'travel_id' => 4,
        ]);

        DB::table('groups')->insert([
            'user_id' => 10,
            'travel_id' => 4,
        ]);

    }
}
