<!-- Modal -->
<div class="modal fade" id="postcreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Department</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="createpost" method="post" action="/computer/{{ $computer->id }}/posts">
                    @csrf
                    <!-- Hardware -->
                        <center class="py-2"><h3>Hardware</h3></center>
                    <div class="container card shadow-lg">
                        <div class="row p-3 mb-3">
                            <div class="col-lg-12"> 
                                <label for="" class="pt-2 font-weight-bold mb-4">Brand Type</label><br>
                                <div class="d-flex justify-content-between">
                                    <label for="">Mouse:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="mouse"
                                        autofocus required>
                                </div>
                                    

                                <label for="" class="">Keyboard: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="kboard"
                                        autofocus required>
                                </div>
                                


                                <label for="" class="">Monitor: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="monitor"
                                        autofocus required>
                                </div>
                                


                                <label for="" class="">AVR/UPS: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="avr_ups">
                                </div>



                                <label for="" class="">Printer Type: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="printer">
                                </div>



                                <label for="" class="">PC Unit: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="cpu"
                                        autofocus required>
                                </div>



                                <label for="" class="">Barcode Gun: </label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="bargun"
                                        autofocus>
                                </div>


                            </div>
                        </div>
                    </div>


            
                    <!-- {{-- Software --}} -->
                    <center class="py-2"><h3>Software</h3></center>
                    <div class="container card shadow-lg">

                        <div class="row p-3">
                            <div class="col-lg-12">

                                    <label for="" class="pt-2 font-weight-bold mb-4">Brand Type</label><br>
                                    <div class="d-flex justify-content-between">
                                        <label for="">System Boot:</label>
                                    </div>
                                    <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Aa..." aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        name="sysboot">
                                    </div>



                                    <label for="" class="">Operating System: </label>
                                    <div class="input-group">
                                            <select id="okna" name="os" class="form-control form-control-sm" style="width: 100%;" autofocus required>
                                                <option disabled selected hidden>Select OS</option>
                                                <option value="WINDOWS XP">WINDOWS XP</option>
                                                <option value="WINDOWS 7">WINDOWS 7</option>
                                                <option value="WINDOWS 8">WINDOWS 8</option>
                                                <option value="WINDOWS 8.1">WINDOWS 8.1</option>
                                                <option value="WINDOWS 10">WINDOWS 10</option>
                                                <option value="WINDOWS 11">WINDOWS 11</option>
                                            </select>
                                    </div>


                                    <label for="" class="">Anti-Virus: </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm rounded-right"
                                            placeholder="Aa..." aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm"
                                            name="antivirus">
                                    </div>



                                    <label for="" class="">Microsoft Office: </label>
                                    <div class="input-group">
                                        <select class="msofficeselect2 form-control form-control-sm rounded-right" multiple="multiple" name="bizboxselect" style="width: 100%">
                                            <option></option>
                                            <option value=" WORD">WORD</option>
                                            <option value=" EXCEL">EXCEL</option>
                                            <option value=" POWERPOINT">POWERPOINT</option>
                                            <option value=" VISIO">VISIO</option>
                                        </select>
                                        <input type="hidden" name="ms_office" id="getmsoffice">
                                    </div>



                                    <label for="" class="">Bizbox HIS: </label>
                                    <div class="input-group">
                                        <select id="okna" name="his" class="form-control form-control-sm" style="width: 100%;">
                                            <option disabled selected hidden>HIS</option>
                                            <option value="OK">OK</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>

                                    <label for="" class="">Bizbox MMS: </label>
                                    <div class="input-group">
                                        <select id="okna" name="mms" class="form-control form-control-sm" style="width: 100%;">
                                            <option disabled selected hidden>MMS</option>
                                            <option value="OK">OK</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>

                                    <label for="" class="">Bizbox EMR: </label>
                                    <div class="input-group">
                                        <select id="okna" name="emr" class="form-control form-control-sm" style="width: 100%;">
                                            <option disabled selected hidden>EMR</option>
                                            <option value="OK">OK</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>



                                    <label for="" class="">Queuing System: </label>
                                    <div class="input-group">
                                        <select id="okna" name="queui_sys" class="form-control form-control-sm" style="width: 100%;">
                                            <option disabled selected hidden>Queuing System</option>
                                            <option value="OK">OK</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>



                                    <label for="" class="">WebLis: </label>
                                    <div class="input-group">
                                        <select id="okna" name="weblis" class="form-control form-control-sm" style="width: 100%;">
                                            <option disabled selected hidden>Weblis</option>
                                            <option value="OK">OK</option>
                                            <option value="N/A">N/A</option>
                                        </select>
                                    </div>

                            </div>
                        </div>
                    </div>
                </form>
                <div class="p-3">
                    <input type="submit" class="btn btn-sm btn-primary mr-auto" form="createpost" />
                </div>
            </div>    
        </div>  
    </div>
</div>