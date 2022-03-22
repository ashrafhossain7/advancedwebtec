
@extends('layouts/app')

@section('content')
<ul>
@foreach($courses as $c)
    <li><h3>course: {{ $c ->course }}</h3></li>
    <ul><h3> instructor:{{$c -> instructor}}</h3></ul>
    <ul><h3> Duration:{{$c -> duration}}</h3></ul>
    <ul><h3> starts:{{$c ->starts}}</h3></ul>
    @endforeach
</ul>
@endsection()


