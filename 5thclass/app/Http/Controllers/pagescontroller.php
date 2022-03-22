<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class pagescontroller extends Controller
{
    //
    public function login(){
        return view('home/login');
    }
    public function index(){
        return view('home/index');
    }
    public function register(){
        return view('home/register');
    }
    public function loginsubmit(Request $req){
       // $req -> uname ;
        //$req -> pass;
        return "submitted $req->uname & $req->pass";
    }
    public function registersubmit(Request $req){
        $req->validate(
            [
                'name'=>'required|min:5|max:30|regex:/^[a-z A-Z]+/',
                'u_name'=>'required|min:5|max:30|starts_with:A',
                'email'=>'required|min:20|ends_with:.com',
                'id'=>'regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/ ',
                'pass'=>'required|min:7|max:90',
                'confpass'=>'same:pass',
                'date'=>'required'
                  ]

        );
        //end of validation 
        $st= new student();
        $st-> name =$req-> name;
        $st-> user_id=$req->id;
        $st->username=$req->u_name;
        $st->password=$req->pass;
        $st->email=$req->email;
        $st->date=$req->date;
        $st->save();
    return "submit $req->name & $req->u_name & $req->email & $req->id & $req->pass & $req->confpass & $req->date"; 

    }
    public function contract(){
        $contract=array();
        $contracts=array(
            'name'=> "tanbir ahammed",
            'status'=>'developer',
            'email'=>'t.a@edu',
        );
        $contracts=(object)$contracts;
        $contract[]=$contracts;

        $contracts=array(
            'name'=> "rayhan uddin",
            'status'=>'co-ordinator',
            'email'=>'r.u@stu',
        );
        $contracts=(object)$contracts;
        $contract[]=$contracts;
        $contracts=array(
            'name'=> "asif ahammed",
            'status'=>'manager',
            'email'=>'m$s@yahoo',
        );
        $contracts=(object)$contracts;
        $contract[]=$contracts;

        return view('home/contract')
        ->with ('contract',$contract);
    }
}
