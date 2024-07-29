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
            ['name' => 'php' , 'parent_id' => null],
            ['name' => 'laravel' , 'parent_id' => null],
            ['name' => 'mysql' , 'parent_id' => null],
            ['name' => 'mongodb' , 'parent_id' => null],
            ['name' => 'الگوریتم' , 'parent_id' => null],
        ];

        Category::insert($data);
    }
}
