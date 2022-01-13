@if ($comp->count())

    @foreach ($comp as  $computer)
                        
        <tr>
        <td id="useinc">{{$loop->iteration}}</td>
        <td colspan="3"><a class="text-primary" href="/computer/{{$computer->id}}">{{$computer->pc_name}}</a></td>

            @if(empty($computer->first_created))
                <td id="checkdate"></td>
                <td></td>
                <td></td>
            @else
                <td id="checkdate">{{$computer->first_created}}</td>
                <td></td>
                <td></td>
            @endif
        
            @if(empty($computer->second_created))
            <td id="checkdate"></td>
                <td></td>
                <td></td>
            @else
                <td id="checkdate">{{$computer->second_created}}</td>
                <td></td>
                <td></td>
            @endif
        
            @if(empty($computer->third_created))
                <td id="checkdate"></td>
                <td></td>
                <td></td>
            @else
                <td id="checkdate">{{$computer->third_created}}</td>
                <td></td>
                <td></td>
            @endif
        

            @if(empty($computer->forth_created))
                <td id="checkdate"></td>
                <td></td>
                <td></td>
            @else
                <td id="checkdate">{{$computer->forth_created}}</td>
                <td></td>
                <td></td>
            @endif
        </tr>

    @endforeach

@else
    <tr>
        <td colspan="16">
            <center><h5 class="text-danger">No Preventive result!</h5></center>
        </td>
    </tr>
@endif


