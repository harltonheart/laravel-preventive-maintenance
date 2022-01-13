<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use App\Models\Weeklyschedule;
use App\Models\Monthlyschedule;

class SchedulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $comp = Computer::with('departments')
                ->latest()
                ->limit(4)
                ->get();
        $monthly = Monthlyschedule::all();
        return view('schedules.indexschedule', compact('monthly', 'comp'));
    }
    public function create()
    {
        $comp = Computer::with('departments')
                ->latest()
                ->limit(4)
                ->get();
        return view('schedules.createschedule', compact('comp'));
    }

    public function store()
    {
        $monthly = Monthlyschedule::create([
            'month' => request('month'),
            'year' => request('year'),
        ]);

        return redirect()->route('show.schedule', $monthly);
    }

    public function show(Monthlyschedule $monthly)
    {
        $firstweek = $monthly->weekly()->where('weekly', '1week')->get();
        $secondweek = $monthly->weekly()->where('weekly', '2week')->get();
        $thirdweek = $monthly->weekly()->where('weekly', '3week')->get();
        $forthweek = $monthly->weekly()->where('weekly', '4week')->get();

        $comp = Computer::with('departments')
                ->latest()
                ->limit(4)
                ->get();
        return view('schedules.viewschedule', compact('monthly', 'firstweek', 'secondweek', 'thirdweek', 'forthweek', 'comp'));

    }

    public function update(Weeklyschedule $weekly)
    {
        $weekly->update(request()->all());

        session()->flash('message', 'Update Data Succesfully');

        return redirect('/schedule/' . $weekly->monthlyschedule_id);
    }

    public function destroy(Weeklyschedule $weekly)
    {                   
        $weekly->delete();

        session()->flash('message', 'Department has been removed');
        return back();
    }



    public function default() //january first page
    {
        $comp = Computer::with('departments')
                ->latest()
                ->limit(4)
                ->get();
        return view('schedules.defaultschedule', compact('comp'));
    }
    public function february()
    {
        return view('schedules.default.february');
    }
    public function march()
    {
        return view('schedules.default.march');
    }
    public function april()
    {
        return view('schedules.default.april');
    }
    public function may()
    {
        return view('schedules.default.may');
    }
    public function june()
    {
        return view('schedules.default.june');
    }
    public function july()
    {
        return view('schedules.default.july');
    }
    public function august()
    {
        return view('schedules.default.august');
    }
    public function september()
    {
        return view('schedules.default.september');
    }
    public function october()
    {
        return view('schedules.default.october');
    }
    public function november()
    {
        return view('schedules.default.november');
    }
    public function december()
    {
        return view('schedules.default.december');
    }
}
