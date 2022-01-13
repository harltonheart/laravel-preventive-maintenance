<!-- Modal edit remarks-->
@foreach ($computer->remarks as $remark)
  <div class="modal fade" id="editRemark{{$remark->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Findings</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form method="post" action="{{ route('update.remark', $remark->id )}}">
              @csrf
              @method('PATCH')
                <div class="form-group">
                    <label for="" class="col-form-label">Date: </label>
                    
                          <input type="text"  
                            name="date_findings" 
                            class="form-control form-control-sm remarksedit" 
                            style="width: 150px"
                            value="{{ old('date_findings') ?? $remark->date_findings }}"
                            placeholder="Select Date..."
                            autocomplete="off" required><small>yyyy-mm-dd</small>
                            
                </div>
                
                <div class="form-group">
                    <label for="findings" class="col-form-label">Findings: </label>
                    <input type="text" 
                            id="findings" 
                            class="form-control form-control-sm" 
                            name="findings" 
                            value="{{ old('findings') ?? $remark->findings }}"
                            autofocus
                            >
                </div>
                <div class="form-group">
                    <label for="recommended">Recommended and Corrective Actions:</label>
                    <textarea type="text" 
                            id="recommended" 
                            class="form-control form-control-sm"  
                            name="recommended" 
                            autofocus
                            rows="5" 
                            cols="40"
                            >{{ old('recommended') ?? $remark->recommended }}</textarea>
                </div>

                <div class="form-group">
                  <label for="ticket" class="col-form-label">Ticket No: </label>
                  <input type="text" 
                          id="ticket" 
                          class="form-control form-control-sm" 
                          name="ticket" 
                          value="{{ old('ticket') ?? $remark->ticket }}"
                          autofocus
                          >
              </div>
          

              </div> {{-- end of modal body --}}
              <div class="modal-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Save Remarks</button>
                  <button type="button" class="btn btn-sm btn-secondary float-right" data-dismiss="modal">Close</button>
              </div> 
          </form>
        </div>
      </div>
    </div>
  @endforeach



  @foreach ($computer->remarks as $remark)
  <!-- Modal Delete remarks-->
  <div class="modal fade" id="deleteRemarks{{$remark->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="exampleModalLabel">{{$remark->findings}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-dark">Are you sure you want to remove this Findings ?</p>
          <span>Ticket No: {{$remark->ticket}}</span>
        </div>
        <div class="modal-footer">
          <form method="post" action="/remarksdelete/{{$remark->id}}">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-sm btn-primary">Yes</button>
          </form>  
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
<link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>