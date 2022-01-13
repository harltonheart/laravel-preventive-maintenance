<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        $department = Department::all();
        return view('department.create', compact('department'));
    }

    public function store()
    {
        //validate input
        $this->validate(request(),[
            'department' => 'required|unique:departments',
        ]);

        Department::create([
            'department' => request('department'),
        ]);
        
        session()->flash('message', 'Created Department Succesfully');
        // return redirect('/computer');
        return back();
    }
}
