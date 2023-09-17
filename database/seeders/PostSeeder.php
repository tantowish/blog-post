<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $posts = [
        //     [
        //         'title' => 'Judul Pertama',
        //         'category_id' => 1,
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem  pisum dolor sit amet, constructor ler ketiga',
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
        //         'user_id' => 1,
        //     ],
        //     [
        //         'title' => 'Judul Ke dua',
        //         'category_id' => 1,
        //         'slug' => 'judul-ke-dua',
        //         'excerpt' => 'Lorem  pisum artisan serve php akwasketiga',
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
        //         'user_id' => 1,
        //     ],
        //     [
        //         'title' => 'Judul Ke Tiga',
        //         'category_id' => 3,
        //         'slug' => 'judul-ke-tiga',
        //         'excerpt' => 'Lorem  pisum awikwok sdsawnsd asvsanwinsid ketiga',
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
        //         'user_id' => 1,
        //     ],
        //     [
        //         'title' => 'Judul Ke Empat',
        //         'category_id' => 3,
        //         'slug' => 'judul-ke-empat',
        //         'excerpt' => 'Lorem  pisum awikwok sdsawnsd asvsanwinsid ketiga',
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
        //         'user_id' => 2,
        //     ],



        // ];

        // foreach($posts as $post){
        //     Post::create($post);
        // }


        // Cara satu satu
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'excerpt' => 'Lorem  pisum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>',
        // ]);


        Post::factory(20)->create();
    }
}
