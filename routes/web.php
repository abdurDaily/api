<?php

use App\Http\Controllers\Weather\WeatherCntroller;
use App\Http\Controllers\Youtube\YoutubeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [YoutubeController::class, 'searchIndex'])->name('search');
Route::get('/details/{videoId}', [YoutubeController::class, 'details'])->name('details');

Route::get('/weather', [WeatherCntroller::class, 'weather'])->name('weaather');
Route::get('/weather-search', [WeatherCntroller::class, 'weatherSearch'])->name('weaather.search');