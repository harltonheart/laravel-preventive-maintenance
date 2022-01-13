@extends('layouts.app')

@section('title')
{{$computer->pc_name}} (Edit)
@endsection

@section('content')
<div class="container testbg">
    <a class="btn btn-primary btn-sm" href="/computer/{{$computer->id}}"><i class="fas fa-hand-point-left"></i> Back</a>
    <div class="mt-2">
            <h1 class="ml-4 mb-4 mt-3">Edit details for <a class="text-primary" href="/computer/{{$computer->id}}">{{$computer->pc_name}}</a></h1>
            <div class="container card shadow-lg">
                
                <form method="post" action="{{ route('update.computer', $computer->id ) }}" class="form-group form-prevent">
                    @csrf
                    @method('PATCH')
                        <div class="row p-3">
                            <div class="col-lg-12">

                                <div class="row">
                                    <div class="col-lg-6 d-flex">
                                        <label for="year" class="ml-2 pt-1">Year Created:</label> 
                                        <input type="text"  
                                            name="year" 
                                            id="datepicker"
                                            class="form-control form-control-sm ml-2 yearonly datepicker2 @error('year') is-invalid @enderror" 
                                            style="width: 150px"
                                            placeholder="Set Year Created"
                                            value="{{ old('year') ?? $computer->year }}"
                                            autocomplete="off">
                                        
                                        @error('year')
                                            <span class="invalid-feedback ml-2" role="alert">
                                                <strong style="width: 150px; display:block !important;">{{ $message }}</strong>
                                            </span>
                                        @enderror


                                        <label for="active" class="ml-2 pt-1">Status:</label> 
                                        <select name="active" class="form-control form-control-sm ml-2" autofocus style="width: 150px;">
                                            <option value="1" {{$computer->active == '1' ? 'selected' : ''}}>active</option>
                                            <option value="0" {{$computer->active == '0' ? 'selected' : ''}}>Inactive</option>
                                        </select>

                                    </div>
                                        
                                </div>

                                <div class="row p-2">
                                    <div class="col-lg-6">
                                        <label for="department_id" class="pt-2">Department:</label>  
                                        <select id="department_id" name="department_id" class="form-control form-control-sm department_edit" autofocus required>
                                                @foreach ($department_id as $dept)
                                                    <option value="{{$dept->id}}" {{$computer->departments->id == $dept->id ? 'selected' : ''}}>{{$dept->department}}</option>
                                                @endforeach
                                        </select>
                                        @error('departments')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="location" class="pt-2">Location:</label>
                                        <input type="text" 
                                            name="location" 
                                            id="location" 
                                            class="form-control form-control-sm @error('location') is-invalid @enderror" 
                                            placeholder="location"
                                            value="{{ old('location') ?? $computer->location }}"
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
                                        <input type="text" 
                                            name="mr_to" 
                                            class="form-control form-control-sm"
                                            placeholder="Owned by"
                                            value="{{ old('mr_to') ?? $computer->mr_to }}"
                                            >
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Initial Cost:</label>
                                        <input type="text" 
                                            name="initial_cost" 
                                            class="form-control form-control-sm"
                                            placeholder="Aa..."
                                            value="{{ old('initial_cost') ?? $computer->initial_cost }}"
                                            >
                                    </div>
                                </div>

                                <div class="row p-2">
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Computer Name:</label>
                                        <input type="text" 
                                            name="pc_name" 
                                            class="form-control form-control-sm @error('pc_name') is-invalid @enderror"
                                            placeholder="Computer name"
                                            value="{{ old('pc_name') ?? $computer->pc_name }}"
                                            >
                                        @error('pc_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Deployment Date</label>
                                        <input type="text" 
                                            name="deploy_date" 
                                            class="form-control form-control-sm"
                                            placeholder="deployment date"
                                            value="{{ old('deploy_date') ?? $computer->deploy_date }}"
                                            >
                                    </div>
                                </div>

                                <div class="row p-2 mb-2">
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">IP ADDRESS:</label>
                                        <input type="text" 
                                            name="ip_add" 
                                            class="form-control form-control-sm @error('ip_add') is-invalid @enderror"
                                            placeholder="IP address"
                                            value="{{ old('ip_add') ?? $computer->ip_add }}"
                                            >
                                        @error('ip_add')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">Serial No.:</label>
                                        <input type="text" 
                                            name="serial" 
                                            class="form-control form-control-sm"
                                            placeholder="Serial #..."
                                            value="{{ old('serial') ?? $computer->serial }}"
                                            >
                                    </div>
                                </div>

                                <div class="row p-2 mb-2">
                                    <div class="col-lg-6">
                                        <label for="" class="pt-2">IP Settings:</label>
                                            <select name="ip_settings" class="custom-select custom-select-sm my-1 mr-sm-2 @error('ip_settings') is-invalid @enderror" id="inlineFormCustomSelectPref">
                                                <option value="" {{$computer->ip_settings == "" ? 'selected' : ''}}></option>
                                                <option value="DHCP" {{$computer->ip_settings == "DHCP" ? 'selected' : ''}}>DHCP</option>
                                                <option value="STATIC" {{$computer->ip_settings == "STATIC" ? 'selected' : ''}}>STATIC</option>
                                                <option value="DUAL_IP" {{$computer->ip_settings == "DUAL_IP" ? 'selected' : ''}}>DUAL_IP</option>
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