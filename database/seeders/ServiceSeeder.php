<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title'  => 'Fast Delivery',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content layout.',
        ]);

        Service::create([
            'title'  => 'Affordable Pricing',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content layout.',
        ]);

        Service::create([
            'title'  => 'Warehouse Storage',
            'description' => 't is a long established fact that a reader will be distracted by the readable content layout.',
        ]);
    }
}
