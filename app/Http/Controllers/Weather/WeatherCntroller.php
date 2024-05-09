<?php

namespace App\Http\Controllers\Weather;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class WeatherCntroller extends Controller
{
    public function weather(){
        return view('weather.index');
    }
    public function weatherSearch(Request $request){
        $response = Http::withHeaders(
            [
                'content-type'=>'application/json',
                'X-RapidAPI-Key'=> '475a94bb1amsh170992e314ba961p182d27jsn8466a1b4c825',
                'X-RapidAPI-Host'=> 'ai-writer1.p.rapidapi.com'
            ]
        )->get('https://ai-writer1.p.rapidapi.com/translation/',[
            'language' => 'bangla',
	'text' => $request->search,
        ]);


        $data = $response->json();
        // dd($data);  
        return view('weather.index',compact('data'));
    }
}
