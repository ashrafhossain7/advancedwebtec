<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basecontroller extends Controller
{
    //
    public function login(){
        return view ("home.login");
    }
    public function homepage(){
        $courses=array();//another associatative array 1st
        $course=array(//regular associatative array 1st
            "course"=>"programming with python",
            "instructor"=>"mr:py",
            "duration"=>"4 months",
            "starts"=>"10th february",
        );
        $course=(object)$course; //converting 1st associatative array into an object
        $courses[]=$course;//j course ta k object banaisi oita k courses array ar vitore raksi
        
        $course=array(
            "course"=>"programming with webtec",
            "instructor"=>"mr:web",
            "duration"=>"4.5 months",
            "starts"=>"15th february",
        );
        $course=(object)$course; 
        $courses[]=$course;

        $course=array(
            "course"=>"programming with c#",
            "instructor"=>"mr:#",
            "duration"=>"3.5 months",
            "starts"=>"5th february",
        );
        $course=(object)$course; 
        $courses[]=$course;
        return view ('home.homepage')
        ->with('courses',$courses);

        


    }
}
