<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student/create');
    }
    public function edit(){
        return view('student/edit');
    }
    public function delete(){
        return view('Student/delete');
    }
    public function get(){
        $student = array( //associatative array
            "name" => "rifat", "id"=>1234 , "dob"=>"2/2/22"//no semicolon inside associatative array 
        );
           //$students= (object) $student; 
           //return var_dump($students);
           $student=(object) $student;
        $sum=4+7;
        //return view ('student/get');//to return somethig
        //return view('student/get')->with('s',$student);//return with dynamic value passing//need to have to 2 identifier 1st j name diye view (here it is views/student/get)te amra chinbo...2nd kon variable k amra pass korbo.for simplicity its better to use same name.
        return view('student/get')
        ->with('student',$student)//if there is 2 with function 1st one will end without a semicolon and last one wil have a semicolon
        ->with('sum',$sum);
    }
}
