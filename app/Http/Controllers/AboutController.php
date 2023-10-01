<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class AboutController extends Controller
{
    public function index(){
        $countPost = Post::count();
        $countUser = User::count();
        $countCategory = Category::count();
        return view('about', compact('countPost', 'countUser','countCategory'),[
            "title"=>"about"
        ]);
    }
}

