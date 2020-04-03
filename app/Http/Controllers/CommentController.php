<?php

namespace App\Http\Controllers;

use DemeterChain\C;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function indexComments()
    {
        $comments = Comment::with('user')->get();
        return view('home', compact('comments'));
    }

    public function addComment(Request $request)
    {
        $comment = Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('home');
    }
}


