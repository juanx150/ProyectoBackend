<?php

use App\Http\Controllers\api\v1\BuscarNumParkingController;
use App\Http\Controllers\api\v1\ParkingController;
use App\Http\Controllers\api\v1\VehiculosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::apiResource('v1/BuscarParking', BuscarNumParkingController::class);
Route::apiResource('v1/Parking', ParkingController::class);
Route::apiResource('v1/Vehiculos', VehiculosController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
