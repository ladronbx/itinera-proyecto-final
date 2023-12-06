<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Group_userSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('group_user')->insert([
            'user_id' => 1,
            'group_id' => 1,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 2,
            'group_id' => 1,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 3,
            'group_id' => 2,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 4,
            'group_id' => 3,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 5,
            'group_id' => 4,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 6,
            'group_id' => 5,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 7,
            'group_id' => 6,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 8,
            'group_id' => 7,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 9,
            'group_id' => 8,
        ]);

        DB::table('group_user')->insert([
            'user_id' => 10,
            'group_id' => 9,
        ]);
    }
}