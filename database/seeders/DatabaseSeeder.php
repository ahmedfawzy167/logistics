<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Feedback::factory(50)->create();
        $this->call([
            BlogSeeder::class,
            ServiceSeeder::class,
            ContactDetailSeeder::class,
            PortfolioSeeder::class,
            ImageSeeder::class,
            GalllerySeeder::class,
        ]);
    }
}
