<?php

namespace App\Http\Controllers;

use App\Models\Remark;
use App\Models\Computer;
use Illuminate\Http\Request;

class RemarksController extends Controller
{
    public function remark(Computer $computer) //store
    {
        Remark::create([
            'date_findings' => request('date_findings'),
            'findings' => request('findings'),
            'recommended' => request('recommended'),
            'ticket' => request('ticket'),
            'computer_id' => $computer->id 
        ]);

        session()->flash('message', 'Findings and Actions Added');
        return back();
    }

    public function update(Remark $remark)
    {
        $remark->update(request()->all());

        session()->flash('message', 'Update Successfully');

        return back();
    }

    public function destroy(Remark $remark)
    {                   
        $remark->delete();

        session()->flash('message', 'Data Findings has been removed');
        return back();
    }
}
