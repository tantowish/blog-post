<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        $post=Post::latest()->first()->title;
        $post = Str::limit($post, 50, '...') ;
        return view('home', compact('post'), [
            "title" => "Home",
        ]);
    }
}
