<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(
            [
                LevelSeeder::class,
                GroupSeeder::class,
                LevelSeeder::class,
                GroupSeeder::class,
                UserSeeder::class,
                CategorySeeder::class,
                TagSeeder::class,
                PostSeeder::class,
                VideoSeeder::class
            ]);

    }
}
