<?php

use App\Http\Controllers\Autentifikacija;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [Autentifikacija::class, 'login']);
Route::get('/hoteli', [HotelController::class, 'index']);

Route::get('/sobe', [RoomController::class, 'index']);

Route::get('/rezervacije', [ReservationController::class, 'index']);



Route::group(['middleware' => ['auth:sanctum']], function () {
 
    Route::post('/rezervacije', [ReservationController::class, 'store']);
    Route::put('/rezervacije/{id}', [ReservationController::class, 'update']);
    Route::delete('/rezervacije/{id}', [ReservationController::class, 'destroy']);

    Route::post('/logout', [Autentifikacija::class, 'logout']);

});
