<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class studentcontroller extends Controller
{
    //
    public function create(){
        return view("student/create");
    }
    public function delete(){
        return view('student/delete');
    }
    public function edit(){
        return view('student/edit');
    }
    public function get(Request $req){
        $student= array(
           
            "name"=>$req->name,"id"=>$req->id,"dob"=>"$req->dob"

        );
        $student=(object)$student;
        return view("student/get")
        ->with ('student',$student);
    }
    public function list(){
        $student=array();
        for ($i=0;$i<=10;$i++){
            $date =new DateTime();
            $date= $date->format('y-m-d h:i:s');
        $studnets=array(
            'name'=>"$i ",
            'id'=> 'id',
            'dob'=> $date
        );
        $studnets=(object)$studnets;
        $student[]=$studnets;

        }
        return view ('student/list')
        ->with ('student',$student);
    }
}
