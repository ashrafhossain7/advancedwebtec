@extends("layouts/app")
@section("content")
<h1>students info</h1>
<h2>name: {{$student -> name}} </h2>
<h2>id: {{$student -> id}} </h2>
<h2>date of bi:{{$student -> dob}}  </h2>//dynamic name collection we need to use it like this
//<h2> sum of 2number is :{{$sum}}</h2></br>
@endsection()