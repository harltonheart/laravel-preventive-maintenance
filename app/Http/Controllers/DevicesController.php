<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Department;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function store(Department $dept)
    {
        Device::create([
            'type' => request('type'),
            'brand_name' => request('brand_name'),
            'device_name' => request('device_name'),
            'ip_address' => request('ip_address'),
            'port' => request('port'),
            'source' => request('source'),
            'serial' => request('serial'),
            'location' => request('location'),
            'department_id' => $dept->id 
        ]);
    
        session()->flash('message', 'New Device Added');
        return back();
        // dd(request()->all());
    }

    public function update(Device $device)
    {
        $device->update(request()->all());

        session()->flash('message', 'Update Device Successfully');

        return redirect('/summary/' . $device->department_id);
    }

    public function destroy(Device $device)
    {                   
        $device->delete();

        session()->flash('message', 'Device has been removed');
        return back();
    }
    
}
