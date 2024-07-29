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
        $categories = [];

        for ($i = 0; $i < 10; $i++) {
            $post = BlogPost::create([
                'title' => fake()->realTextBetween(5,15),
                'description' => fake()->text(50),
                'content' => fake()->text(1350),
                'slug' => fake()->firstName,
                'time_to_read' => fake()->numberBetween(5,20),
                'created_by' => 1
            ]);

            $post->addMediaFromUrl('http://localhost:8000/storage/1/MainAfter.webp')->toMediaCollection('thumbnail');

            $categories[] = [
                'modelable_id' => $post->id,
                'modelable_type' => BlogPost::class,
                'category_id' => fake()->numberBetween(1,5),
            ];

            if (fake()->boolean)
            {
                $categories[] = [
                    'modelable_id' => $post->id,
                    'modelable_type' => BlogPost::class,
                    'category_id' => fake()->numberBetween(1,5),
                ];
            }
        }

        \DB::table('category_blogpost')->insert($categories);
    }
}
