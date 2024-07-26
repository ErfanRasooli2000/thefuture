<?php

namespace Api\Client\Database\Seeders;

use Api\Client\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $client = Client::create([
                'name' => fake()->name,
                'email' => fake()->email,
                'mobile' => fake()->phoneNumber(),
            ]);

            $client->profile()->create();
        }
    }
}
