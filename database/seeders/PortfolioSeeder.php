<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portfolio::create([
            'title' => 'Air Cargo',
            'description' => 'Air Shipping',
        ]);

        Portfolio::create([
            'title' => 'Logistic',
            'description' => 'Cargo Air Shipping',
        ]);

        Portfolio::create([
            'title' => 'Transport',
            'description' => 'Port Shipping',
        ]);
    }
}
