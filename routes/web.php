<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hihi', function () {
    echo 'hhjjhjh';
});
Route::get('/hihi/{year}', function($year){
    echo ('<h1>'.'Xin chào, ' . $year);
    // return view('hello-world');
});

Route::get('/MyRoute', function () {
    echo 'Đây là MyRoute';
});

Route::get('/link', function(){
    // echo 'Đây là link';
    $id = 1233344;
    return redirect('hihi'.'/'.$id);
});

Route::get('tt','Mycontroller@XinChao');
Route::get('getForm', function(){
    return view('hello');
});
Route::get('/haha', function () {
    return view('hello');
});

Route::post('postForm',['as'=>'postForm','uses'=>'Mycontroller@postForm']);
Route::get('setCookie','Mycontroller@setCookie');
Route::get('getCookie','Mycontroller@getCookie');
Route::get('db',function(){
    Schema::create('SanPham',function($tb){
        $tb->increments('id');
        $tb->string('name',100);
    });
    echo 'set database';
});
Route::get('db/get',function(){
    $data = DB::table('SanPham')->select(['id']) ->where('id','=',2)->get();
    foreach($data as $row)
    {
        foreach($row as $key=>$value)
        {
            echo '<h1>'.$key.":".$value.'<br>'.'<h1>' ;
        }
        echo "<hr>";
    }
});
// Route::get('Country', function(){
//     $country = App\Country::where('country_name','Aruba')->get()->toArray() ;
//     foreach($country as $row)
//     {
//         foreach($row as $key=>$value)
//         {
//             echo '<h1>'.$key.":".$value.'<br>'.'<h1>' ;
//         }
//         echo "<hr>";
//     }
// });
Route::get('Country1', function(){
    $Id = App\Country::select('id')->get();
    $CountryCode = App\Country::select('country_code')->get();
    return view('Country',['Id'=>$Id],['CountryCode'=>$CountryCode]);
});
//Tìm bình thường
Route::post('postCountry',['as'=>'postCountry','uses'=>'Mycontroller@postCountry']);
//Tìm bằng id
Route::post('GetIdCountry',['as'=>'GetIdCountry','uses'=>'Mycontroller@GetIdCountry']);
// Tìm bằng mã quốc gia
Route::post('CountryCode',['as'=>'CountryCode','uses'=>'Mycontroller@CountryCode']);

