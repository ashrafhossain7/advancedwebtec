<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\student;

class pagescontroller extends Controller
{
    //
    public function login(){
        return view('home/login');
    }
    public function index(){
        /** 
        $st= new student();
        $st->name=$req->name;
        $st->user_id=$req->id;//user_id or this name has to same with databse id name
        $st->username=$req->uname;
        $st->password=$req->req;
        $st->save();//for inserting with data 
        */
        return view('home/index');
    }
    public function register(){

        //'id'=>'regex:/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/'  //0-9 will be of two caracters then a dash then 0 to 9 any digits of 5 then again - then one digit fro 1 to 3
        return view('home/register');
    }
    public function loginsubmit(Request $req){
       // $req -> uname ;for retriving thee value
        //$req -> pass;
        //validation in laravel is funtion using validate.receives 2 perameter 1 is mendatory and others is optional.and both are associatative array,1st perameter is validation logics 2nd is custom error mesage
       
        
       
        $req->validate(//validate function
            [//1st perameter
                //'uname'=>'required|min:5|max:12|starts_with:U,u|ends_with:p',//uname is same name we used in login page, required means if the field is blank page will not be submitted
                'uname'=>'required|regex:/^[A-Z a-z]+$/',//   /^stating of a regex $/end for a regex [content of a regex]
                'pass'=>'required|min:4|max:40',
            'conf_pass'=>"same:pass",//same keyword for input from brwosers 
            ],
            [//2nd perameter for custom error mesage
                'uname.required'=>'please provide your user name ',//fields name  then features we want to create sustom generated error message
                'uname.min'=>'hey!add some more characters',
                'pass.required'=> 'put some passwords on man',
                'conf_pass.same'=>'pasword must match',
                'uname.regex'=> 'dont use funcky name'
            ]
        );

        
        /** 
            //another system to do validation
            //for additional class of object validaton

            $this->validate($req,[//1st perameter
                //2st perameter
                //'uname'=>'required|min:5|max:12|starts_with:U,u|ends_with:p',//uname is same name we used in login page, required means if the field is blank page will not be submitted
                'uname'=>'required|regex:/^[A-Z a-z]+$/',//   /^stating of a regex $/end for a regex [content of a regex]
                'pass'=>'required|min:4|max:40',
            'conf_pass'=>"same:pass",
            ],[

               //3nd perameter for custom error mesage
               'uname.required'=>'please provide your user name ',//fields name  then features we want to create sustom generated error message
               'uname.min'=>'hey!add some more characters',
               'pass.required'=> 'put some passwords on man',
               'conf_pass.same'=>'pasword must match',
               'uname.regex'=> 'dont use funcky name' 
            ],
        );
        */


        return "submitted $req->uname & $req->pass";
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
