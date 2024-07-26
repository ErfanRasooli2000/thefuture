<?php

namespace Api\BlogPost\Database\Seeders;

use Api\BlogPost\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            BlogPost::create([
                'title' => fake()->title,
                'description' => fake()->text(50),
                'content' => fake()->text(1350),
                'slug' => fake()->firstName,
                'created_by' => 1
            ]);
        }
    }
}
