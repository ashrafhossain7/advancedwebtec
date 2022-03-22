
        @extends('layouts/app')//it means that need to render taking value from app file
        @section('content')//is used to write anything in the middle of the extended layout..and th econtent name hase to be simmar to yierl content 
<?php
       // <h1>this is my home page {{$_GET["name"]}}</h1> //1st main code for index or the 1st step for creating index//$_GET to access value using nevigation bar.
       // <h1>this is my home page {{$_GET["name"]}}{{$_GET["id"]}}</h1> //1st main code for index or the 1st step for creating index//$_GET to access value using nevigation bar.
       ?>    
       <h1>this is homepage</h1>//to return dynammic value value we need to change on route to accept dynamic vlaue

        @endsection
        