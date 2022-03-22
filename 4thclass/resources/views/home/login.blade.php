@extends('layouts/app')
@section('content')
<html>
    <form action='{{route("login/submit")}}' method="post"><!--action is where the form is submitted& here we do uri based routing -->
    {{@csrf_field()}}   <!--need to generate a one time token to log in in laravel--> 
    <input type ='text' placeholder="username" name="uname" value="{{old('uname')}}"><!--we need name to retrive data from in this case given by the user , to get old value stored on the field  we need a funciton called old.-->
    @error('uname')<!--for seeing error message-->
    <span> {{$message}}</span>
    @enderror
    </br>
    <input type ="password" placeholder="password" name="pass">
        @error("pass")
        <span>{{$message}}</span><!--the name message is default for everyone-->
        @enderror</br>
        <input type ="password" placeholder="confirm password" name="conf_pass">
        @error("conf_pass")
        <span>{{$message}}</span><!--the name message is default for everyone-->
        @enderror</br>
        <input type ="submit">
</form>
</html>
@endsection()