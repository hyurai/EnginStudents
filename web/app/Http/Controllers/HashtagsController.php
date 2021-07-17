<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hashtag;

class HashtagsController extends Controller
{
    public function show($id){
        $hashtag = Hashtag::find($id);
        $tweets = $hashtag->hastag_tweets;
        return view('hashtags.show',compact('hashtag','tweets'));  
    }
}
