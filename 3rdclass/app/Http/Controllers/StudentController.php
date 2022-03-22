<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
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
   /* public function get($id,$name,$dob){//can get perameter from controller like this
        $student = array( //associatative array
            "name" => $name, "id"=>$id , "dob"=>$dob//no semicolon inside associatative array //2nd step from passong dynamin value on url
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
    */
    public function get(Request $req){//instade of passing perameters we will use function to get all the perameters as an associatative araay and receive it using request jfunction
        $student =array(
            "name"=>$req->name , //using this to point to the specific perameter
            "id"=>$req->id,
            "dob"=>$req->dob
            );
            $student=(object)$student;
            $sum=8+9;
            return view('student/get')
            ->with('student',$student)
            ->with('sum',$sum);
    }
    public function list(){
        $students= [];
        for($i=1;$i<=10;$i++){
            $date = new DateTime();//for date
            $date=$date->format('y-m-d h:i:s');//for date
            $student=array(
                'name'=>"Studnent $i",
                'id'=> "id : $i",
                'dob'=> $date//initializing
            );
            $students[]= (object)$student;
        }
        //return $students;
        return view('student/list')
        ->with('students',$students);
    }
}
