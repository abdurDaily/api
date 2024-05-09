<?php

namespace App\Http\Controllers\Youtube;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class YoutubeController extends Controller
{
    public function searchIndex(Request $request){
        $response = Http::withHeaders(
            [
                'X-RapidAPI-Key' => '05040565edmsh384751a0a09e9b6p1b69a0jsn4bd98906f59c',
                'X-RapidAPI-Host' => 'youtube-v3-alternative.p.rapidapi.com'
            ]
        )->get('https://youtube-v3-alternative.p.rapidapi.com/search',[
            'query' => $request->search,
            'geo' => 'US',
            'lang' => 'en'
        ]);

        // dd($response->json()['data']);

        $data = $response->json()['data'];
        return view('welcome',compact('data'));
    }



    // VIDEO DETAILS
    public function details($videoId){


        $response = Http::withHeaders(
            [
                'X-RapidAPI-Key' => '05040565edmsh384751a0a09e9b6p1b69a0jsn4bd98906f59c',
                'X-RapidAPI-Host' => 'youtube-v3-alternative.p.rapidapi.com'
            ]
        )->get('https://youtube-v3-alternative.p.rapidapi.com/video', [
            'id' => $videoId,
        ]);



        $newResponse = Http::withHeaders(
            [
                'X-RapidAPI-Key' => '05040565edmsh384751a0a09e9b6p1b69a0jsn4bd98906f59c',
                'X-RapidAPI-Host' => 'youtube-v3-alternative.p.rapidapi.com'
            ]
        )->get('https://youtube-v3-alternative.p.rapidapi.com/related', [
            'id' => $videoId,
        ]);

        // dd($newResponse->json()['data']);

        $newResponseData = $newResponse->json()['data'];
        // dd($response->json());

        $data = $response->json();
        return view('youtube.details', compact('data','newResponseData'));
    }
}
