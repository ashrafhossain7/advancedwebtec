<html>
<table>
    @foreach ($students as $s)
    <tr>
        <!--<td><a href="/get/{{$s->id}}/{{$s->name}}/{{$s->dob}}">{{$s->name}}</a></td><!--all this data will go to student> get and in that function name id dob is required to run that page we pass this name id and dob there and return to that page.-->
       <td><a href="{{route('student/get',['id'=>$s->id, 'name'=> $s->name, 'dob'=>$s->dob])}}">{{$s->name}}</a></td><!--with out passing the value hard coded we are using named routin to access all the data .1st it receive  the name of the perameter and 2nd it receives an associatative array & it receives dynamic array  
    and name of id name and dob or associatative arrays name has to be same with route gets variable name -->
        <td>{{$s->id}}</td><!--All the vlaue from list function on student controller comming here and every object are printed using foreach-->
        <td>{{$s->dob}}</td>
        
</tr>
@endforeach
</table>
</html>