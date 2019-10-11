<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Country;


class Mycontroller extends Controller
{
    
    public function postCountry(Request $request){ 
        $src = $request->Country;
        $this->validate($request,["Country"=>"required"],
                                 ["Country.required"=>"Vui lòng điền "]);
        $country1 = Country::where('country_name',$src)->count();
        if ($country1 < 1 && $src=='All')
        {
            $country = Country::all();
            return view('PostCountry',['country'=>$country]);
        }
        else{
            $country = Country::where('country_name',$src)->get();
            return view('PostCountry',['country'=>$country]);
        }
    }
    public function GetIdCountry(Request $request){
        $src = $request->IdCountry;
        $Id = Country::where('id',$src)->get();
        return view('GetIdCountry',['Id'=>$Id]);
    }
    public function CountryCode(Request $request){
        $src = $request->CountryCode;
        $CountryCode = Country::where('country_code',$src)->get();
        return view('CountryCode',['CountryCode'=>$CountryCode]);
    }

}
