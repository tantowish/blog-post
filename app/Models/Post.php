<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tantowi Shah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quam, voluptatem commodi praesentium pariatur optio ullam odit maiores eos. Excepturi expedita voluptas omnis in blanditiis exercitationem vero molestias, earum obcaecati, nihil molestiae quae natus deleniti perspiciatis, consectetur inventore corrupti nisi possimus maiores non tempora praesentium nemo! Ullam unde eveniet perferendis asperiores reprehenderit nihil quibusdam debitis eum non molestias tempore, eos delectus eius! Odio sequi sapiente ipsum, fugiat pariatur magni eos dolore eum. Beatae, deserunt laboriosam aliquid maiores eos veritatis ducimus.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Suarez",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quam, voluptatem commodi praesentium pariatur optio ullam odit maiores eos. Excepturi expedita voluptas omnis in blanditiis exercitationem vero molestias, earum obcaecati, nihil molestiae quae natus deleniti perspiciatis, consectetur inventore corrupti nisi possimus maiores non tempora praesentium nemo! Ullam unde eveniet perferendis asperiores reprehenderit nihil quibusdam debitis eum non molestias tempore, eos delectus eius! Odio sequi sapiente ipsum, fugiat pariatur magni eos dolore eum. Beatae, deserunt laboriosam aliquid maiores eos veritatis ducimus.",
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = self::all();
        // foreach($posts as $post){
        //     if($post["slug"] === $slug){
        //         return $post;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}
