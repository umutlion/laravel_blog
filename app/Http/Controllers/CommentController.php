<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{


    public function store(CommentStoreRequest $request, Article $post)
    {
        $post->comments()->create([
            'parent_id' => $request->comment_id,
            'name' => Auth::user()->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'user_id'=>Auth::id(),
        ]);

        return back();
    }
}
