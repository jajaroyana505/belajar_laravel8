<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view("blog", [
            "title" => "All Posts",
            "active" => "blog",
            "posts" => Post::latest()->get()
            // "posts" => Post::all()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "active" => "blog",
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
