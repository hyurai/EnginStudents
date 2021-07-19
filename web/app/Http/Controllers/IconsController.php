<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Icon;
class IconsController extends Controller
{
    public function index()
    {
        $icons = Icon::all();
        return view('icons.index',compact('icons'));
    }
    public function store(Request $request)
    {
        $icon = new Icon;
        $icon->icon_class = $request->icon_class;
        $icon->icon_name = $request->icon_name;
        $icon->save();
        return back();
    }

    public function delete()
    {

    }
}
