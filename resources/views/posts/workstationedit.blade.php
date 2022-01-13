<!-- Modal -->
<div class="modal fade" id="postedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Hardware/Software for : {{$computer->pc_name}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="edihardsoftform" method="post" action="{{ route('update.post', $computer->id ) }}">
                    @csrf
                    @method('PATCH')
                    <!-- Hardware -->
                        <center class="py-2"><h3>Hardware</h3></center>
                    <div class="container card shadow-lg">
                        <div class="row p-3 mb-3">
                            <div class="col-lg-12"> 
                                <div class="d-flex justify-content-between">
                                    <label for="mouse">Mouse:</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="mouse" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('mouse') ?? $computer->posts->mouse }}"
                                        name="mouse"
                                        autofocus required>
                                </div>
                                    
                                <div class="d-flex justify-content-between">
                                    <label for="" class="">Keyboard: </label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="keyboard" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('kboard') ?? $computer->posts->kboard }}"
                                        name="kboard"
                                        autofocus required>
                                </div>
                                

                                <div class="d-flex justify-content-between">
                                    <label for="" class="">Monitor: </label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="monitor" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('monitor') ?? $computer->posts->monitor }}"
                                        name="monitor"
                                        autofocus required>
                                </div>
                                

                                <div class="d-flex justify-content-between">
                                    <label for="" class="">AVR/UPS: </label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="avr or ups" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('avr_ups') ?? $computer->posts->avr_ups }}"
                                        name="avr_ups">
                                </div>


                                <div class="d-flex justify-content-between">
                                    <label for="" class="">Printer Type: </label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="printer" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('printer') ?? $computer->posts->printer }}"
                                        name="printer">
                                </div>


                                <div class="d-flex justify-content-between">
                                    <label for="" class="">PC Unit: </label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="CPU" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('cpu') ?? $computer->posts->cpu }}"
                                        name="cpu"
                                        autofocus required>
                                </div>


                                <div class="d-flex justify-content-between">
                                    <label for="" class="">Barcode Gun: </label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="CPU" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('bargun') ?? $computer->posts->bargun }}"
                                        name="cpu"
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
                                    <div class="d-flex justify-content-between">
                                        <label for="">System Boot:</label>
                                    </div>
                                    <div class="input-group">
                                    <input type="text" class="form-control form-control-sm rounded-right"
                                        placeholder="Boot System" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm"
                                        value="{{ old('sysboot') ?? $computer->posts->sysboot }}"
                                        name="sysboot">
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">Operating System: </label>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm rounded-right"
                                            placeholder="OS" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm"
                                            value="{{ old('os') ?? $computer->posts->os }}"
                                            name="os"
                                            autofocus required>

                                            <select id="okna" name="os" class="form-control form-control-sm" autofocus>
                                                <option value="WINDOWS XP" {{$computer->posts->os == "WINDOWS XP" ? 'selected' : ''}}>WINDOWS XP</option>
                                                <option value="WINDOWS 7" {{$computer->posts->os == "WINDOWS 7" ? 'selected' : ''}}>WINDOWS 7</option>
                                                <option value="WINDOWS 8" {{$computer->posts->os == "WINDOWS 8" ? 'selected' : ''}}>WINDOWS 8</option>
                                                <option value="WINDOWS 8.1" {{$computer->posts->os == "WINDOWS 8.1" ? 'selected' : ''}}>WINDOWS 8.1</option>
                                                <option value="WINDOWS 10" {{$computer->posts->os == "WINDOWS 10" ? 'selected' : ''}}>WINDOWS 10</option>
                                                <option value="WINDOWS 11" {{$computer->posts->os == "WINDOWS 11" ? 'selected' : ''}}>WINDOWS 11</option>
                                            </select>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">Anti-Virus: </label>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm rounded-right"
                                            placeholder="Antivirus" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm"
                                            value="{{ old('antivirus') ?? $computer->posts->antivirus }}"
                                            name="antivirus">
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">Microsoft Office: </label>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm rounded-right"
                                            placeholder="WORD/EXCEL/PP/VISIO..."aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm"
                                            value="{{ old('ms_office') ?? $computer->posts->ms_office }}"
                                            name="ms_office">
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">Bizbox HIS: </label>
                                    </div>
                                    <div class="input-group">
                                        <select id="okna" name="his" class="form-control form-control-sm" autofocus>
                                            <option value="OK" {{$computer->posts->his == "OK" ? 'selected' : ''}}>OK</option>
                                            <option value="N/A" {{$computer->posts->his == "N/A" ? 'selected' : ''}}>N/A</option>
                                        </select>
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">Bizbox MMS: </label>
                                    </div>
                                    <div class="input-group">
                                        <select id="okna" name="mms" class="form-control form-control-sm" autofocus>
                                            <option value="OK" {{$computer->posts->mms == "OK" ? 'selected' : ''}}>OK</option>
                                            <option value="N/A" {{$computer->posts->mms == "N/A" ? 'selected' : ''}}>N/A</option>
                                        </select>
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">Bizbox EMR: </label>
                                    </div>
                                    <div class="input-group">
                                        <select id="okna" name="emr" class="form-control form-control-sm" autofocus>
                                            <option value="OK" {{$computer->posts->emr == "OK" ? 'selected' : ''}}>OK</option>
                                            <option value="N/A" {{$computer->posts->emr == "N/A" ? 'selected' : ''}}>N/A</option>
                                        </select>
                                    </div>


                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">Queuing System: </label>
                                    </div>
                                    <div class="input-group">
                                        <select id="okna" name="queui_sys" class="form-control form-control-sm" autofocus>
                                            <option value="OK" {{$computer->posts->queui_sys == "OK" ? 'selected' : ''}}>OK</option>
                                            <option value="N/A" {{$computer->posts->queui_sys == "N/A" ? 'selected' : ''}}>N/A</option>
                                        </select>
                                    </div>
                           
                                    
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="">WebLis: </label>
                                    </div>
                                    <div class="input-group">
                                        <select id="okna" name="weblis" class="form-control form-control-sm" autofocus>
                                                <option value="OK" {{$computer->posts->weblis == "OK" ? 'selected' : ''}}>OK</option>
                                                <option value="N/A" {{$computer->posts->weblis == "N/A" ? 'selected' : ''}}>N/A</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" form="edihardsoftform">Save Details</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>    
        </div>  
    </div>
</div>