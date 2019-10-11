<!DOCTYPE html>
<html>
<head>
<style>
.cities {
  background-color: white;
  color: black;
  margin: 20px;
  padding: 20px;
}
</style>
</head>
<body>
<h1>Kết Quả Tìm Kiếm</h2>

@if($CountryCode->count() == 0)
    <p> Không tìm thấy tên quốc gia </p>
@elseif ($CountryCode->count() >=1)
    @foreach($CountryCode as $cqg)
        <div class="cities">
        <h2>{{$cqg->country_code}}</h2>
        <p>{{$cqg->country_name}}</p>
        </div>
    @endforeach
@endif

<button ><a href="http://localhost:81/laravel-test/public/Country1" >Trởi Về</a></button>
</body>
</html>