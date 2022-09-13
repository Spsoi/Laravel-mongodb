<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceState;
use App\Models\Devices;

class DeviceStateController extends Controller
{
    public function index($device_id)
    {
        // $devices = Devices::where('id', '=', $device_id);
        // return $devices;

        // dd($devices);
    }

    public function store($device_id)
    {
        return DeviceState::all()->where('device_id', $device_id)->get();
    }
}
