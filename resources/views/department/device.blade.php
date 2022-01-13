
<style>
    .cursor-edit, .cursor-delete{
        cursor: pointer;
    }
    .cursor-edit:hover{
        background-color: #28a745;
    }
    .cursor-delete:hover{
        background-color: #b53232;
    }
</style>
<h5>Devices:</h5>
@if($dept->devices->count())
    
    <div class="row">
            @foreach($dept->devices as $devices)
                <div class="border border-secondary rounded m-3 p-2 col-lg-5 col-md-8 col-sm-12" style="max-width: 18rem;">
                    <div class="">{{$devices->type}}:{{--type --}}
                        @if(Auth::user()->username !== 'guest')
                            <div class="float-right">
                                <button type="button" class="btn btn-secondary py-0 px-1 btn-sm dropdown-toggle" id="drop{{$devices->id}}" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-wrench mt-1"></i></button>
                                <div class="dropdown-menu" aria-labelledby="drop{{$devices->id}}">
                                    <a class="btn btn-sm cursor-edit dropdown-item" role="button" data-toggle="modal" data-target="#editDevice{{$devices->id}}">Edit</a>
                                    <a class="btn btn-sm cursor-delete dropdown-item" role="button" data-toggle="modal" data-target="#deleteDevice{{$devices->id}}">Delete</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <hr> 
                    <div class="text-secondary">
                        <h5 class="">{{$devices->brand_name}}</h5> {{-- brand name--}}
                        <label for="">Device name:</label> <span>{{$devices->device_name}}</span><br> {{--device name--}}
                        <label for="">IP address:</label> <span>{{$devices->ip_address}}</span><br>
                        <label for="">No. of ports:</label> <span>{{$devices->port}}</span><br>
                        <label for="">Source location:</label> <span>{{$devices->source}}</span><br>
                        <label for="">Serial No.:</label> <span>{{$devices->serial}}</span><br>
                        <label for="">Status:</label> @if($devices->active == '1')<span class="text-success">Active</span> @else <span class="text-danger">Defective</span> @endif
                    </div>
                </div>
            @endforeach
    </div>
    @if(Auth::user()->username !== 'guest')
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#deviceModal">Add New Devices</button>
    @endif
@else
    <div class="text-danger d-inline rounded mt-3" style="font-size: 12px;">
        No Device available
    </div>
    <br>
    @if(Auth::user()->username !== 'guest')
        <button type="button" class="btn btn-primary btn-sm mt-3" data-toggle="modal" data-target="#deviceModal">Add New Devices</button>
    @endif
@endif

