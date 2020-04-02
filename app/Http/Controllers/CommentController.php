<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CommentController extends Controller
{
    public function indexComments()
    {
        return view('home');
    }



    public function addComment(Request $request)
    {
        $comment = $request->input("comment");
        $user_id = auth()->user()->id;

        $objComment = new Comment;
        $objComment = $objComment->create([
            'user_id' => $user_id,
            'comment' => $comment,
        ]);
    }

}
