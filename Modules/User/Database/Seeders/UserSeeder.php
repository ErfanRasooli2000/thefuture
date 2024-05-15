<?php

namespace Api\User\Database\Seeders;

use Api\User\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'erfan',
            'username' => 'erfan',
            'email' => 'landa.cloner1379@gmail.com',
            'password' => '123456'
        ]);
    }
}
