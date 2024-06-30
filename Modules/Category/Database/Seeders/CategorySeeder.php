<?php

namespace Api\Category\Database\Seeders;

use Api\Category\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'وب' , 'parent_id' => null],
            ['name' => 'بازی' , 'parent_id' => null],
            ['name' => 'php' , 'parent_id' => 1],
            ['name' => 'c#' , 'parent_id' => 2],
        ];

        Category::insert($data);
    }
}
