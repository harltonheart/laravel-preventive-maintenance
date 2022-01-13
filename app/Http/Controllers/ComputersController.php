<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Computer;
use App\Models\Department;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        $departments = Department::get();
        return view('user.createuser', compact('departments'));
    }

    public function store()
    {
        $this->validate(request(), [
            'departments' => 'required',
            'location' => 'required',
            'pc_name' => 'required',
            'ip_address' => 'required',
            'ip_settings' => 'required',
            'year' => 'required',
        ]);

        $computer = Computer::create([
            //User
            //database              //input fields
            'department_id' => request('departments'),
            'location' => request('location'),
            'pc_name' => request('pc_name'),
            'ip_add' => request('ip_address'),
            'ip_settings' => request('ip_settings'),
            'year' => request('year'),
            'mr_to' => request('mr_to'), //nullable
            'initial_cost' => request('initial_cost'), //nullable
            'deploy_date' => request('deploy_date'), //nullable
            'serial' => request('serial'), //nullable
        ]);
        
        session()->flash('message', 'Created User Succesfully');

        return redirect()->route('show.computer', $computer);
    }

    public function show(Computer $computer)
    {
        $departments = Department::with('computers');
        $computer->with('firststatus','secondstatus','thirdstatus','forthstatus', 'posts', 'remarks', 'departments');
        return view('user.userworkstation', compact('computer', 'departments'));
    }

    public function edit(Computer $computer)
    {
        $department_id = Department::get();
        return view('user.edituser', compact('computer', 'department_id'));
    }

    public function update(Computer $computer)
    {
        $this->validate(request(), [
            'location' => 'required',
            'pc_name' => 'required',
            'ip_add' => 'required',
        ]);

        $computer->update(request()->all());

        session()->flash('message', 'Update User Succesfully');

        return redirect('/computer/' . $computer->id);
    }
}
