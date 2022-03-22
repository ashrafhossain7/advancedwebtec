@extends('layouts/app')
@section('content')
@foreach($contract as $c)
    <li><h6>name:{{$c ->name}}<h6></li>
    <ul><h6>status:{{$c -> status}}<h6></ul>
    <ul><h6>email:{{$c -> email}}<h6></ul>
        @endforeach
@endsection