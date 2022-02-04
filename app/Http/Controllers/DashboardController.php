<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
//        $posts=Post::all();
        $userid=$request->user()->id;
        $posts=Post::where('user_id',$userid)->get();
        return view('dashboard',compact('posts'));
    }
}
