<html>
<body>
</body>
<div>
            <a href="{{route('login')}}">login</a>
            <a href='{{route("index")}}'>index</a>
            <a href="{{route('register')}}">register</a>
            <a href ="{{route('create')}}">create</a>
            <a href = "{{route('get')}}">get student</a>
            <a href="{{route('delete')}}">delete student</a>
            <a href='{{route("edit")}}'>edit student</a>
            <a href="{{route('course')}}"> courses</a>
            <a href="{{route('contractus')}}">contractus</a>
            <a href="{{route('list')}}">list of studnet </a>
            @yield('content')
</div>
</html>