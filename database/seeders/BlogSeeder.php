<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'There are many variations of passages orem available.',
            'description' => 'It is a long established fact that a reader will majority have suffered distracted readable.',
            'author_id' => 1,
        ]);

        Blog::create([
            'title' => 'Generator internet repeat tend word chunk necessary.',
            'description' => 'It is a long established fact that a reader will majority have suffered distracted readable.',
            'author_id' => 2,
        ]);


        Blog::create([
            'title' => 'Survived only five centuries but also the leap into.',
            'description' => 'It is a long established fact that a reader will majority have suffered distracted readable.',
            'author_id' => 3,
        ]);
    }
}
