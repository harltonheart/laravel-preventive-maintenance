@extends('layouts.app')
    
    @section('title')
    Schedule (July)
    @endsection

    @section('content')
        
    <div class="wrap flex-grow-1 ml-4 mt-3">
        <h3>Preventive Maintenance Schedule</h3>
        <div class="my-5">
            <div class="dropdown mb-5">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select Month <i class="fas fa-caret-down"></i>
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="/defaultschedule">January</a>
                    <a class="dropdown-item" href="/defaultschedule/february">February</a>
                    <a class="dropdown-item" href="/defaultschedule/march">March</a>
                    <a class="dropdown-item" href="/defaultschedule/april">April</a>
                    <a class="dropdown-item" href="/defaultschedule/may">May</a>
                    <a class="dropdown-item" href="/defaultschedule/june">June</a>
                    <a class="dropdown-item" href="/defaultschedule/july">July</a>
                    <a class="dropdown-item" href="/defaultschedule/august">August</a>
                    <a class="dropdown-item" href="/defaultschedule/september">September</a>
                    <a class="dropdown-item" href="/defaultschedule/october">October</a>
                    <a class="dropdown-item" href="/defaultschedule/november">November</a>
                    <a class="dropdown-item" href="/defaultschedule/december">December</a>
                </div>
            </div>

              <h4>Month of July <span class="text-muted" style="font-size: 12px">(Default Schedule)</span></h4>

              <table class="table table-bordered post-table col-lg-6 col-8">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center text-danger">1st Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>ACCOUNTING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ADMIN OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>BUDGET OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CASHIER ADMIN</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CHIEF OF CLINICS</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>FINANCE OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>IASO</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>SECURITY OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>RBC</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>IM OFFICE (TRAINING ROOM 7)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered post-table col-lg-6 col-8">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center text-danger">2nd Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>OB OFFICE (TRAINING ROOM 5)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>LEGAL OFFICE (TRAINING ROOM 6)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>TRAINING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PETRU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PERSONNEL</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PROCUREMENT</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PROPERTY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PROPERTY STOCK ROOM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MEDICAL RECORD</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CECAP</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered post-table col-lg-6 col-8">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center text-danger">3rd Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>DIETARY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ENGINEERING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>HOUSEKEEPING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>LAUNDRY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHIC HOUSEKEEPING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>DOH BOTICA</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CATHLAB</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>IHOMS</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 12</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 12 OPD-CBS</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered post-table col-lg-6 col-8">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center text-danger">4th Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>Department</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>LABORATORY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHIC MAIN OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CCU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CCU EXTENSION</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ICU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>EMERGENCY COMPLEX</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ORTHOPEDIC OFFICE (ER GROUNDFLOOR)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>HOLDING AREA (ER)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PINK CENTER</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>REHAB</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>RTU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
                

        </div>
        @include('layouts.activities')
        
    </div>


    @endsection