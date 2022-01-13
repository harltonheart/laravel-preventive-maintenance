<?php

namespace App\Http\Controllers;

use App\Models\First;
use App\Models\Second;
use App\Models\Computer;
use Illuminate\Http\Request;

class SecondStatusController extends Controller
{
    public function second(Computer $computer) //store
    {
        Second::create([
            'mouse_stats' => request('mouse_stats'),
            'kb_stats' => request('kb_stats'),
            'monitor_stats' => request('monitor_stats'),
            'avrups_stats' => request('avrups_stats'),
            'printer_stats' => request('printer_stats'),
            'cpu_stats' => request('cpu_stats'),
            'bargun_stats' => request('bargun_stats'),
            // 'glucometer_stats' => request('glucometer_stats'),
            'sysboot_stats' => request('sysboot_stats'),
            'os_stats' => request('os_stats'),
            'avirus_stats' => request('avirus_stats'),
            'msoffice_stats' => request('msoffice_stats'),
            'his_stats' => request('his_stats'),
            'mms_stats' => request('mms_stats'),
            'emr_stats' => request('emr_stats'),
            'queui_stats' => request('queui_stats'),
            'weblis_stats' => request('weblis_stats'),
            // 'btl_stats' => request('btl_stats'),
            // 'phicref_stats' => request('phicref_stats'),
            // 'jivex_stats' => request('jivex_stats'),
            // 'netsupport_stats' => request('netsupport_stats'),
            'computer_id' => $computer->id 
        ]);

        session()->flash('message', 'Second Quarter Added Successfully');
        return back();

        // dd(request()->all());
    }
    
    public function update(Second $second)
    {
        $second->update(request()->all());

        session()->flash('message', 'Second Quarter Update');
        return back();

        // dd(request()->all());
    }
}
