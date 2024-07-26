<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Api\BlogPost\Database\Seeders\BlogPostSeeder;
use Api\Category\Database\Seeders\CategorySeeder;
use Api\Client\Database\Seeders\ClientSeeder;
use Api\Comment\Database\Seeders\CommentSeeder;
use Api\User\Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ClientSeeder::class,
            BlogPostSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
