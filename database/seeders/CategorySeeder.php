<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =[
            [
                'name' => 'Programming',
                'slug' => 'programming'
            ],
            [
                'name' => 'Web Design',
                'slug' => 'web-design'
            ],
            [
                'name' => 'Personal',
                'slug' => 'personal'
            ]
        ];

        Category::insert($categories);
    }
}
