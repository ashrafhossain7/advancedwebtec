@extends('layouts.app')
@section("content")
<h1>list of student<h1>
<table>
@foreach($student as $s)
<tr>

<td><a href="{{route('get',['id'=>$s->id, 'name'=>$s->name,'dob'=>$s->dob])}}">{{$s->name}}</a></td>
        <td>id:{{$s -> id}}</td>
    <td>dob:{{$s -> dob}}</td>
</tr>
    @endforeach
</table>
@endsection