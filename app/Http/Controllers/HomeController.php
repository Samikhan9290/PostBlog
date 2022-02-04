<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function shoPost(){
        $post=Post::paginate(3);
        return view('home',compact('post'));
    }
}
