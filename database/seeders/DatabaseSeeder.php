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

        // \App\Models\User::factory(5)->create();

        $this->call([
            TravelSeeder::class,
        ]);

        // \App\Models\Travel::factory(5)->create();
    }
}