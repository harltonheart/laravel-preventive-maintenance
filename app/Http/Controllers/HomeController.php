<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\First;
use App\Models\Forth;
use App\Models\Third;
use App\Models\Device;
use App\Models\Second;
use App\Models\Computer;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dept = Department::withCount([
                    'computers',
                    'computers as computers_count_pcname' => function ($query) {
                        $query->select(Computer::raw('count(distinct(pc_name))'));
                    },
                ])->paginate(15);
        

        $comp = Computer::with('departments'); //search this to query builder to get this relationship
        $device = Device::get();
        $posts = Post::get();
        // $user = User::get();
      

        $first = First::select(['firsts.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd', 'computers.id as computer_id'])
                        ->join('computers', 'firsts.computer_id', '=', 'computers.id')
                        ->orderBy('created_at', 'desc')
                        ->get()
                        ->take(2);
        $second = Second::select(['seconds.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd', 'computers.id as computer_id'])
                        ->join('computers', 'seconds.computer_id', '=', 'computers.id')
                        ->orderBy('created_at', 'desc')
                        ->get()
                        ->take(2);
        $third = Third::select(['thirds.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd', 'computers.id as computer_id'])
                        ->join('computers', 'thirds.computer_id', '=', 'computers.id')
                        ->orderBy('created_at', 'desc')
                        ->get()
                        ->take(2);
        $forth = Forth::select(['forths.*', 'computers.location as computer_location', 'computers.pc_name as computer_pcname', 'computers.ip_add as computer_ipadd', 'computers.id as computer_id'])
                        ->join('computers', 'forths.computer_id', '=', 'computers.id')
                        ->orderBy('created_at', 'desc')
                        ->get()
                        ->take(2);

                
        return view('home', compact('dept', 'comp', 'first', 'second', 'third', 'forth', 'posts', 'device'));
    }

    public function fetch_data()
    {
        if(request()->ajax()){
            $dataquery = request()->get('query');
            $data = str_replace(" ", "%", $dataquery);
            $dept = Department::query()
                    ->withCount('computers')
                    ->when($data, fn ($query) => $query->where('department', 'like', "%{$data}%"))
                    ->paginate(15);
            return view('paginate', compact('dept'))->render();
        }
    }

    public function find_pc()
    {
        $comp = Computer::paginate(6);
        return view('user.findpc', compact('comp'));
    }
    
    public function find_computer()
    {
        if(request()->ajax()){
            $dataquery = request()->get('query');
            $data = str_replace(" ", "%", $dataquery);
            $comp = Computer::query()
                    ->when($data, fn ($query) => $query->where('pc_name', 'like', "%{$data}%"))
                    ->paginate(6);
            return view('user.findcomputer', compact('comp'))->render();
        }
    }
}
