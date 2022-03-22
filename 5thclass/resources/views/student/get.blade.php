@extends("layouts/app")
@section('content')
<h1> get info of studnets<h1>
    <h2>name:{{$student ->name}}</h2>
        <h2>id:{{$student ->id}}</h2>
    <h2>email:{{$student -> email}} </h2>
    <h2>user_id:{{$student ->use_id}}<h2><!--cause to undrestand  what dose what i changed the user id as use_id on studnets controller page.-->
        <h2>user name:{{$student -> username}}<h2>
            <h2>date created : {{$student -> date}}</h2>
            <h2> cgpa: {{$student->cgpa}}</h2>
@endsection()
