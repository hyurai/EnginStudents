<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use App\Models\Icon;
use App\Models\ProfileIconRelation;
use Illuminate\Support\Facades\Auth;
use Storage;


class ProfilesController extends Controller
{
    public function show($id)
    {
        $profile = Profile::find($id);
        $auth_id = Auth::id();
        $user = User::find($auth_id);
        $icons = Icon::all();
        $profile_icons = $profile->profile_icons;
        return view('profiles.show',compact('profile','user','icons','profile_icons'));
    }
    public function update(Request $request,$id)
    {
        $profile = Profile::findOrFail($id);

        $profile_icons = $request->icons;
        
        $front_img =  $request->file('front_img');
        $back_img = $request->file('back_img');
    

        $front_path = Storage::disk('s3')->putFile("personal/{{$profile->id}}",$front_img,'public');
        $back_path = Storage::disk('s3')->putFile("/personal/{{$profile->id}}",$back_img,'public');

        $profile->front_img = Storage::disk('s3')->url($front_path);
        $profile->back_img = Storage::disk('s3')->url($back_path);

        $profile->one_word_comment = $request->one_word_comment;
        $profile->url = $request->url;
        $profile->update();

        $profileiconrelation = new ProfileIconRelation;

        $before_profile_icon_relations = $profileiconrelation->where('profile_id',$profile->id)->get();
        foreach($before_profile_icon_relations as $before_profile_icon_relation){
            $before_profile_icon_relation->delete();
        }
        if(!empty($profile_icons)){
          foreach($profile_icons as $profile_icon){
                $profileiconrelation = new ProfileIconRelation;
                $profileiconrelation->profile_id = $profile->id;
                $profileiconrelation->icon_id = $profile_icon;
                $profileiconrelation->save();
          }
        }

       


        return back();
    }
}
