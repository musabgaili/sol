<?php

use App\Models\Data;
use App\Models\Device;
use App\Models\DeviceUpdate;
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



Route::get('/device-list', function () {
    $de = Device::paginate(25);
    return view('devices', ['d'=> $de]);
})->name('device.list');


Route::get('/device-data/{device}', function (Device $device) {
    // return $device;
        $data = DeviceUpdate::where('device_id', $device->id)->paginate(25);
    return view('deivce_data', ['d'=> $data, 'device'=> $device]);
})->name('device.data');



Route::get('/random-data', function () {
        $data = Data::paginate(25);
    return view('random', ['d'=> $data, ]);
})->name('random.data');
