<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;
use App\Models\Like;
use App\Models\Hashtag;
use App\Models\TweetHashtagRelation;
use Illuminate\Support\Facades\Hash;


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
        
        preg_match_all('/#([a-zA-z0-9０-９ぁ-んァ-ヶ亜-熙]+)/u', $request->text, $match);
        $replace_text = preg_replace('/#([a-zA-z0-9０-９ぁ-んァ-ヶ亜-熙]+)/u','',$request->text);

        $tweet->text = $replace_text;
        
        $tags = [];
        foreach($match[1] as $tag){
            $record = Hashtag::firstOrCreate(['hastag_name' => $tag]);
            array_push($tags,$record);
        };
        $tweet->save();

        foreach($tags as $tag)
        {
            $tweethastagrealtion = new TweetHashtagRelation;
            $tweethastagrealtion->tweet_id = $tweet->id;
            $tweethastagrealtion->hashtag_id = $tag->id;
            $tweethastagrealtion->save();
        }
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
