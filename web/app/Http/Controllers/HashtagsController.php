<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hashtag;
use App\Models\Profile;
use App\Models\Like;

class HashtagsController extends Controller
{
    public function show($id){
        $hashtag = Hashtag::find($id);
        $tweets = $hashtag->hashtag_tweets;
        $profile = Profile::all();
        $likes = Like::all();
        return view('hashtags.show',compact('hashtag','tweets','profile','likes'));  
    }
}
