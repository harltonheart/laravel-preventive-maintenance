<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped summary-table" id="deptitle">
        <thead>
        <tr>
            <th colspan="4" class="text-nowrap">Department: {{$dept->department}}</th>
            <th colspan="8">TYPE OF EQUIPMENT / ITEM: WORKSTATION</th>
            <th colspan="4">
            
                
                <div class="d-flex">
                    <div class="">
                        <form action="/summary/{{ $dept->id }}/fetch_year" method="get" class="form-inline">
                            <div class="input-group input-group-sm mb-2">       
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Year:</span>
                                </div>
                                <input type="text" 
                                    name="yearonly" 
                                    class="form-control yearonly datepicker2" 
                                    autocomplete="off"
                                    placeholder="Select...">
                                <button type="submit" class="btn btn-sm btn-info ml-1"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="ml-1">
                        <form action="/summary/{{ $dept->id }}" method="get" class="form-inline">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-redo"></i></button>
                        </form>
                    </div>
                </div>
                
            
            </th>
        </tr>
        </thead>
        <thead>
        <tr id="monthquarters">
            <th rowspan="2" colspan="4" id="pcName">Computer name</th> 
            <th colspan="3" id="quarterstatus">1st Quarter</th>
            <th colspan="3" id="quarterstatus">2nd Quarter</th>
            <th colspan="3" id="quarterstatus">3rd Quarter</th>
            <th colspan="3" id="quarterstatus">4th Quarter</th>
        </tr> 
        <tr id="checkedDate"> 
            
        <td>Checked date</td>
        <td>Checked by</td>
        <td>Acknowledge date</td>
        <td>Checked date</td>
        <td>Checked by</td>
        <td>Acknowledge date</td>
        <td>Checked date</td>
        <td>Checked by</td>
        <td>Acknowledge date</td>
        <td>Checked date</td>
        <td>Checked by</td>
        <td>Acknowledge date</td>
            
        </tr>
        </thead>
        <tbody id="eachuser">
            @if ($dept->computers->count())
                @include('department.yearonly')
            @else
            
                <tr>
                <td colspan="16">
                    <center><h5 class="text-danger">No Preventive found !</h5></center>
                    @if(Auth::user()->username !== 'guest')
                    <br>
                        <center><a href="/computer" class="btn btn-primary btn-sm">Add New Preventive</a>
                    @endif
                </td>
                </tr>

            @endif

        {{-- Separate --}}
        <tr>
            <td colspan="16">Check appropriate box with ( &check; ) If Maintenance activity is performed ( &cross; ) mark if not.
            (Please see separate "Preventive Maintenance (Workstation)" Sheet.)</td>
        </tr>
        </tbody>
    </table>
</div>

