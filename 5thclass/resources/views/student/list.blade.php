@extends('layouts.app')
@section("content")
<h1>list of student<h1>
<table>
@foreach($student as $s)
<tr>

<!--<td><a href="{{route('get',['id'=>$s->id, 'name'=>$s->name,'user_id'=>$s->user_id,'username'=>$s->username, 'email'=>$s->email,'date'=>$s->date])}}">{{$s->name}}</a></td><!--all the data we get from the data base returned from the students controller list page is pointing at the get page with some data in it and it will go to studnetscontroller get function and put that data there -->
<!--now we will only take one element and match it with database and get all information of that id or name-->
<td><a href="{{route('get',['id'=>($s->id)])}}">{{$s->name}}</a></td>  <!--to do encryption   <td><a href="{{route('get',['id'=>encrypt($s->id)])}}">{{$s->name}}</a></td>-->
<td>id:{{$s -> id}}</td>
    <td>     username:{{$s -> username}}</td>
</tr>
    @endforeach
</table>
@endsection