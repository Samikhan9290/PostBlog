<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardControlller extends Controller
{
    //
    public function card(){
        return view('card.card');
    }
}
