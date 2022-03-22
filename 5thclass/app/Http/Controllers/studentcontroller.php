<?php

namespace App\Http\Controllers;
use App\Models\student;
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
        /**    $student= array(
                                        //to get all the data manually from the url
            "name"=>$req->name,"id"=>$req->id,"email"=>$req->email,"use_id"=>$req->user_id,"username"=>$req->username,"date"=>$req->date//all the data from list page is imputtet here and received as req and then pointing to the specific name to tha specific data and will return to student get page to print all the data  

        );
        $student=(object)$student;
        */
        //using only id to fetch all the data of that perticular student 
        //seletct * from student_info  where id = $req->$id
        $student= student::where("id",'=',$req->id)//1st operator : data base ar kon coloum a where operate korbe here its id...2nd operator : kon operator use korbe , will it be = or < or > or <=....3rd operator : kon valuer sate se operate orbe in this case id = $req->id....for encrryption and decryption we used decryprion and encryption only for sensitive has happened in studnet>list 
        //$student= student::where("id",'=',decrypt($req->id))->select("name",'id','password')//if i give this select we can receive specific data we want .
        ->first();//2 methode to receive the data get or first ..first is 1st search data will be converted to object and return it ....and get collect all the serched or matched data and convert in to a array of object 
        //return $student;
        return view("student/get")
        ->with ('student',$student);
    }
    public function list(){
        /** 
        $student=array();//this was used to create a manual person with name id and dob in it
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
        */
        //to get all the students from the database
        //select * from studnets_info is the general quary 
       $student = student::all();//we taken a varaible and it will be collection of objects and next student is the name of the models then the quary here it is all.
        /*$student=student::where('cgpa','>=',3.20)//we are collecting all the data where cgpa will be according to the condition
        ->where('cgpa','<=',3.7)
        ->get();//and to receive all the data 
        */
        //top one and bootom one are both same just using deffrent technique
        /*
        $student = student::wherebetween('cgpa',[3.00,3.98])
        ->get();
*/
            //return $student;//to see all the variable
        return view ('student/list')
        ->with ('student',$student);
    }
}
