<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;
use App\Models\Like;
class TweetsController extends Controller
{
    public function index()
    {
        $user = User::all();
        $tweets = Tweet::all();
        $likes = Like::all();
        return view('tweets.index',compact('tweets','user','likes'));
    }
    public function store(Request $request)
    {
        $tweet =  new Tweet;
        $tweet->user_id = $request->user_id;
        $tweet->title = $request->title;
        $tweet->company_name = $request->company_name;
        $tweet->job = $request->job;
        $tweet->entry_data = $request->entry_data;
        $tweet->start_data = $request->start_data;
        $tweet->end_data = $request->end_data;
        $tweet->text = $request->text;
        $tweet->save();

        return redirect('/tweet');
    }
    public function show($id)
    {
        $tweet = Tweet::findOrFail($id);
        $comments = $tweet->comments;
        $likes = Like::all();

        return view('tweets.show',compact('tweet','comments','likes'));
    }
    public function destroy($id)
    {
        $tweet = Tweet::findOrFail($id);
        $tweet->delete();
        return redirect('/tweet');
    }
}
