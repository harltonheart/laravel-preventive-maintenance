@extends('layouts.app')
    
    @section('title')
    Schedule (June)
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

              <h4>Month of June <span class="text-muted" style="font-size: 12px">(Default Schedule)</span></h4>

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
                        <th>ICC</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>KAAMBAG</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>KMC UNIT</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>SP GROUND</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>SP 2ND FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>SP 3RD FLOOR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>GENERAL SURGERY LIBRARY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ANESTESIA OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>OPERATING ROOM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>OR CUSTODIAN</th>
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
                        <th>PACU 1ST FLOOR (OR)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PACU 2ND FLOOR (OR)</th>
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
                        <th>CHIEF OF HOSPITAL</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CHIEF OF NURSE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>INFORMATION</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>OSM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>LEGAL</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ADMITTING</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHARMACY ER</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHARMACY MAIN</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
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
                        <th>PHARMACY OR</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>NEURO SURGICAL OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WARD 11</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHIC ANNEX A</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ANIMAL BITE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CASHIER OPD</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>CHILD SURVIVAL</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ECG / EEG</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>ENDOSCOPY</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>EYE CENTER</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>EYE CENTER OR</th>
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
                        <th>FAMED OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>LABORATORY OPD</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHILHEALTH OPD</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>MEDICAL RECORD OPD</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>OPTHA OFFICE</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>PHU</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>STATION 1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>STATION 2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>STATION 3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>STATION 4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>WELLNESS</th>
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