<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
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
                    ->orderByDesc('created_at')
                    ->limit(3)
                    ->get();

        return view('index', compact('posts'));
    }
}
