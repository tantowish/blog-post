<?php

use App\Http\Controllers\DashboardController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Tantowi Shah",
        "email" => "tantows001@gmail.com",
        "path" => "tanto.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->name('login');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post by Author : $author->name",
//         'posts' =>$author->posts->load('category', 'author'),
//     ]);
// });