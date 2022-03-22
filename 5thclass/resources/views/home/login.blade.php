@extends('layouts/app')
@section('content')
<html>
    <form action='{{route("login/submit")}}' method="post"><!--action is where the form is submitted& here we do uri based routing -->
    {{@csrf_field()}}   <!--need to generate a one time token to log in in laravel--> 
    <input type ='text' placeholder="username" name="uname"></br><!--we need name to retrive data from in this case given by the user -->
        <input type ="password" placeholder="password" name="pass"></br>
        <input type ="submit">
</form>
</html>
@endsection()