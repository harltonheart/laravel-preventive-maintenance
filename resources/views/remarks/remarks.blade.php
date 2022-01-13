

<label class="mt-2 ml-2">FINDINGS AND CORRECTIVE ACTIONS: </label>


<table class="table table-bordered table-striped post-table col-8">
    <thead>
        <tr>
            <th>DATE</th>
       
            <th>FINDINGS</th>
       
            <th>RECOMMENDED CORRECTIVE ACTION</th>
        
            <th class="text-nowrap">TICKET NUMBER</th>

            @if(Auth::user()->username !== 'guest')
                <th></th>
            @endif
        </tr>
    </thead>
    <tbody>
        @if ($computer->remarks)
            @foreach ($computer->remarks as $remark)
                <tr>
                    <td style="padding: 6px;">{{ date('m/d/Y', strtotime($remark->date_findings)) }}</td>
                    <td style="padding: 6px;">{{ $remark->findings }}</td>
                    <td style="padding: 6px;"><span class="text-truncate d-inline-block" style="max-width: 230px;">{{ $remark->recommended }}</span> 
                        <button type="button" class="btn btn-sm text-primary float-right" data-toggle="modal" data-target="#showRecommend{{$remark->id}}"><i class="fas fa-eye"></i></button>
                    </td>
                    <td style="padding: 6px;">{{ $remark->ticket }}</td>
                    @if(Auth::user()->username !== 'guest')
                        <td style="padding: 6px;" class="text-nowrap">
                                <button type="button" class="btn btn-success p-0 px-1" data-toggle="modal" data-target="#editRemark{{$remark->id}}" title="Edit"><i class="fas fa-pencil-alt" style="width: 10px; padding: 0;"></i></button>
                                <button type="button" class="btn btn-danger p-0 px-1" data-toggle="modal" data-target="#deleteRemarks{{$remark->id}}" title="Delete"><i class="fas fa-trash-alt" style="width: 10px; padding: 0;"></i></button>
                        </td>
                    @endif
                </tr> 
                
            @endforeach
        @endif
        
        <tr>
            <td style="padding: 6px;"><small class="text-white"> .</small></td>
            <td></td>
            <td></td>
            <td></td>
            @if(Auth::user()->username !== 'guest')
                <td></td>
            @endif
        </tr>
        
    </tbody>
</table>
@if(Auth::user()->username !== 'guest')
    <p class="card-text">
        <button class="btn btn-sm btn-info" type="submit" data-toggle="modal" data-target="#remarksModal">
            Add Findings
        </button>
    </p>
@endif
