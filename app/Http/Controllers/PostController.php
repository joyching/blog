<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')
                    ->with(['comments' => function ($query) {
                        $query->with('user');
                    }])
                    ->orderByDesc('created_at')
                    ->paginate(3);

        return view('blog.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('blog.post', compact('post'));
    }
}
