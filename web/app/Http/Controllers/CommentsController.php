<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->tweet_id = $request->tweet_id;
        $comment->comment = $request->comment;
        $comment->save();
        return back();
    }
    public function delete($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return back(); 
    }

}