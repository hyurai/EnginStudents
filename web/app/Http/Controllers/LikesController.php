<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikesController extends Controller
{
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
