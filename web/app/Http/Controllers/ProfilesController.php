<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfilesController extends Controller
{
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profiles.show',compact('profile'));
    }    
}
