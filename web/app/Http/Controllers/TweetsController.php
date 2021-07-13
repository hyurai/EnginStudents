<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;
class TweetsController extends Controller
{
    public function index()
    {
        $user = User::all();
        $tweets = Tweet::all();
        return view('tweets.index',compact('tweets','user'));
    }
}
