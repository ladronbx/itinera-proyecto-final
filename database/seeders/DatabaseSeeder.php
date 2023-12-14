<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        $this->call([
            TripSeeder::class,
        ]);

        $this->call([
            LocationSeeder::class,
        ]);

        $this->call([
            ActivitySeeder::class,
        ]);

        $this->call([
            GroupSeeder::class,
        ]);

        $this->call([
            Group_userSeeder::class,
        ]);

        $this->call([
            Location_tripSeeder::class,
        ]);

        $this->call([
            TripActivitySeeder::class,
        ]);



    }
}