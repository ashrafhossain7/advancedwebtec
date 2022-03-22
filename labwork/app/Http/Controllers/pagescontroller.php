<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //
    public function adminhome(){
        return view ('homePage/adminhome');
    }
    public function studentshome(){
        return view ('homePage/studentshome');
    }
}
