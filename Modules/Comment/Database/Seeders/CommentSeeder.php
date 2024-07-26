<?php

namespace Api\Comment\Database\Seeders;

use Api\BlogPost\Models\BlogPost;
use Api\Client\Models\Client;
use Api\Comment\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            Comment::create([
                'text' => fake()->text(40),
                'active' => fake()->boolean(),
                'created_by' => fake()->numberBetween(1,10),
                'creator_type' => Client::class,
                'modelable_id' => fake()->numberBetween(1,10),
                'modelable_type' => BlogPost::class,
            ]);
        }
    }
}
