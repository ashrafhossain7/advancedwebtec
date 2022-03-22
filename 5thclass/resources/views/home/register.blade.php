@extends ('layouts/app')
@section ('content')
    <html>
    <h1>this is register page</h1>
    <form action="{{route('registersubmit')}}" method= "post">
        {{@csrf_field()}}
        name:<input type ="text" placeholder="name" name="name" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    </br>
        username:<input type="text" placeholder=username name="u_name" value="{{old('u_name')}}">
    @error('u_name')
    <span>{{$message}}
        @enderror
        </br>
        e-mail:<input type="text" placeholder="email" name="email" value="{{old('email')}}">
        @error('email')
        <span>{{$message}}</span>
        @enderror    
    </br>
        id:<input type ="text" placeholder="id" name="id" value="{{old('id')}}">
    @error('id')
    <span>{{$message}}
        @enderror
    </br>
        password:<input type='password' placeholder="password" name="pass" value="{{old('pass')}}">
        @error('pass')
        <span>{{$message}}</span>
        @enderror
    </br>
        confirm password<input type="password" placeholder="confirm pass" name="confpass"></br>
        @error('confpass')
        <span>{{$message}}</span>
        @enderror
        <input type='date' name="date" value="{{old('date')}}">
        @error('date')
        <span>{{$message}}</span>
        @enderror    
    </br>
        <input type="submit">
</html>
@endsection()