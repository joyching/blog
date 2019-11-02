<?php

namespace App\Http\Controllers\API;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $user = \App\User::first();
        $comment = $post->comments()->create([
            'user_id' => $user->id,
            'body' => $request->comment_body,
        ]);

        return response()->json([
            'id' => $comment->id,
            'body' => $comment->body,
            'created_at' => $comment->created_at->toDateTimeString(),
            'user' => [
                'id' => $user->id,
                'name' => $user->name
            ]
        ]);
    }
}
