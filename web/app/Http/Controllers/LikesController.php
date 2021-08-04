<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\User;
use App\Models\Profile;

class LikesController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $tweets = $user->like_tweets;
        $profiles = Profile::all();
        return view('likes.show',compact('tweets','profiles'));
    }
    
    
    
    public function store(Request $request)
    {
        $like = new Like;
        $like->tweet_id = $request->tweet_id;
        $like->user_id = $request->user_id;
        $like->save();
        return back();
    }
    public function destroy($id)
    {
        $like = Like::findOrFail($id);
        $like->delete();
        return back();
    }
}
