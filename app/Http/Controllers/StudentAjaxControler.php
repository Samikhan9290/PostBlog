<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentAjax;

class StudentAjaxControler extends Controller
{
    //
    public function index(){
        return view('studentAjax');
    }
    public function store(Request $request){
        $s=new StudentAjax;
        $s->email=$request->email;
        $s->password=$request->password;
        $s->save();
        return ['msg'=>'data insertde'];
    }
}
