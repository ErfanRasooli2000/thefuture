<?php

namespace Api\Comment\Database\Seeders;

use Api\BlogPost\Models\BlogPost;
use Api\Client\Models\Client;
use Api\Comment\Enums\CommentStatusEnum;
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
                'status' => CommentStatusEnum::values()[array_rand(CommentStatusEnum::values())],
                'created_by' => fake()->numberBetween(1,10),
                'creator_type' => Client::class,
                'modelable_id' => fake()->numberBetween(1,10),
                'modelable_type' => BlogPost::class,
            ]);
        }

        for ($i = 1; $i <= 110; $i++) {
            $replyTo = Comment::inRandomOrder()->first();

            Comment::create([
                'text' => fake()->text(40),
                'status' => CommentStatusEnum::values()[array_rand(CommentStatusEnum::values())],
                'answer_to' => $replyTo->id,
                'created_by' => fake()->numberBetween(1,10),
                'creator_type' => Client::class,
                'modelable_id' => $replyTo->modelable_id,
                'modelable_type' => BlogPost::class,
            ]);
        }
    }
}
