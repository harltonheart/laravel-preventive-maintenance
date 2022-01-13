<!-- Modal -->
<div class="modal fade" id="remarksModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FINDINGS AND CORRECTIVE ACTIONS:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="remarksform" method="post" action="/computer/{{$computer->id}}/remark">
          @csrf
            <div class="form-group">
                <label for="" class="col-form-label">Date: </label>
                      <input type="text"  
                        name="date_findings" 
                        class="form-control form-control-sm datepicker3" 
                        style="width: 150px"
                        placeholder="Select Date..."
                        autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="" class="col-form-label">Findings: </label>
                <input type="text" 
                        class="form-control" 
                        name="findings" 
                        autocomplete="findings" autofocus
                        placeholder="findings..."
                        >
            </div>
            <div class="form-group">
                <label for="" class="col-form-label">Recomended and Corrective Actions: </label>
                  <textarea type="text" 
                      class="form-control form-control-sm"  
                      name="recommended" 
                      autofocus
                      placeholder="actions..."
                      rows="5" 
                      cols="40"
                      ></textarea>
            </div>
            <div class="form-group">
                <label for="" class="col-form-label">Tickets: </label>
                <input type="text" 
                        class="form-control" 
                        name="ticket" 
                        autocomplete="ticket" autofocus
                        placeholder="tickets..."
                        >
            </div>
            
        </form>
      </div> {{-- end of modal body --}}
      <div class="modal-footer">
        <input type="submit" class="btn btn-sm btn-primary ml-auto" form="remarksform" />
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>