<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title'=>'Dashboard',
            'posts'=> Post::where('user_id', auth()->user()->id)->get()->sortByDesc('created_at'),
            'id'=>1,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required|max:255',
            'slug'=>'required|unique:posts',
            'category'=>'required', // Change 'category' to 'category_id'
            'body'=> 'required'
        ]);

        $postAttributes = [
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'category_id' => $validatedData['category'], // Map to the correct database column
            'body' => $validatedData['body']
        ];

        $postAttributes['user_id'] = auth()->user()->id;
        $postAttributes['excerpt'] = Str::limit(strip_tags($postAttributes['body']),200);
        Post::create($postAttributes);

        return redirect('/dashboard/posts')->with('succes', 'New post has been added!');
       
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post'=>$post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.update',[
            'categories' => Category::all(),
            'post'=> $post
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title'=> 'required|max:255',
            'category'=>'required', // Change 'category' to 'category_id'
            'body'=> 'required'
        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }
        else{
            $rules['slug'] = 'required';
        }

        $validatedData = $request->validate($rules);

        $postAttributes = [
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'category_id' => $validatedData['category'], // Map to the correct database column
            'body' => $validatedData['body']
        ];

        $postAttributes['user_id'] = auth()->user()->id;
        $postAttributes['excerpt'] = Str::limit(strip_tags($postAttributes['body']),200);
        Post::where('id', $post->id)
        ->update($postAttributes);

        return redirect('/dashboard/posts')->with('succes', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('succes', 'Post has been deleted!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }
}