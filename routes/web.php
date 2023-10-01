<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\About;
use App\Http\Controllers\AboutController;

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

// Route::get('/about', function () {
//     return view('about',[
//         "title" => "About",
//         "name" => "Tantowi Shah",
//         "email" => "tantows001@gmail.com",
//         "path" => "tanto.jpg"
//     ]);
// });

Route::get('/about', [AboutController::class, 'index']);


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

Route::get('/register',[RegisterController::class, 'indexHome'])->name('register.home');


Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title'=>'Dashboard',
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('isAdmin');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');


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