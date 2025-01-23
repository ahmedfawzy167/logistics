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
            'title'  => 'Air Freight',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);

        Service::create([
            'title'  => 'Ocean Freight',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);

        Service::create([
            'title'  => 'Road Freight',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);


        Service::create([
            'title'  => 'Warehousing',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);


        Service::create([
            'title'  => 'Packaging',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);


        Service::create([
            'title'  => 'Shipping',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);


        Service::create([
            'title'  => 'Supply Chain',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);


        Service::create([
            'title'  => 'Commercial Moves',
            'description' => 'There are many variations of the majority have suffered alteration in some form by injected.',
        ]);
    }
}
