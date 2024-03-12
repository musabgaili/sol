<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Device;
use App\Models\DeviceUpdate;
use Illuminate\Http\Request;

class ApiDeviceController extends Controller
{



    function registerDevice(Request $request)
    {
        $request->validate([
            'device_id' => 'required',
            'lat'=> 'required|numeric',
            'lng'=> 'required|numeric'
        ]);
        try {
            $device = new Device([
                'device' => $request->device_id,
                'lat' => $request->lat,
                'lng' => $request->lng,
                'last_update' => now(),
                'status' => true,
            ]);

            $device->save();

            return $device;
        } catch (\Throwable $th) {
            return $th;
        }
    }


    function registerDeviceUpdate(Request $request)
    {
        $request->validate([
            'device_id' => 'required',
            'data' => 'required'
        ]);
        // return $device;
        try {
            $device = Device::where('device', $request->device_id)->first();
            $device_update  = new DeviceUpdate([
                'device_id' => $device->id,
                'data' => $request->data,
                'sent_at' => now(),
            ]);
            $device_update->save();

            return $device_update;
        } catch (\Throwable $th) {
            return $th;
        }
    }


    function testData(Request $request)
    {
        // return $request;
        logger($request->getContent());
        return $request->getContent();
    }

    function testSaveData(Request $request)
    {
        $request->validate(['data' => 'required']);
        $data = new Data(['data' => $request->data]);
        $data->save();
        return $data;
    }
}
