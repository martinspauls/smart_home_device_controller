<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use DB;

class DeviceController extends Controller
{
    public function index(){

    }
    public function show(){
        return view("devices");
    }

    public function addDevice()
    {
        return view("addDevice");
    }

    public function store(Request $request)
    {
        $device = Device::create($request->all());
        return redirect()->route("devices");
    }

    public function destroy($device_id)
    {
        Device::findOrFail($device_id)->delete();

        return redirect()->route('devices');
    }

    public function open($device_id)
    {
        $device = Device::find($device_id);
        $device->update([
            'name' => $device->name,
            'gate_key' => $device->gate_key,
            'gate_status' => 1,
            ]);
        return redirect()->route('devices');
    }   
    
    public function close($device_id)
    {
        $device = Device::find($device_id);
        $device->update([
            'name' => $device->name,
            'gate_key' => $device->gate_key,
            'gate_status' => 0,
            ]);
        return redirect()->route('devices');
    }   
}
