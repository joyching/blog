<?php

namespace App\Http\Controllers\API;

use Auth;
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
        if (! Auth::check()) {
            abort(401);
        }

        $comment = $post->comments()->create([
            'user_id' => Auth::user()->id,
            'body' => $request->comment_body,
        ]);

        return response()->json([
            'id' => $comment->id,
            'body' => $comment->body,
            'created_at' => $comment->created_at->toDateTimeString(),
            'user' => [
                'id' => $comment->user->id,
                'name' => $comment->user->name
            ]
        ]);
    }
}
