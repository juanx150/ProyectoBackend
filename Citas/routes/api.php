<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\CitaController;
use App\Http\Controllers\api\v1\UserController;

Route::apiResource('v1/cita', CitaController::class);
Route::apiResource('v1/user', UserController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
