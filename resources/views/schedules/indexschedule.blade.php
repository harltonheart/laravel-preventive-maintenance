@extends('layouts.app')
    
    @section('title')
    Schedule
    @endsection

    @section('content')
        
    <div class="wrap flex-grow-1 ml-4 mt-3">
        <h3>Preventive Maintenance Schedule</h3>
        <div class="my-5">

            <h4>List of Schedule</h4>

            <table class="table table-striped table-hover col-lg-6">
                <thead class="border">
                <tr>
                    <th class="col-6">Month Schedule</th>
                    <th class="col-2"><center>Total Departments</center></th>
                </tr>
                </thead>
                <tbody class="border">
                    @foreach($monthly as $months)
                        <tr>
                            <th><a href="/schedule/{{$months->id}}" class="text-primary">{{$months->month}}-{{$months->year}}</a></th>
                            <td><center>40</center></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                

        </div>
        @include('layouts.activities')
        
    </div>


    @endsection