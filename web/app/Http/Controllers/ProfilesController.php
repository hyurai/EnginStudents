<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Storage;


class ProfilesController extends Controller
{
    public function show($id)
    {
        $profile = Profile::find($id);
        $auth_id = Auth::id();
        $user = User::find($auth_id);
        return view('profiles.show',compact('profile','user'));
    }
    public function update(Request $request,$id)
    {
        $profile = Profile::findOrFail($id);
        
        $front_img =  $request->file('front_img');
        $back_img = $request->file('back_img');

        $front_path = Storage::disk('s3')->putFile("profile/{$id}",$front_img,'public');
        $back_path = Storage::disk('s3')->putFile("profile/{$id}",$back_img,'public');

        $profile->front_img = Storage::disk('s3')->url($front_path);
        $profile->back_img = Storage::disk('s3')->url($back_path);

        $profile->one_word_comment = $request->one_word_comment;
        $profile->url = $request->url;
        $profile->update();
        return back();
    }
}
