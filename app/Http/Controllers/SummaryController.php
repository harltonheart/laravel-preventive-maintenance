<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\First;
use App\Models\Forth;
use App\Models\Third;
use App\Models\Device;
use App\Models\Second;
use App\Models\Computer;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SummaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Department $dept)
    {
        $comp = $dept->computers()
                ->select(['computers.*', DB::raw("DATE_FORMAT(firsts.created_at, '%m/%d/%Y') as first_created"), 
                                         DB::raw("DATE_FORMAT(seconds.created_at, '%m/%d/%Y') as second_created"), 
                                         DB::raw("DATE_FORMAT(thirds.created_at, '%m/%d/%Y') as third_created"), 
                                         DB::raw("DATE_FORMAT(forths.created_at, '%m/%d/%Y') as forth_created"),
                                         ])
                ->leftJoin('firsts', 'computers.id', '=', 'firsts.computer_id')
                ->leftJoin('seconds', 'computers.id', '=', 'seconds.computer_id')
                ->leftJoin('thirds', 'computers.id', '=', 'thirds.computer_id')
                ->leftJoin('forths', 'computers.id', '=', 'forths.computer_id')
                ->where('active', 1)
                ->paginate(20);
        
        // $first = First::select(['firsts.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
        //         ->join('computers', 'firsts.computer_id', '=', 'computers.id')
        //         ->orderBy('created_at', 'desc')
        //         ->get()
        //         ->take(2);
        // $second = Second::select(['seconds.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
        //         ->join('computers', 'seconds.computer_id', '=', 'computers.id')
        //         ->orderBy('created_at', 'desc')
        //         ->get()
        //         ->take(2);
        // $third = Third::select(['thirds.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
        //         ->join('computers', 'thirds.computer_id', '=', 'computers.id')
        //         ->orderBy('created_at', 'desc')
        //         ->get()
        //         ->take(2);
        // $forth = Forth::select(['forths.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
        //         ->join('computers', 'forths.computer_id', '=', 'computers.id')
        //         ->orderBy('created_at', 'desc')
        //         ->get()
        //         ->take(2);
        // return view('department.summary', compact('dept', 'comp', 'first', 'second', 'third', 'forth'));

        $device = Device::with('departments');

        return view('department.summary', compact('dept', 'comp', 'device'));
    }

    public function fetch_year(Department $dept)
    {
        $yearquery = request()->get('yearonly');
        $data = str_replace(" ", "%", $yearquery);
        
        $comp = Computer::select(['computers.*', DB::raw("DATE_FORMAT(firsts.created_at, '%m/%d/%Y') as first_created"), 
                                                DB::raw("DATE_FORMAT(seconds.created_at, '%m/%d/%Y') as second_created"), 
                                                DB::raw("DATE_FORMAT(thirds.created_at, '%m/%d/%Y') as third_created"), 
                                                DB::raw("DATE_FORMAT(forths.created_at, '%m/%d/%Y') as forth_created"),
                                                ])
                    ->leftJoin('firsts', 'computers.id', '=', 'firsts.computer_id')
                    ->leftJoin('seconds', 'computers.id', '=', 'seconds.computer_id')
                    ->leftJoin('thirds', 'computers.id', '=', 'thirds.computer_id')
                    ->leftJoin('forths', 'computers.id', '=', 'forths.computer_id')
                    ->where([
                        ['department_id', $dept->id],
                        ['year', $yearquery],
                        ['active', 1],
                        ])
                    ->paginate(20);


            // $first = First::select(['firsts.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
            //         ->join('computers', 'firsts.computer_id', '=', 'computers.id')
            //         ->orderBy('created_at', 'desc')
            //         ->get()
            //         ->take(2);
            // $second = Second::select(['seconds.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
            //         ->join('computers', 'seconds.computer_id', '=', 'computers.id')
            //         ->orderBy('created_at', 'desc')
            //         ->get()
            //         ->take(2);
            // $third = Third::select(['thirds.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
            //         ->join('computers', 'thirds.computer_id', '=', 'computers.id')
            //         ->orderBy('created_at', 'desc')
            //         ->get()
            //         ->take(2);
            // $forth = Forth::select(['forths.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd'])
            //         ->join('computers', 'forths.computer_id', '=', 'computers.id')
            //         ->orderBy('created_at', 'desc')
            //         ->get()
            //         ->take(2);
        // return view('department.summary', compact('comp', 'dept', 'first', 'second', 'third', 'forth'));
        return view('department.summary', compact('comp', 'dept'));
    }

}