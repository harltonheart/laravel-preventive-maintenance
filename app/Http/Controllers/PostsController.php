<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Computer;
use App\Models\Department;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(Computer $computer)
    {
        return view('posts.workstationcreate', compact('computer'));
    }
    public function store(Computer $computer) //store
    {
        Post::create([
            'mouse' => request('mouse'),
            'kboard' => request('kboard'),
            'monitor' => request('monitor'),
            'avr_ups' => request('avr_ups'),
            'printer' => request('printer'),
            'bargun' => request('bargun'),
            // 'glucometer' => request('glucometer'),
            'sysboot' => request('sysboot'),
            'antivirus' => request('antivirus'),
            'cpu' => request('cpu'),
            'ms_office' => request('ms_office'),
            'os' => request('os'),
            'his' => request('his'),
            'mms' => request('mms'),
            'emr' => request('emr'),
            'queui_sys' => request('queui_sys'),
            'weblis' => request('weblis'),
            // 'btl' => request('btl'),
            // 'phic_ref' => request('phic_ref'),
            // 'jivex' => request('jivex'),
            // 'netsupport' => request('netsupport'),
            'computer_id' => $computer->id 
        ]);

        session()->flash('message', 'Preventive Maintenance added Successfully');
        return redirect()->route('show.computer', $computer);
    }

    public function update(Post $computer)
    {
        $computer->update(request()->all());

        session()->flash('message', 'Update Succesfully');

        return back();
    }

}
