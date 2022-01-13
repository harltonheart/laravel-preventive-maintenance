<div class="row ml-1">
    @foreach ($comp as  $computer)
        <div class="m-3 p-2 col-3 hovs">
            <a href="/computer/{{$computer->id}}" class="nounderline">
                <div class="text-secondary">
                    <h5 class="">{{$computer->pc_name}}</h5>
                    <span>IP address:</span> <span>{{$computer->ip_add}}</span><br>
                    <span>Status:</span> @if($computer->active == '1')<span class="text-success">Active</span>@else <span class="text-danger">Inactive</span> @endif <br>
                </div>
            </a>
        </div>
    @endforeach
</div>