@extends('layouts.app')
    
    @section('title')
    Schedule (November)
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

              <h4>Month of November <span class="text-muted" style="font-size: 12px">(Default Schedule)</span></h4>

              <table class="table table-bordered post-table col-lg-6 col-8">
                <thead>
                    <tr>
                        <th colspan="4" class="text-center text-danger">1st Week
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th>DEPARTMENT</th>
                        <td>P</td>
                        <td>A</td>
                        <td>D</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>MANAGEMENT SYSTEM UNIT</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>EMED OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>SURGICAL ONCOLOGY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ENT OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ETHICS OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MEDICAL RECORD SATTELITE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MEDICAL SOCIAL WORKER</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>BILLING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CENTRAL STERILE SUPPLY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MALASAKIT</th>
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
                        <th>PHIC MAIN OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CASHIER MAIN BUILDING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHILHEALTH WARD</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 9</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ND GROUND FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ND 2ND FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ND 3RD FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ND 4TH FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ND EXTENSION</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>RADIOLOGY</th>
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
                        <th>LABOR ROOM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>OB-OR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>NEWBORN</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>NICU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>NICU ILI</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>RENAL</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>SHOCKWAVE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>UROLOGY OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 10 ADULT</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 10 PEDIA</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>EREID UNIT</th>
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
                        <th>ADMITTING LRU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>BILLING LRU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MSW LRU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>LABOR ROOM EXTENSION</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 7 GROUND FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 7 2ND FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 7 3RD FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PEDIA OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 1 HRU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 1 LRU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHIC ANNEX B</th>
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