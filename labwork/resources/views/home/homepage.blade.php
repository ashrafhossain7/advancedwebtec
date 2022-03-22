<html>
    <ul>
    @foreach($courses as $c)
   <li> <h6>course:{{$c -> course}}<h6></li>
    <ul><h6>instructor:{{$c -> instructor}}<h6></ul>
    <ul><h6>duration:{{$c -> duration}}<h6></ul>
    <ul><h6>starts:{{$c -> starts}}<h6></ul>
    @endforeach
</ul>
</html>