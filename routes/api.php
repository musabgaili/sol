<?php

use App\Http\Controllers\ApiDeviceController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register-device', [ApiDeviceController::class , 'registerDevice']);
Route::post('/device-data', [ApiDeviceController::class , 'registerDeviceUpdate']);
// return data only
Route::post('/random-data', [ApiDeviceController::class , 'testData']);
// save data and return it
Route::post('/random-data-save', [ApiDeviceController::class , 'testSaveData']);
