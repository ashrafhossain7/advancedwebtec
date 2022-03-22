<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursecontroller extends Controller
{
    //
    public function course(){
      
        
        $courses = array();
        $course = array(
            'course'=>"programming with python",
            'instructor'=>'dr.pyhon',
            'duration'=>'4 moths',
            'starts'=>'10th feb 22',
        );
        $course=(object)$course;
        $courses[]=$course;

        $course=array(
            'course'=>"programming with java",
            'instructor'=>'dr.java',
            'duration'=>'4.5 moths',
            'starts'=>'10th feb 21',
        );
        $course=(object)$course;
        $courses[]=$course;
        return view('course/courses')
        ->with('courses',$courses);
    }

}