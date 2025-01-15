<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create(["path" => "1.jpg", "imageable_type" => "App\Models\Blog", "imageable_id" => "1"]);
        Image::create(["path" => "2.jpg", "imageable_type" => "App\Models\Blog", "imageable_id" => "2"]);
        Image::create(["path" => "3.jpg", "imageable_type" => "App\Models\Blog", "imageable_id" => "3"]);
        Image::create(["path" => "1.jpg", "imageable_type" => "App\Models\Portfolio", "imageable_id" => "1"]);
        Image::create(["path" => "2.jpg", "imageable_type" => "App\Models\Portfolio", "imageable_id" => "2"]);
        Image::create(["path" => "3.jpg", "imageable_type" => "App\Models\Portfolio", "imageable_id" => "3"]);
    }
}
