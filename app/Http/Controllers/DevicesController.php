<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices;

class DevicesController extends Controller
{
    public function show()
    {
        $devices = Devices::all();
        dd($devices);
    }

    public function store(Request $request)
    {
        $device = new Devices;

        $device->login = $request->login;
        $device->password = $request->password;
        $device->name = $request->name;
        $device->save();

        return response()->json(["result" => "ok"], 201);
    }
}
