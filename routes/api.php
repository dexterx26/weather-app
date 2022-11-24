<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('autocomplete',[ApiController::class,'autocomplete'])->name('autocomplete');
route::get('autocomplete2',[ApiController::class,'autocomplete2'])->name('autocomplete2');
route::get('getCityDetails',[ApiController::class,'getCityDetails'])->name('getCityDetails');
route::get('fetchOpenWeatherLongLat',[ApiController::class,'fetchOpenWeatherLongLat'])->name('fetchOpenWeatherLongLat');

route::get('fetchDining',[ApiController::class,'fetchDining'])->name('fetchDining');
route::get('fetchFSQID',[ApiController::class,'fetchFSQID'])->name('fetchFSQID');