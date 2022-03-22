<html>
    <body>
        <div>
            
</div >
            @include("includes/header")//all the things from the headers are included here.
            @yield('content')//yield is written using @ and need to have an identifier
            @yield ('demo') //to use it in some specific pages..will be using a dynamic content
        <div>   
            @include("includes/footer")
        </div>
    </body>
</html>