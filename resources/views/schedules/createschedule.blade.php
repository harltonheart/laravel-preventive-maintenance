@extends('layouts.app')
    
    @section('title')
    Create New Schedule
    @endsection

    @section('content')
    <div class="wrap flex-grow-1 ml-4 mt-3">
        <h3 class="text-center mb-5">Preventive Maintenance Schedule</h3>

        <h3>Create New Schedule</h3>
        <h4>(Month and Year)</h4>

        <form action="{{ route('store.schedule')}}" method="POST" class="form-prevent">
            @csrf
            <div class="row w-50 mt-4">
                <div class="col">
                    <div class="form-group">
                        <label for="">Month:</label>
                        <select class="custom-select w-50 d-block" placeholder="Select month..." name="month">
                            <option selected value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="septemeber">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">Decemeber</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Year:</label>
                        <input type="text" class="form-control w-50 datepicker4" placeholder="Select year..." name='year'>
                    </div>
                    <button type="submit" class="btn btn-primary button-prevent">Submit <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <span class="text-muted ml-2" style="font-size: 10px">(Create as default schedule)</span>
                </div>
            </div>
        </form>


    </div>

    @endsection