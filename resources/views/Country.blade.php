<!DOCTYPE html>
<html>
<head>
<style>
.cities {
  background-color: black;
  color: rgb(22, 66, 163);
  margin: 20px;
  padding: 20px;
}
</style>
</head>
<body>

<div class="cities">
  <h2>Tìm Kiếm</h2>
  @if (count($errors)>0)
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
   </div>
   @endif
  <form  action="{{route('postCountry')}}" method="post" >
  <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
@csrf
    <label>Country</label>
    <input  type="text" name="Country">
    <input type="submit" value="Tìm" >  
</form>
</br>
<form  action="{{route('GetIdCountry')}}" method="post" >
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        @csrf
            <label>Tìm bằng ID:</label>
            <select name="IdCountry">
                @foreach($Id as $idqg)
                  <option value="{{$idqg->id}}">{{$idqg->id}}</option>
                @endforeach
            </select>
            <input type="submit" value="Tìm" >
</form>

<form  action="{{route('CountryCode')}}" method="post" >
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        @csrf
            <label>Tìm bằng Code:</label>
            <select name="CountryCode">
                @foreach($CountryCode as $cqg)
                  <option value="{{$cqg->country_code}}">{{$cqg->country_code}}</option>
                @endforeach
            </select>
            <input type="submit" value="Tìm" >
</form>

</div>
</body>
</html>