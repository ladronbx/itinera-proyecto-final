<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => "user",
            'email' => "user@user.com",
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => "user1",
            'email' => "user1@user.com",
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => "user2",
            'email' => "user2@user.com",
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => "user3",
            'email' => "user3@user.com",
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => "user4",
            'email' => "user4@user.com",
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => "user5",
            'email' => "user5@user.com",
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => "user6",
            'email' => "user6@user.com",
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => Str::random(30).'@user.com',
            'password' => Hash::make('Password1!')
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => 'super@super.com',
            'password' => Hash::make('Password1!'),
            'role' => 'is_super_admin',
        ]);

        DB::table('users')->insert([
            'name' => Str::random(30),
            'email' => 'admin@admin.com',
            'password' => Hash::make('Password1!'),
            'role' => 'admin',
        ]);
    }
}