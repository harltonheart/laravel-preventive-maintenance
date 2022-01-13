@extends('layouts.app')

@section('content')
<div class="container">
    <center><u><h3 class="mt-5">PREVENTIVE MAINTENANCE</h3></u></center>
    <center><p>INTEGRATED HOSPITAL OPERATIONS MANAGEMENT SYSTEM</p></center>
    <div class="mt-5">
            <h3 class="ml-4 mb-4">Add User</h3>
            <div class="container card shadow-lg">
                <form method="post" action="{{ route('store.computer')}}" class="form-group form-prevent">
                    @csrf
                        <div class="row p-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text"  
                                            name="year" 
                                            class="form-control form-control-sm ml-2 yearonly datepicker1 @error('year') is-invalid @enderror" 
                                            style="width: 150px"
                                            placeholder="Set Year Created"
                                            autocomplete="off">
                                        
                                        @error('year')
                                            <span class="invalid-feedback ml-2" role="alert">
                                                <strong style="width: 150px; display:block !important;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                        
                                </div>
                                
                                <div class="row p-2">

                                    <div class="col-lg-6">
                                        <label for="departments" class="pt-2">Department:</label>

                                            <select id="departments" name="departments" class="form-control @error('departments') is-invalid @enderror" style="width: 100%;">
                                                <option></option>
                                                    @foreach ($departments as $dept)
                                                        <option value="{{$dept->id}}">{{$dept->department}}</option>
                                                    @endforeach
                                            </select>  
                                            
                                        @error('departments')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            <div class="border-error border border-danger">
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="col-lg-6">
                                        <label for="location" class="pt-2">Location:</label>
                                        <input type="text" 
                                            name="location" 
                                            id="location" 
                                            class="form-control form-control-sm @error('location') is-invalid @enderror" 
                                            placeholder="location"
                                        > 
                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                

                                <div class="row p-2">
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">MR TO:</label>
                                        <input type="text" name="mr_to" class="form-control form-control-sm"
                                             placeholder="Owned by">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Initial Cost:</label>
                                        <input type="text" name="initial_cost" class="form-control form-control-sm"
                                            placeholder="Aa...">
                                    </div>
                                </div>

                                <div class="row p-2">
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Computer Name:</label>
                                        <input type="text" 
                                            name="pc_name" 
                                            class="form-control form-control-sm @error('pc_name') is-invalid @enderror"
                                            placeholder="Computer name">

                                        @error('pc_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Deployment Date</label>
                                        <input type="text" name="deploy_date" class="form-control form-control-sm"
                                            placeholder="deployment date">
                                    </div>
                                </div>

                                <div class="row p-2 mb-2">
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">IP ADDRESS:</label>
                                        <input type="text" 
                                            name="ip_address" 
                                            class="form-control form-control-sm @error('ip_address') is-invalid @enderror"
                                            placeholder="IP address">
                                        @error('ip_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Serial No.:</label>
                                        <input type="text" name="serial" class="form-control form-control-sm"
                                            placeholder="Serial #...">
                                    </div>
                                </div>

                                <div class="row p-2 mb-2">
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">IP Settings:</label>
                                            <select name="ip_settings" class="custom-select custom-select-sm my-1 mr-sm-2 @error('ip_settings') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                <option value="" disabled selected hidden>Set IP</option>
                                                <option value="DHCP">DHCP</option>
                                                <option value="STATIC">STATIC</option>
                                                <option value="DUAL_IP">DUAL IP</option>
                                            </select>
                                        @error('ip_settings')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary mx-4 mb-3 button-prevent">Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                </form>
        </div>
        @include('layouts.activities')
    </div>
</div>
@endsection
