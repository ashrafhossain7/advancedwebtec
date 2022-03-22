@extends("layouts/app")
@section('content')
<h1> get info of studnets<h1>
    <h2>name:{{$student ->name}}</h2>
        <h2>id:{{$student ->id}}</h2>
    <h2>dob:{{$student -> dob}} </h2>
@endsection()