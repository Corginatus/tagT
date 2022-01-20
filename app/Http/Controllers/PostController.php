<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return PostResource::collection($posts);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return PostResource::make($post);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([

        ]);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        $coins = Post::all();

        return PostResource::collection($coins);
    }
}
