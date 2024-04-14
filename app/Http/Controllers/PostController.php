<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filteredPost = DB::table('post')->orderBy('created_at', 'desc')->take(3)->get();
        $allPost = Post::all();

        return view('main.home', compact('filteredPost', 'allPost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string|required',
            'image' => 'required',
            'content' => 'required',
            'categories' => 'array|min:1'
        ]);

if($request->file('image')) {
    $fileImage = $request->file('image');
    $extensionFile = $fileImage->extension();
    $namaFile = now()->timestamp . '.' . $extensionFile;
    $fileImage->move(public_path('assets'), $namaFile);


    $post = new Post([
        'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $namaFile,
            'content' => $request->content,
            'user_id' => auth()->user()->id
    ]);

    $post->categories()->attach($request->category);

    $succesful = $post->save();
        if($succesful) {
            return to_route('home.view')->withSuccess('Succesfully posted this news!');
        }

    }
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

}
