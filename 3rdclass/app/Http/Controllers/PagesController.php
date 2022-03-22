<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('home/login');
    }
    public function index(){
        return view('home/index');//creating a function to see the index.. the 2nd step for index
    }
    public function register(){
        return view('home/register');
    }
}
