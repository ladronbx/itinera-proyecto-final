<?php

namespace Database\Seeders;

use App\Models\Group_user;
use App\Models\Location_travel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);

        // $this->call([
        //     TravelSeeder::class,
        // ]);

        $this->call([
            LocationSeeder::class,
        ]);

        $this->call([
            ActivitySeeder::class,
        ]);

        // $this->call([
        //     GroupSeeder::class,
        // ]);

        // $this->call([
        //     Group_userSeeder::class,
        // ]);

        // $this->call([
        //     Location_travelSeeder::class,
        // ]);

    }
}