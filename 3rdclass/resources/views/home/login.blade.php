@extends('layouts/app')
@section('content')

    <form action =" " methode =" ">
        <input type="text" placeholder= "username"></br>
        <input type ="password" placeholder="password"></br>
        <input type = "submit">
</form>                                     
@endsection()  

@section('demo')
    <h1>this is demo content</h1>//this block of code is used to print this specific content and need a yield on layout folder
@endsection()    