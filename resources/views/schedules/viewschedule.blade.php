@extends('layouts.app')
    
    @section('title')
    Schedule
    @endsection

    @section('content')
        
    <div class="wrap flex-grow-1 ml-4 mt-3">
        <h3>Preventive Maintenance Schedule</h3>
        <div class="my-5">

            <div class="col-8">
                    @if(Auth::user()->username !== 'guest')
                        <button type="button" class="btn btn-primary btn-sm float-right mb-3" data-toggle="modal" data-target="#addschedepartment" title="Add New">Add Department Schedule</button>
                    @endif
                <h4>Month of  {{$monthly->month}}-{{$monthly->year}}</h4>
            </div>
            @if (!$monthly->weekly()->count())
                
                @if ($monthly->month == 'january' || $monthly->month == 'april' || $monthly->month == 'july' || $monthly->month == 'october' )
                        <form action="/oneweeklyschedule/{{$monthly->id}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm mt-4">Create as Default Schedule</button>
                        </form>
                @elseif(($monthly->month == 'february' || $monthly->month == 'may' || $monthly->month == 'august' || $monthly->month == 'november' ))
                    <form action="/twoweeklyschedule/{{$monthly->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm mt-4">Create as Default Schedule</button>
                    </form>
                @elseif(($monthly->month == 'march' || $monthly->month == 'june' || $monthly->month == 'september' || $monthly->month == 'december' ))
                    <form action="/threeweeklyschedule/{{$monthly->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm mt-4">Create as Default Schedule</button>
                    </form>
                @endif

            @endif

            <table class="table table-bordered post-table col-8 mt-2">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center text-danger">1st Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                        @if(Auth::user()->username !== 'guest')<td></td>@endif
                    </tr>
                </thead>
                <tbody>
                        @foreach ($firstweek as $week)
                            <tr>
                                <th>{{$week->department_name}}</th>
                                <td class="text-center">{{$week->partial}}</td>
                                <td class="text-center">{{$week->done}}</td>
                                <td class="text-center">{{$week->actual}}</td>
                                @if(Auth::user()->username !== 'guest')
                                <td class="p-0 text-center btn-margin">
                                    <button type="button" class="edit-sched" data-toggle="modal" data-target="#editSchedule-{{$week->id}}" title="Add Status"><i class="fas fa-pencil-alt"></i></button>
                                    <button type="button" class="delete-sched" data-toggle="modal" data-target="#deleteSchedule-{{$week->id}}" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                </tbody>
            </table>
            <table class="table table-bordered post-table col-8">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center text-danger">2nd Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                        @if(Auth::user()->username !== 'guest')<td></td>@endif
                    </tr>
                </thead>
                <tbody>
                        @foreach ($secondweek as $week)
                            <tr>
                                <th>{{$week->department_name}}</th>
                                <td class="text-center">{{$week->partial}}</td>
                                <td class="text-center">{{$week->done}}</td>
                                <td class="text-center">{{$week->actual}}</td>
                                @if(Auth::user()->username !== 'guest')
                                <td class="p-0 text-center btn-margin">
                                    <button type="button" class="edit-sched" data-toggle="modal" data-target="#editSchedule-{{$week->id}}" title="Add Status"><i class="fas fa-pencil-alt"></i></button>
                                    <button type="button" class="delete-sched" data-toggle="modal" data-target="#deleteSchedule-{{$week->id}}" title="Delete"><i class="fas fa-trash-alt"></i></button>    
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    
                </tbody>
            </table>
            <table class="table table-bordered post-table col-8">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center text-danger">3rd Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                        @if(Auth::user()->username !== 'guest')<td></td>@endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($thirdweek as $week)
                        <tr>
                            <th>{{$week->department_name}}</th>
                            <td>{{$week->partial}}</td>
                            <td>{{$week->done}}</td>
                            <td>{{$week->actual}}</td>
                            @if(Auth::user()->username !== 'guest')
                            <td class="p-0 text-center btn-margin">
                                <button type="button" class="edit-sched" data-toggle="modal" data-target="#editSchedule-{{$week->id}}" title="Add Status"><i class="fas fa-pencil-alt"></i></button>
                                <button type="button" class="delete-sched" data-toggle="modal" data-target="#deleteSchedule-{{$week->id}}" title="Delete"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table table-bordered post-table col-8">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center text-danger">4th Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                        @if(Auth::user()->username !== 'guest')<td></td>@endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forthweek as $week)
                    <tr>
                        <th>{{$week->department_name}}</th>
                        <td>{{$week->partial}}</td>
                        <td>{{$week->done}}</td>
                        <td>{{$week->actual}}</td>
                        @if(Auth::user()->username !== 'guest')
                        <td class="p-0 text-center btn-margin">
                            <button type="button" class="edit-sched" data-toggle="modal" data-target="#editSchedule-{{$week->id}}" title="Add Status"><i class="fas fa-pencil-alt"></i></button>
                            <button type="button" class="delete-sched" data-toggle="modal" data-target="#deleteSchedule-{{$week->id}}" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
                

        </div>
        @include('layouts.activities')
        
    </div>

    @endsection

    {{-- Store new department --}}
    <div class="modal fade" id="addschedepartment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/departmentschedule/{{$monthly->id}}" class="form-group" id="addscheduledepartment">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Department</label>
                        <div class="col-sm-10">
                            <input type="text" class="ml-3" name="department_name" placeholder="Department"/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Weeks</label>
                        <div class="col-sm-10">
                            <select name="department_name" class="col-sm-6 p-0 ml-3" style="width: 182px;" autofocus>
                                <option disabled selected hidden>Select Week</option>
                                <option value="1week">1st week</option>
                                <option value="2week">2nd week</option>
                                <option value="3week">3rd week</option>
                                <option value="4week">4th week</option>
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-success" form="addscheduledepartment">Save</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>



    {{-- Edit first week --}}
    @foreach ($firstweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="editSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$week->department_name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/weeklystatus/{{$week->id}}" class="form-group" id="update-pda-{{$week->id}}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Weeks</label>
                            <div class="col-sm-10">
                                {{-- <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/> --}}
                                <select name="weekly" class="col-sm-6 p-0 ml-3" style="width: 182px;" autofocus>
                                    <option value="1week" {{$week->weekly == '1week' ? 'selected' : ''}}>1st week</option>
                                    <option value="2week" {{$week->weekly == '2week' ? 'selected' : ''}}>2nd week</option>
                                    <option value="3week" {{$week->weekly == '3week' ? 'selected' : ''}}>3rd week</option>
                                    <option value="4week" {{$week->weekly == '4week' ? 'selected' : ''}}>4th week</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Partial</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="partial" placeholder="P"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Done</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="done" placeholder="D"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Actual</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="actual" placeholder="A"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success" form="update-pda-{{$week->id}}">Save</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach


    
     {{-- Edit second week --}}
    @foreach ($secondweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="editSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$week->department_name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/weeklystatus/{{$week->id}}" class="form-group" id="update-pda-{{$week->id}}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Weeks</label>
                            <div class="col-sm-10">
                                {{-- <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/> --}}
                                <select name="weekly" class="col-sm-6 p-0 ml-3" style="width: 182px;" autofocus>
                                    <option value="1week" {{$week->weekly == '1week' ? 'selected' : ''}}>1st week</option>
                                    <option value="2week" {{$week->weekly == '2week' ? 'selected' : ''}}>2nd week</option>
                                    <option value="3week" {{$week->weekly == '3week' ? 'selected' : ''}}>3rd week</option>
                                    <option value="4week" {{$week->weekly == '4week' ? 'selected' : ''}}>4th week</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Partial</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="partial" placeholder="P"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Done</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="done" placeholder="D"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Actual</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="actual" placeholder="A"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success" form="update-pda-{{$week->id}}">Save</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach





     {{-- Edit third week --}}
    @foreach ($thirdweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="editSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$week->department_name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/weeklystatus/{{$week->id}}" class="form-group" id="update-pda-{{$week->id}}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Weeks</label>
                            <div class="col-sm-10">
                                {{-- <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/> --}}
                                <select name="weekly" class="col-sm-6 p-0 ml-3" style="width: 182px;" autofocus>
                                    <option value="1week" {{$week->weekly == '1week' ? 'selected' : ''}}>1st week</option>
                                    <option value="2week" {{$week->weekly == '2week' ? 'selected' : ''}}>2nd week</option>
                                    <option value="3week" {{$week->weekly == '3week' ? 'selected' : ''}}>3rd week</option>
                                    <option value="4week" {{$week->weekly == '4week' ? 'selected' : ''}}>4th week</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Partial</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="partial" placeholder="P"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Done</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="done" placeholder="D"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Actual</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="actual" placeholder="A"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success" form="update-pda-{{$week->id}}">Save</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach





     {{-- Edit forth week --}}
    @foreach ($forthweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="editSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$week->department_name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/weeklystatus/{{$week->id}}" class="form-group" id="update-pda-{{$week->id}}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Weeks</label>
                            <div class="col-sm-10">
                                {{-- <input type="text" class="ml-3" name="department_name" value="{{ old('department_name') ?? $week->department_name }}"/> --}}
                                <select name="weekly" class="col-sm-6 p-0 ml-3" style="width: 182px;" autofocus>
                                    <option value="1week" {{$week->weekly == '1week' ? 'selected' : ''}}>1st week</option>
                                    <option value="2week" {{$week->weekly == '2week' ? 'selected' : ''}}>2nd week</option>
                                    <option value="3week" {{$week->weekly == '3week' ? 'selected' : ''}}>3rd week</option>
                                    <option value="4week" {{$week->weekly == '4week' ? 'selected' : ''}}>4th week</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Partial</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="partial" placeholder="P"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Done</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="done" placeholder="D"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Actual</label>
                            <div class="col-sm-10">
                                <input type="number" class="ml-3" min="0" step="1" name="actual" placeholder="A"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success" form="update-pda-{{$week->id}}">Save</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach






    {{-- Delete department Schedule Firstweek--}}
    @foreach ($firstweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="deleteSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                
                <button type="button" class="close ml-auto m-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                <div class="modal-body">
                    <p class="text-dark">Are you sure you want to remove {{$week->department_name}} ?</p>
                </div>
                <div class="modal-footer">
                    <form method="post" action="/statusdelete/{{$week->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-primary">Yes</button>
                    </form>  
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach



    {{-- Delete department Schedule Secondweek--}}
    @foreach ($secondweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="deleteSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                
                <button type="button" class="close ml-auto m-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                <div class="modal-body">
                    <p class="text-dark">Are you sure you want to remove {{$week->department_name}} ?</p>
                </div>
                <div class="modal-footer">
                    <form method="post" action="/statusdelete/{{$week->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-primary">Yes</button>
                    </form>  
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach



    {{-- Delete department Schedule thirdweek--}}
    @foreach ($thirdweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="deleteSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                
                <button type="button" class="close ml-auto m-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                <div class="modal-body">
                    <p class="text-dark">Are you sure you want to remove {{$week->department_name}} ?</p>
                </div>
                <div class="modal-footer">
                    <form method="post" action="/statusdelete/{{$week->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-primary">Yes</button>
                    </form>  
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach



    {{-- Delete department Schedule forthweek--}}
    @foreach ($forthweek as $week)
        <!-- Modal -->
        <div class="modal fade" id="deleteSchedule-{{$week->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                
                <button type="button" class="close ml-auto m-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                <div class="modal-body">
                    <p class="text-dark">Are you sure you want to remove {{$week->department_name}} ?</p>
                </div>
                <div class="modal-footer">
                    <form method="post" action="/statusdelete/{{$week->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-primary">Yes</button>
                    </form>  
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach
