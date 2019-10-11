<form  action="{{route('postForm')}}" method="post" >
@csrf
    <input  type="text" name="HoTen" >
    <input type="submit">
    @for($i =1 ;$i < 10;$i++)
        {{$i, " "}}
    @endfor    
</form>