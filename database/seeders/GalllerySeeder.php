<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalllerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create(["path" => "1.jpg"]);
        Gallery::create(["path" => "2.jpg"]);
        Gallery::create(["path" => "3.jpg"]);
        Gallery::create(["path" => "4.jpg"]);
        Gallery::create(["path" => "5.jpg"]);
        Gallery::create(["path" => "6.jpg"]);
        Gallery::create(["path" => "7.jpg"]);
        Gallery::create(["path" => "8.jpg"]);
    }
}
