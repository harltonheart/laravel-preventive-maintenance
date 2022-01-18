
    {{-- HARDWARE --}}
    <table class="table table-bordered mt-4 table-striped post-table">
        <thead>
            <tr id="hardwareworkstation">
                <th colspan="16">HARDWARE
                    <label for="" class="float-left font-weight-light my-auto">Created {{$computer->posts->created_at->diffForHumans()}}</label>
                    <label for="" class="float-right font-weight-light my-auto">{{$computer->posts->created_at->format('m/d/Y')}}</label>
                </th>
            </tr>
            
            <tr id="monthquarters">
                <th rowspan="2" colspan="4" id="description">Description</th>
                <th rowspan="2" colspan="4" id="brandtype">Brand / type</th>
                <th colspan="2" id="quarterstatus">1st Quarter</th>
                <th colspan="2" id="quarterstatus">2nd Quarter</th>               
                <th colspan="2" id="quarterstatus">3rd Quarter</th>
                <th colspan="2" id="quarterstatus">4th Quarter</th>
            </tr> 

            
            <tr id="checkedStatus"> 
                <td>OK</td>
                <td>DEF</td>
                <td>OK</td>
                <td>DEF</td>
                <td>OK</td>
                <td>DEF</td>
                <td>OK</td>
                <td>DEF</td>
            </tr>
        </thead>
        <tbody id="eachitem">

          {{-- Mouse --}}
          <tr>
            <th colspan="4">Mouse</th>
                @if($computer->posts->mouse == '')
                    <td colspan="4" id="itemtype">
                        <input type="text" id="edit-mouse-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." >
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @else

                    <td colspan="4" id="itemtype">
                        <span class="post-input">{{ $computer->posts->mouse }}</span>
                        <input type="text" id="edit-mouse-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('mouse') ?? $computer->posts->mouse }}">
                    </td>

                    {{-- Status --}}
                        {{-- 1st Quarter --}}
                    @if (empty($computer->firststatus->mouse_stats))
                        <td><input id="edit-mouse-ok1" class="d-none 1stedit-checkbox ok1" type="checkbox" />     {{-- this condition code .. if status is uncheck or null and adding new status--}}
                            <input id="mouse-status1-ok" class="d-none 1stcheckbox ok1" type="checkbox" />
                        </td>
                        <td>
                            <input id="edit-mouse-def1" class="d-none 1stedit-checkbox def1" type="checkbox" />
                            <input id="mouse-status1-def" class="d-none 1stcheckbox def1" type="checkbox" />
                        </td>

                    @elseif($computer->firststatus->mouse_stats == "OK")
                        <td>
                            <strong class="statuscheck edit-check1"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-mouse-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->mouse_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <input id="edit-mouse-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->mouse_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @else
                        <td>
                            <input id="edit-mouse-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->mouse_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <strong class="statusdef edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-mouse-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->mouse_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
                    
                        {{-- 2nd Quarter --}}
                    @if (empty($computer->secondstatus->mouse_stats))
                        <td>
                            <input id="edit-mouse-ok2" class="d-none 2ndedit-checkbox ok2" type="checkbox"  />
                            <input id="mouse-status2-ok" class="d-none 2ndcheckbox ok2" type="checkbox" />
                        </td>
                        <td>
                            <input id="edit-mouse-def2" class="d-none 2ndedit-checkbox def2" type="checkbox" />
                            <input id="mouse-status2-def" class="d-none 2ndcheckbox def2" type="checkbox" />
                        </td>
                    @elseif($computer->secondstatus->mouse_stats == "OK")
                        <td><strong class="statuscheck edit-check2"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-mouse-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->mouse_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-mouse-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->mouse_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-mouse-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->mouse_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-mouse-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->mouse_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 3rd Quarter --}}
                    @if (empty($computer->thirdstatus->mouse_stats))
                        <td>
                            <input id="edit-mouse-ok3" class="d-none 3rdedit-checkbox ok3" type="checkbox" />
                            <input id="mouse-status3-ok" class="d-none 3rdcheckbox ok3" type="checkbox" />
                        </td>
                        <td>
                            <input id="edit-mouse-def3" class="d-none 3rdedit-checkbox def3" type="checkbox" />
                            <input id="mouse-status3-def" class="d-none 3rdcheckbox def3" type="checkbox" />
                        </td>
                    @elseif($computer->thirdstatus->mouse_stats == "OK")
                        <td><strong class="statuscheck edit-check3"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-mouse-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->mouse_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-mouse-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->mouse_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-mouse-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->mouse_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-mouse-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->mouse_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 4th Quarter --}}
                    @if (empty($computer->forthstatus->mouse_stats))
                        <td>
                            <input id="edit-mouse-ok4" class="d-none 4thedit-checkbox ok4" type="checkbox" />
                            <input id="mouse-status4-ok" class="d-none 4thcheckbox ok4" type="checkbox" />
                        </td>
                        <td>
                            <input id="edit-mouse-def4" class="d-none 4thedit-checkbox def4" type="checkbox" />
                            <input id="mouse-status4-def" class="d-none 4thcheckbox def4" type="checkbox" />
                        </td>
                    @elseif($computer->forthstatus->mouse_stats == "OK")
                        <td><strong class="statuscheck edit-check4"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-mouse-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->mouse_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-mouse-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->mouse_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-mouse-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->mouse_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-mouse-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->mouse_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                @endif
          </tr>

          {{-- Keyboard --}}
          <tr>
            <th colspan="4">Keyboard</th>
                @if($computer->posts->kboard == '')
                    <td colspan="4" id="itemtype">
                        <input type="text" id="edit-keyboard-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." >
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @else

                    <td colspan="4" id="itemtype">
                        <span class="post-input">{{ $computer->posts->kboard }}</span>
                        <input type="text" id="edit-keyboard-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('kboard') ?? $computer->posts->kboard }}">
                    </td>

                    {{-- Status --}}
                            {{-- 1st Quarter --}}
                    @if (empty($computer->firststatus->kb_stats))
                        <td>
                            <input id="edit-keyboard-ok1" class="d-none 1stedit-checkbox ok1" type="checkbox" />
                            <input id="keyboard-status1-ok" class="d-none 1stcheckbox ok1" type="checkbox" />
                        </td>
                        <td>
                            <input id="edit-keyboard-def1" class="d-none 1stedit-checkbox def1" type="checkbox" />
                            <input id="keyboard-status1-def" class="d-none 1stcheckbox def1" type="checkbox" />
                        </td>
                    @elseif($computer->firststatus->kb_stats == "OK")
                        <td>
                            <strong class="statuscheck edit-check1"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-keyboard-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->kb_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-keyboard-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->kb_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-keyboard-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->kb_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-keyboard-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->kb_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
                    
                        {{-- 2nd Quarter --}}
                    @if (empty($computer->secondstatus->kb_stats))
                        <td><input id="edit-keyboard-ok2" class="d-none 2ndedit-checkbox ok2" type="checkbox"  />
                            <input id="keyboard-status2-ok" class="d-none 2ndcheckbox ok2" type="checkbox" />
                        </td>
                        <td>
                            <input id="edit-keyboard-def2" class="d-none 2ndedit-checkbox def2" type="checkbox" />
                            <input id="keyboard-status2-def" class="d-none 2ndcheckbox def2" type="checkbox" />
                        </td>
                    @elseif($computer->secondstatus->kb_stats == "OK")
                        <td><strong class="statuscheck edit-check2"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-keyboard-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->kb_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-keyboard-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->kb_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-keyboard-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->kb_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-keyboard-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->kb_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 3rd Quarter --}}
                    @if (empty($computer->thirdstatus->kb_stats))
                        <td>
                            <input id="edit-keyboard-ok3" class="d-none 3rdedit-checkbox ok3" type="checkbox" />
                            <input id="keyboard-status3-ok" class="d-none 3rdcheckbox ok3" type="checkbox" />
                        </td>
                        <td><input id="edit-keyboard-def3" class="d-none 3rdedit-checkbox def3" type="checkbox" />
                            <input id="keyboard-status3-def" class="d-none 3rdcheckbox def3" type="checkbox" />
                        </td>
                    @elseif($computer->thirdstatus->kb_stats == "OK")
                        <td><strong class="statuscheck edit-check3"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-keyboard-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->kb_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-keyboard-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->kb_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-keyboard-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->kb_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-keyboard-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->kb_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                    {{-- 4th Quarter --}}
                    @if (empty($computer->forthstatus->kb_stats))
                        <td><input id="edit-keyboard-ok4" class="d-none 4thedit-checkbox ok4" type="checkbox" />
                            <input id="keyboard-status4-ok" class="d-none 4thcheckbox ok4" type="checkbox" />
                        </td>
                        <td><input id="edit-keyboard-def4" class="d-none 4thedit-checkbox def4" type="checkbox" />
                            <input id="keyboard-status4-def" class="d-none 4thcheckbox def4" type="checkbox" />
                        </td>
                    @elseif($computer->forthstatus->kb_stats == "OK")
                        <td><strong class="statuscheck edit-check4"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-keyboard-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->kb_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-keyboard-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->kb_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-keyboard-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->kb_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-keyboard-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->kb_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                @endif
          </tr>

          {{-- Monitor --}}
          <tr>
            <th colspan="4">Monitor</th>
                @if($computer->posts->monitor == '')
                    <td colspan="4" id="itemtype">
                        {{-- <input type="text" id="edit-monitor-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." > --}}
                        <input type="text" id="edit-monitor-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('monitor') ?? $computer->posts->monitor }}" list="edit-monitor_na">
                            <datalist id="edit-monitor_na">
                                <option value="N/A">
                            </datalist>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                @elseif($computer->posts->monitor == 'N/A')

                    <td colspan="4" id="itemtype">
                        <span class="post-input">{{ $computer->posts->monitor }}</span>
                        <input type="text" id="edit-monitor-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('monitor') ?? $computer->posts->monitor }}" list="edit-monitor_na">
                            <datalist id="edit-monitor_na">
                                <option value="N/A">
                            </datalist>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @else

                    <td colspan="4" id="itemtype">
                        <span class="post-input">{{ $computer->posts->monitor }}</span>
                        {{-- <input type="text" id="edit-monitor-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('monitor') ?? $computer->posts->monitor }}"> --}}
                        <input type="text" id="edit-monitor-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." list="add-monitor_na">
                            <datalist id="add-monitor_na">
                                <option value="N/A">
                            </datalist>
                    </td>

                    {{-- Status --}}
                    {{-- 1st Quarter --}}
                    @if (empty($computer->firststatus->monitor_stats))
                        <td><input id="edit-monitor-ok1" class="d-none 1stedit-checkbox ok1" type="checkbox"  />
                            <input id="monitor-status1-ok" class="d-none 1stcheckbox ok1" type="checkbox" />
                        </td>
                        <td><input id="edit-monitor-def1" class="d-none 1stedit-checkbox def1" type="checkbox" />
                            <input id="monitor-status1-def" class="d-none 1stcheckbox def1" type="checkbox" />
                        </td>
                    @elseif($computer->firststatus->monitor_stats == "OK")
                        <td><strong class="statuscheck edit-check1"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-monitor-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->monitor_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-monitor-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->monitor_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td>
                            <input id="edit-monitor-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->monitor_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-monitor-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->monitor_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
                    
                        {{-- 2nd Quarter --}}
                    @if (empty($computer->secondstatus->monitor_stats))
                        <td><input id="edit-monitor-ok2" class="d-none 2ndedit-checkbox ok2" type="checkbox" />
                            <input id="monitor-status2-ok" class="d-none 2ndcheckbox ok2" type="checkbox" />
                        </td>
                        <td><input id="edit-monitor-def2" class="d-none 2ndedit-checkbox def2" type="checkbox" />
                            <input id="monitor-status2-def" class="d-none 2ndcheckbox def2" type="checkbox" />
                        </td>
                    @elseif($computer->secondstatus->monitor_stats == "OK")
                        <td><strong class="statuscheck edit-check2"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-monitor-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->monitor_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-monitor-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->monitor_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-monitor-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->monitor_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-monitor-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->monitor_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 3rd Quarter --}}
                    @if (empty($computer->thirdstatus->monitor_stats))
                        <td><input id="edit-monitor-ok3" class="d-none 3rdedit-checkbox ok3" type="checkbox" />
                            <input id="monitor-status3-ok" class="d-none 3rdcheckbox ok3" type="checkbox" />
                        </td>
                        <td><input id="edit-monitor-def3" class="d-none 3rdedit-checkbox def3" type="checkbox" />
                            <input id="monitor-status3-def" class="d-none 3rdcheckbox def3" type="checkbox" />
                        </td>
                    @elseif($computer->thirdstatus->monitor_stats == "OK")
                        <td><strong class="statuscheck edit-check3"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-monitor-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->monitor_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-monitor-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->monitor_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-monitor-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->monitor_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-monitor-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->monitor_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 4th Quarter --}}
                    @if (empty($computer->forthstatus->monitor_stats))
                        <td><input id="edit-monitor-ok4" class="d-none 4thedit-checkbox ok4" type="checkbox" />
                            <input id="monitor-status4-ok" class="d-none 4thcheckbox ok4" type="checkbox" />
                        </td>
                        <td><input id="edit-monitor-def4" class="d-none 4thedit-checkbox def4" type="checkbox" />
                            <input id="monitor-status4-def" class="d-none 4thcheckbox def4" type="checkbox" />
                        </td>
                    @elseif($computer->forthstatus->monitor_stats == "OK")
                        <td><strong class="statuscheck edit-check4"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-monitor-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->monitor_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-monitor-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->monitor_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-monitor-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->monitor_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-monitor-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->monitor_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                @endif
          </tr>

            {{-- AVR-UPS --}}
        <tr>
            <th colspan="4">AVR/UPS</th>
            @if($computer->posts->avr_ups == '' )
                <td colspan="4" id="itemtype">
                    <input type="text" id="edit-avrups-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('avr_ups') ?? $computer->posts->avr_ups }}" list="edit-avrups_na">
                        <datalist id="edit-avrups_na">
                            <option value="N/A">
                        </datalist>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            @elseif($computer->posts->avr_ups == 'N/A')
                <td colspan="4" id="itemtype">
                    <span class="post-input">{{ $computer->posts->avr_ups }}</span>
                    <input type="text" id="edit-avrups-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('avr_ups') ?? $computer->posts->avr_ups }}" list="edit-avrups_na">
                        <datalist id="edit-avrups_na">
                            <option value="N/A">
                        </datalist>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else

                <td colspan="4" id="itemtype">
                    <span class="post-input">{{ $computer->posts->avr_ups }}</span>
                    <input type="text" id="edit-avrups-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('avr_ups') ?? $computer->posts->avr_ups }}" list="edit-avrups_na2">
                    <datalist id="edit-avrups_na2">
                        <option value="N/A">
                    </datalist>
                </td>

                {{-- Status --}}
                    {{-- 1st Quarter --}}
                @if (empty($computer->firststatus->avrups_stats))
                    <td>
                        <input id="edit-avrups-ok1" class="d-none 1stedit-checkbox ok1" type="checkbox"  />
                        <input id="avrups-status1-ok" class="d-none 1stcheckbox ok1" type="checkbox" />
                    </td>
                    <td><input id="edit-avrups-def1" class="d-none 1stedit-checkbox def1" type="checkbox" />
                        <input id="avrups-status1-def" class="d-none 1stcheckbox def1" type="checkbox" />
                    </td>
                @elseif($computer->firststatus->avrups_stats == "OK")
                    <td><strong class="statuscheck edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avrups-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->avrups_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-avrups-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->avrups_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-avrups-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->avrups_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avrups-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->avrups_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->avrups_stats))
                    <td><input id="edit-avrups-ok2" class="d-none 2ndedit-checkbox ok2" type="checkbox"  />
                        <input id="avrups-status2-ok" class="d-none 2ndcheckbox ok2" type="checkbox" />
                    </td>
                    <td><input id="edit-avrups-def2" class="d-none 2ndedit-checkbox def2" type="checkbox" />
                        <input id="avrups-status2-def" class="d-none 2ndcheckbox def2" type="checkbox" />
                    </td>
                @elseif($computer->secondstatus->avrups_stats == "OK")
                    <td><strong class="statuscheck edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avrups-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->avrups_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-avrups-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->avrups_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-avrups-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->avrups_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avrups-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->avrups_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->avrups_stats))
                    <td><input id="edit-avrups-ok3" class="d-none 3rdedit-checkbox ok3" type="checkbox" />
                        <input id="avrups-status3-ok" class="d-none 3rdcheckbox ok3" type="checkbox" />
                    </td>
                    <td><input id="edit-avrups-def3" class="d-none 3rdedit-checkbox def3" type="checkbox" />
                        <input id="avrups-status3-def" class="d-none 3rdcheckbox def3" type="checkbox" />
                    </td>
                @elseif($computer->thirdstatus->avrups_stats == "OK")
                    <td><strong class="statuscheck edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avrups-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->avrups_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-avrups-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->avrups_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-avrups-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->avrups_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avrups-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->avrups_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->avrups_stats))
                    <td><input id="edit-avrups-ok4" class="d-none 4thedit-checkbox ok4" type="checkbox"  />
                        <input id="avrups-status4-ok" class="d-none 4thcheckbox ok4" type="checkbox" />
                    </td>
                    <td><input id="edit-avrups-def4" class="d-none 4thedit-checkbox def4" type="checkbox" />
                        <input id="avrups-status4-def" class="d-none 4thcheckbox def4" type="checkbox" />
                    </td>
                @elseif($computer->forthstatus->avrups_stats == "OK")
                    <td><strong class="statuscheck edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avrups-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->avrups_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-avrups-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->avrups_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-avrups-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->avrups_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avrups-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->avrups_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                    
            @endif
        </tr>

          {{-- Printer --}}
          <tr>
            <th colspan="4">Printer</th>
                @if($computer->posts->printer == '')
                    <td colspan="4" id="itemtype">
                        <input type="text" id="edit-printer-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" value="{{ old('printer') ?? $computer->posts->printer }}" placeholder="Aa..." list="printer_na">
                        <datalist id="printer_na">
                            <option value="BROTHER DCP-L2540DW">
                            <option value="EPSON LQ-310">
                            <option value="EPSON LX-310">
                            <option value="FUJI XEROX DP CP315">
                            <option value="FUJI XEROX DP P225d">
                            <option value="N/A">
                        </datalist>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @elseif($computer->posts->printer == 'N/A')
                    <td colspan="4" id="itemtype">
                        <span class="post-input">{{ $computer->posts->printer }}</span>
                        <input type="text" id="edit-printer-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" value="{{ old('printer') ?? $computer->posts->printer }}" placeholder="Aa..." list="edit-printer_na">
                            <datalist id="edit-printer_na">
                                <option value="BROTHER DCP-L2540DW">
                                <option value="EPSON LQ-310">
                                <option value="EPSON LX-310">
                                <option value="FUJI XEROX DP CP315">
                                <option value="FUJI XEROX DP P225d">
                                <option value="N/A">
                            </datalist>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @else

                    <td colspan="4" id="itemtype">
                        <span class="post-input">{{ $computer->posts->printer }}</span>
                        <input type="text" id="edit-printer-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('printer') ?? $computer->posts->printer }}" list="edit-printer_na2">
                            <datalist id="edit-printer_na2">
                                <option value="BROTHER DCP-L2540DW">
                                <option value="EPSON LQ-310">
                                <option value="EPSON LX-310">
                                <option value="FUJI XEROX DP CP315">
                                <option value="FUJI XEROX DP P225d">
                                <option value="N/A">
                            </datalist>
                    </td>

                    {{-- Status --}}
                    {{-- 1st Quarter --}}
                    @if (empty($computer->firststatus->printer_stats))
                        <td><input id="edit-printer-ok1" class="d-none 1stedit-checkbox ok1" type="checkbox" />
                            <input id="printer-status1-ok" class="d-none 1stcheckbox ok1" type="checkbox" />
                        </td>
                        <td><input id="edit-printer-def1" class="d-none 1stedit-checkbox def1" type="checkbox" />
                            <input id="printer-status1-def" class="d-none 1stcheckbox def1" type="checkbox" />
                        </td>
                    @elseif($computer->firststatus->printer_stats == "OK")
                        <td><strong class="statuscheck edit-check1"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-printer-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->printer_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-printer-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->printer_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-printer-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->printer_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-printer-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->printer_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
                    
                        {{-- 2nd Quarter --}}
                    @if (empty($computer->secondstatus->printer_stats))
                        <td><input id="edit-printer-ok2" class="d-none 2ndedit-checkbox ok2" type="checkbox"  />
                            <input id="printer-status2-ok" class="d-none 2ndcheckbox ok2" type="checkbox" />
                        </td>
                        <td><input id="edit-printer-def2" class="d-none 2ndedit-checkbox def2" type="checkbox" />
                            <input id="printer-status2-def" class="d-none 2ndcheckbox def2" type="checkbox" />
                        </td>
                    @elseif($computer->secondstatus->printer_stats == "OK")
                        <td><strong class="statuscheck edit-check2"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-printer-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->printer_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-printer-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->printer_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-printer-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->printer_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-printer-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->printer_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 3rd Quarter --}}
                    @if (empty($computer->thirdstatus->printer_stats))
                        <td><input id="edit-printer-ok3" class="d-none 3rdedit-checkbox ok3" type="checkbox" />
                            <input id="printer-status3-ok" class="d-none 3rdcheckbox ok3" type="checkbox" />
                        </td>
                        <td><input id="edit-printer-def3" class="d-none 3rdedit-checkbox def3" type="checkbox" />
                            <input id="printer-status3-def" class="d-none 3rdcheckbox def3" type="checkbox" />
                        </td>
                    @elseif($computer->thirdstatus->printer_stats == "OK")
                        <td><strong class="statuscheck edit-check3"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-printer-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->printer_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-printer-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->printer_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-printer-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->printer_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-printer-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->printer_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 4th Quarter --}}
                    @if (empty($computer->forthstatus->printer_stats))
                        <td><input id="edit-printer-ok4" class="d-none 4thedit-checkbox ok4" type="checkbox"  />
                            <input id="printer-status4-ok" class="d-none 4thcheckbox ok4" type="checkbox" />
                        </td>
                        <td><input id="edit-printer-def4" class="d-none 4thedit-checkbox def4" type="checkbox" />
                            <input id="printer-status4-def" class="d-none 4thcheckbox def4" type="checkbox" />
                        </td>
                    @elseif($computer->forthstatus->printer_stats == "OK")
                        <td><strong class="statuscheck edit-check4"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-printer-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->printer_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-printer-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->printer_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-printer-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->printer_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-printer-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->printer_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
            
                @endif
            </tr>

          {{-- CPU --}}
          <tr>
            <th colspan="4">CPU / LAPTOP</th>
                @if($computer->posts->cpu == '')
                    <td colspan="4" id="itemtype">
                        <input type="text" id="edit-cpu-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." style="text-transform: uppercase">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @else

                    <td colspan="4" id="itemtype">
                        <span class="post-input">{{ $computer->posts->cpu }}</span>
                        <input type="text" id="edit-cpu-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('cpu') ?? $computer->posts->cpu }}" style="text-transform: uppercase">
                    </td>

                    {{-- Status --}}
                        {{-- 1st Quarter --}}
                    @if (empty($computer->firststatus->cpu_stats))
                        <td>
                            <input id="edit-cpu-ok1" class="d-none 1stedit-checkbox ok1" type="checkbox"  required />
                            <input id="cpu-status1-ok" class="d-none 1stcheckbox ok1" type="checkbox"  required />
                        </td>
                        <td><input id="edit-cpu-def1" class="d-none 1stedit-checkbox def1" type="checkbox" required />
                            <input id="cpu-status1-def" class="d-none 1stcheckbox def1" type="checkbox"  required />
                        </td>
                    @elseif($computer->firststatus->cpu_stats == "OK")
                        <td><strong class="statuscheck edit-check1"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-cpu-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->cpu_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-cpu-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->cpu_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-cpu-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->cpu_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-cpu-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->cpu_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
                    
                        {{-- 2nd Quarter --}}
                    @if (empty($computer->secondstatus->cpu_stats))
                        <td><input id="edit-cpu-ok2" class="d-none 2ndedit-checkbox ok2" type="checkbox"  required />
                            <input id="cpu-status2-ok" class="d-none 2ndcheckbox ok2" type="checkbox"  required/>
                        </td>
                        <td><input id="edit-cpu-def2" class="d-none 2ndedit-checkbox def2" type="checkbox" required />
                            <input id="cpu-status2-def" class="d-none 2ndcheckbox def2" type="checkbox"  required/>
                        </td>
                    @elseif($computer->secondstatus->cpu_stats == "OK")
                        <td><strong class="statuscheck edit-check2"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-cpu-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->cpu_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-cpu-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->cpu_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-cpu-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->cpu_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-cpu-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->cpu_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 3rd Quarter --}}
                    @if(empty($computer->thirdstatus->cpu_stats))
                        <td><input id="edit-cpu-ok3" class="d-none 3rdedit-checkbox ok3" type="checkbox"  required />
                            <input id="cpu-status3-ok" class="d-none 3rdcheckbox ok3" type="checkbox"  required/>
                        </td>
                        <td><input id="edit-cpu-def3" class="d-none 3rdedit-checkbox def3" type="checkbox" required />
                            <input id="cpu-status3-def" class="d-none 3rdcheckbox def3" type="checkbox"  required/>
                        </td>
                    @elseif ($computer->thirdstatus->cpu_stats == "OK")
                        <td><strong class="statuscheck edit-check3"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-cpu-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->cpu_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-cpu-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->cpu_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-cpu-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->cpu_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-cpu-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->cpu_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 4th Quarter --}}
                    @if(empty($computer->forthstatus->cpu_stats))
                        <td><input id="edit-cpu-ok4" class="d-none 4thedit-checkbox ok4" type="checkbox"  required />
                            <input id="cpu-status4-ok" class="d-none 4thcheckbox ok4" type="checkbox"  required/>
                        </td>
                        <td><input id="edit-cpu-def4" class="d-none 4thedit-checkbox def4" type="checkbox" required />
                            <input id="cpu-status4-def" class="d-none 4thcheckbox def4" type="checkbox"  required/>
                        </td>
                    @elseif ($computer->forthstatus->cpu_stats == "OK")
                        <td><strong class="statuscheck edit-check4"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-cpu-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->cpu_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td><input id="edit-cpu-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->cpu_stats == 'DEF' ? 'checked' : '' }} /></td>
                    @else
                        <td><input id="edit-cpu-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->cpu_stats == 'OK' ? 'checked' : '' }} /></td>
                        <td>
                            <strong class="statusdef edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-cpu-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->cpu_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                @endif
          </tr>

          {{-- Barcode --}}
          <tr>
            <th colspan="4">Barcode</th>
            @if($computer->posts->bargun == '')
                <td colspan="4" id="itemtype">
                    <input type="text" id="edit-barcode-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" value="{{ old('bargun') ?? $computer->posts->bargun }}" placeholder="Aa..." list="barcode_na">
                        <datalist id="barcode_na">
                            <option value="N/A">
                        </datalist>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            @elseif($computer->posts->bargun == 'N/A')
                <td colspan="4" id="itemtype">
                    <span class="post-input">{{ $computer->posts->bargun }}</span>
                    <input type="text" id="edit-barcode-input" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" value="{{ old('bargun') ?? $computer->posts->bargun }}" placeholder="Aa..." list="edit-barcode_na">
                        <datalist id="edit-barcode_na">
                            <option value="N/A">
                        </datalist>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            @else
                <td colspan="4" id="itemtype">
                    <span class="post-input">{{ $computer->posts->bargun }}</span>
                    <input type="text" class="edit-input-post d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('bargun') ?? $computer->posts->bargun }}" list="edit-barcode_na2">
                        <datalist id="edit-barcode_na2">
                            <option value="N/A">
                        </datalist>
                </td>


                {{-- Status --}}
                {{-- 1st Quarter --}}
                @if (empty($computer->firststatus->bargun_stats))
                    <td><input id="edit-barcode-ok1" class="d-none 1stedit-checkbox ok1" type="checkbox" />
                        <input id="barcode-status1-ok" class="d-none 1stcheckbox ok1" type="checkbox" />
                    </td>
                    <td><input id="edit-barcode-def1" class="d-none 1stedit-checkbox def1" type="checkbox" />
                        <input id="barcode-status1-def" class="d-none 1stcheckbox def1" type="checkbox" />
                    </td>
                @elseif($computer->firststatus->bargun_stats == "OK")
                    <td><strong class="statuscheck edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-barcode-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->bargun_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-barcode-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->bargun_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-barcode-ok1" class="d-none 1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->bargun_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-barcode-def1" class="d-none 1stedit-checkbox" type="checkbox" {{ $computer->firststatus->bargun_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->bargun_stats))
                    <td><input id="edit-barcode-ok2" class="d-none 2ndedit-checkbox ok2" type="checkbox" />
                        <input id="barcode-status2-ok" class="d-none 2ndcheckbox ok2" type="checkbox" />
                    </td>
                    <td><input id="edit-barcode-def2" class="d-none 2ndedit-checkbox def2" type="checkbox" />
                        <input id="barcode-status2-def" class="d-none 2ndcheckbox def2" type="checkbox" />
                    </td>
                @elseif($computer->secondstatus->bargun_stats == "OK")
                    <td><strong class="statuscheck edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-barcode-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->bargun_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-barcode-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->bargun_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-barcode-ok2" class="d-none 2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->bargun_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-barcode-def2" class="d-none 2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->bargun_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->bargun_stats))
                    <td><input id="edit-barcode-ok3" class="d-none 3rdedit-checkbox ok3" type="checkbox"  />
                        <input id="barcode-status3-ok" class="d-none 3rdcheckbox ok3" type="checkbox" />
                    </td>
                    <td><input id="edit-barcode-def3" class="d-none 3rdedit-checkbox def3" type="checkbox" />
                        <input id="barcode-status3-def" class="d-none 3rdcheckbox def3" type="checkbox" />
                    </td>
                @elseif($computer->thirdstatus->bargun_stats == "OK")
                    <td><strong class="statuscheck edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-barcode-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->bargun_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-barcode-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->bargun_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-barcode-ok3" class="d-none 3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->bargun_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-barcode-def3" class="d-none 3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->bargun_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->bargun_stats))
                    <td><input id="edit-barcode-ok4" class="d-none 4thedit-checkbox ok4" type="checkbox"  />
                        <input id="barcode-status4-ok" class="d-none 4thcheckbox ok4" type="checkbox" />
                    </td>
                    <td><input id="edit-barcode-def4" class="d-none 4thedit-checkbox def4" type="checkbox" />
                        <input id="barcode-status4-def" class="d-none 4thcheckbox def4" type="checkbox" />
                    </td>
                @elseif($computer->forthstatus->bargun_stats == "OK")
                    <td><strong class="statuscheck edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-barcode-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->bargun_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td><input id="edit-barcode-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->bargun_stats == 'DEF' ? 'checked' : '' }} /></td>
                @else
                    <td><input id="edit-barcode-ok4" class="d-none 4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->bargun_stats == 'OK' ? 'checked' : '' }} /></td>
                    <td>
                        <strong class="statusdef edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-barcode-def4" class="d-none 4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->bargun_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
            @endif
          </tr>
          {{-- Date Preventive --}}
          <tr>
            <th colspan="4">Date Preventive</th>
            <td colspan="4" id="itemtype"></td>
            @if($computer->firststatus)
                {{-- First Status date --}}
                <td colspan="2" id="itemtype" class="text-center hide-firsthardware">
                    {{$computer->firststatus->created_at->format('m/d/Y')}}
                </td>

                <td colspan="2" id="itemtype" class="edit-hardware-firstdate text-center d-none">
                    <input type="text" id="first-status-date" class="firstdate rounded border border-secondary pl-1 w-100" autocomplete="off" placeholder="Select new date...">
                </td>

                <td colspan="2" id="itemtype" class="edit-date-first d-none text-center">
                    <button type="button" class="btn-start-preventive bg-success">Set New Date</button>
                </td>
            @else
                <td colspan="2" id="itemtype"></td>
            @endif
            @if($computer->secondstatus)
                {{-- Second Status date --}}
                <td colspan="2" id="itemtype" class="text-center hide-secondhardware">
                    {{$computer->secondstatus->created_at->format('m/d/Y')}}
                </td>
                
                <td colspan="2" id="itemtype" class="edit-hardware-seconddate text-center d-none">
                    <input type="text" id="second-status-date" class="seconddate rounded border border-secondary pl-1 w-100" autocomplete="off" placeholder="Select new date...">
                </td>
                <td colspan="2" id="itemtype" class="edit-date-second d-none text-center">
                    <button type="button" class="btn-start-preventive bg-success">Set New Date</button>
                </td>
            @else
                <td colspan="2" id="itemtype"></td>
            @endif
            @if($computer->thirdstatus)
                {{-- Third Status date --}}
                <td colspan="2" id="itemtype" class="text-center hide-thirdhardware">
                    {{$computer->thirdstatus->created_at->format('m/d/Y')}}
                </td>
                
                <td colspan="2" id="itemtype" class="edit-hardware-thirddate text-center d-none">
                    <input type="text" id="third-status-date" class="thirddate rounded border border-secondary pl-1 w-100" autocomplete="off" placeholder="Select new date...">
                </td>
                <td colspan="2" id="itemtype" class="edit-date-third d-none text-center">
                    <button type="button" class="btn-start-preventive bg-success">Set New Date</button>
                </td>
            @else
                <td colspan="2" id="itemtype"></td>
            @endif
                @if($computer->forthstatus)
                {{-- Forth Status date --}}
                <td colspan="2" id="itemtype" class="text-center hide-forthhardware">
                    {{$computer->forthstatus->created_at->format('m/d/Y')}}
                </td>
                
                <td colspan="2" id="itemtype" class="edit-hardware-forthdate text-center d-none">
                    <input type="text" id="forth-status-date" class="forthdate rounded border border-secondary pl-1 w-100" autocomplete="off" placeholder="Select new date...">
                </td>
                <td colspan="2" id="itemtype" class="edit-date-forth d-none text-center">
                    <button type="button" class="btn-start-preventive bg-success">Set New Date</button>
                </td>
            @else
                <td colspan="2" id="itemtype"></td>
            @endif
        </tr>
          {{-- Buttons --}}
    @if(Auth::user()->username !== 'guest')
        <tr>
            <th colspan="4"></th>
            <td colspan="4">
                @if($computer->posts->mouse == '' && $computer->posts->keyboard == '' && $computer->posts->monitor == '' && $computer->posts->cpu == '')
                    <button type="button" id="edit-preventive" class="btn-start-preventive bg-warning">Add Preventive</button>
                    <button type="submit" id="edit-save-preventive" class="d-none btn-save-preventive button-disable-post" form="edit_computer_preventive_hardware">Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button> {{--prevent button--}}
                    <button type="button" id="edit-reload" class="closereload d-none float-right"><i class="fas fa-undo-alt"></i></button>
                @else
                    <button type="button" id="edit-preventive" class="btn-start-preventive bg-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                    <button type="submit" id="edit-save-preventive" class="d-none btn-save-preventive button-disable-post" form="edit_computer_preventive_hardware">Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                    <button type="button" id="edit-reload" class="closereload d-none float-right"><i class="fas fa-undo-alt"></i></button>
                @endif
            </td>
            {{-- 1st Status  button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if ($computer->firststatus)
                        <button type="button" id="edit-button1" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 1st Quarter</button>
                        <button type="submit" id="update-statusbutton1" class="d-none statusbutton-update button-disable-status1" form="first_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" class="d-none update-statusbutton-close1 closereload float-right"><i class="fas fa-times"></i></button>
                    @else
                        <button type="button" id="statusbutton1" class="statusbutton-add"><i class="fas fa-plus"></i> Add</button>
                        <button type="submit" id="savestatusbutton1" class="d-none statusbutton-save button-disable-status1" form="first_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" id="" class="d-none statusbutton-close1 closereload float-right"><i class="fas fa-times"></i></button>
                    @endif
                @endif

            </td>
            {{-- 2nd Status  button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if ($computer->secondstatus)
                        <button type="button" id="edit-button2" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 2nd Quarter</button>
                        <button type="submit" id="update-statusbutton2" class="d-none statusbutton-update button-disable-status2" form="second_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" class="d-none update-statusbutton-close2 closereload float-right"><i class="fas fa-times"></i></button>
                    @else
                        <button type="button" id="statusbutton2" class="statusbutton-add"><i class="fas fa-plus"></i> Add</button>
                        <button type="submit" id="savestatusbutton2" class="d-none statusbutton-save button-disable-status2" form="second_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" id="savestatusbutton2" class="d-none statusbutton-close2 closereload float-right"><i class="fas fa-times"></i></button>
                    @endif
                @endif
            </td> {{-- <input id="status2-ok" class="d-none 2ndcheckbox" type="checkbox"  /> --}}
            
            {{-- 3rd Status button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if ($computer->thirdstatus)
                        <button type="button" id="edit-button3" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 3rd Quarter</button>
                        <button type="submit" id="update-statusbutton3" class="d-none statusbutton-update button-disable-status3" form="third_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" class="d-none update-statusbutton-close3 closereload float-right"><i class="fas fa-times"></i></button>
                    @else
                        <button type="button" id="statusbutton3" class="statusbutton-add"><i class="fas fa-plus"></i> Add</button>
                        <button type="submit" id="savestatusbutton3" class="d-none statusbutton-save button-disable-status3" form="third_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" id="savestatusbutton3" class="d-none statusbutton-close3 closereload float-right"><i class="fas fa-times"></i></button>
                    @endif
                @endif
            </td>

            {{-- 4th Status button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if ($computer->forthstatus)
                        <button type="button" id="edit-button4" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 4th Quarter</button>
                        <button type="submit" id="update-statusbutton4" class="d-none statusbutton-update button-disable-status4" form="forth_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" class="d-none update-statusbutton-close4 closereload float-right"><i class="fas fa-times"></i></button>
                    @else
                        <button type="button" id="statusbutton4" class="statusbutton-add"><i class="fas fa-plus"></i> Add</button>
                        <button type="submit" id="savestatusbutton4" class="d-none statusbutton-save button-disable-status4" form="forth_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                        <button type="button" id="savestatusbutton4" class="d-none statusbutton-close4 closereload float-right"><i class="fas fa-times"></i></button>
                    @endif
                @endif
            </td>
        </tr>
    @endif
        <tr>
            <td colspan="16">Check appropriate box with ( <i class="fas fa-check"></i> ) If Maintenance activity is performed ( <i class="fas fa-times-circle"></i> ) mark if not.
            (Please see separate "Preventive Maintenance (Workstation)" Sheet.)</td>
        </tr>
    </tbody>
  </table>




 {{-- SOFTWARE --}}
 <table class="table table-bordered mt-4 table-striped post-table">
    <thead>
        <tr id="hardwareworkstation">
            <th colspan="16">SOFTWARE
                <label for="" class="float-left font-weight-light my-auto">Created {{$computer->posts->created_at->diffForHumans()}}</label>
                <label for="" class="float-right font-weight-light my-auto">{{$computer->posts->created_at->format('m/d/Y')}}</label>
            </th>
            
        </tr>
        
        <tr id="monthquarters">
            <th rowspan="2" colspan="4" id="description">Description</th>
            <th rowspan="2" colspan="4" id="brandtype">Brand / type</th>
            <th colspan="2" id="quarterstatus">1st Quarter</th>
            <th colspan="2" id="quarterstatus">2nd Quarter</th>
            <th colspan="2" id="quarterstatus">3rd Quarter</th>
            <th colspan="2" id="quarterstatus">4th Quarter</th>
        </tr> 
        <tr id="checkedStatus"> 

            <td>OK</td>
            <td>DEF</td>
            <td>OK</td>
            <td>DEF</td>
            <td>OK</td>
            <td>DEF</td>
            <td>OK</td>
            <td>DEF</td>

        </tr>
    </thead>
    <tbody id="eachitem">

      {{-- System Boot --}}
      <tr>
        <th colspan="4">SYSTEM BOOT</th>
            @if($computer->posts->sysboot == '')
                <td colspan="4" id="itemtype">
                    <input type="text" id="edit-sysboot-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." list="sysboot_na">
                        <datalist id="sysboot_na">
                            <option value="N/A">
                        </datalist>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @elseif($computer->posts->sysboot == 'N/A')

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->sysboot }}</span>
                    <input type="text" id="edit-sysboot-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." list="edit-sysboot_na">
                        <datalist id="edit-sysboot_na">
                            <option value="N/A">
                        </datalist>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else
                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->sysboot }}</span>
                    <input type="text" id="edit-sysboot-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('sysboot') ?? $computer->posts->sysboot }}" list="edit-sysboot_na2">
                        <datalist id="edit-sysboot_na2">
                            <option value="N/A">
                        </datalist>
                </td>


                {{-- Status --}}
                    {{-- 1st Status --}}
                @if (empty($computer->firststatus->sysboot_stats))
                    <td>
                        <input id="edit-sysboot-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  />
                        <input id="sysboot-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  />
                    </td>
                    <td><input id="edit-sysboot-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" />
                        <input id="sysboot-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  />
                    </td>
                @elseif($computer->firststatus->sysboot_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-sysboot-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-sysboot-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-sysboot-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-sysboot-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->sysboot_stats))
                    <td>
                        <input id="edit-sysboot-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  />
                        <input id="sysboot-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  />
                    </td>
                    <td><input id="edit-sysboot-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" />
                        <input id="sysboot-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  />
                    </td>
                @elseif($computer->secondstatus->sysboot_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-sysboot-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-sysboot-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-sysboot-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-sysboot-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->sysboot_stats))
                    <td>
                        <input id="edit-sysboot-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  />
                        <input id="sysboot-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  />
                    </td>
                    <td><input id="edit-sysboot-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" />
                        <input id="sysboot-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  />
                    </td>
                @elseif($computer->thirdstatus->sysboot_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-sysboot-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-sysboot-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-sysboot-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-sysboot-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->sysboot_stats))
                    <td>
                        <input id="edit-sysboot-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  />
                        <input id="sysboot-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  />
                    </td>
                    <td><input id="edit-sysboot-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" />
                        <input id="sysboot-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  />
                    </td>
                @elseif($computer->forthstatus->sysboot_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-sysboot-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-sysboot-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-sysboot-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->sysboot_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-sysboot-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->sysboot_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

            @endif
      </tr>

      {{-- OS --}}
      <tr>
        <th colspan="4">OPERATING SYSTEM</th>
            @if(empty($computer->posts->os))
                <td colspan="4" id="itemtype">
                    {{-- <input type="text" id="os-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..."> --}}
                    <select id="edit-os-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>Select OS</option>
                        <option value="WINDOWS XP">WINDOWS XP</option>
                        <option value="WINDOWS 7">WINDOWS 7</option>
                        <option value="WINDOWS 8">WINDOWS 8</option>
                        <option value="WINDOWS 8.1">WINDOWS 8.1</option>
                        <option value="WINDOWS 10">WINDOWS 10</option>
                        <option value="WINDOWS 11">WINDOWS 11</option>
                    </select>
                </td>
            @else
                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->os }}</span>
                    {{-- <input type="text" id="edit-os-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('os') ?? $computer->posts->sysboot }}"> --}}
                    <select id="edit-os-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>Select OS</option>
                        <option value="WINDOWS XP" {{$computer->posts->os == "WINDOWS XP" ? 'selected' : ''}}>WINDOWS XP</option>
                        <option value="WINDOWS 7" {{$computer->posts->os == "WINDOWS 7" ? 'selected' : ''}}>WINDOWS 7</option>
                        <option value="WINDOWS 8" {{$computer->posts->os == "WINDOWS 8" ? 'selected' : ''}}>WINDOWS 8</option>
                        <option value="WINDOWS 8.1" {{$computer->posts->os == "WINDOWS 8.1" ? 'selected' : ''}}>WINDOWS 8.1</option>
                        <option value="WINDOWS 10" {{$computer->posts->os == "WINDOWS 10" ? 'selected' : ''}}>WINDOWS 10</option>
                        <option value="WINDOWS 11" {{$computer->posts->os == "WINDOWS 11" ? 'selected' : ''}}>WINDOWS 11</option>
                    </select>
                </td>
            @endif
        {{-- Status --}}
             {{-- 1st Status --}}
            @if (empty($computer->firststatus->os_stats))
                <td>
                    <input id="edit-os-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                    <input id="os-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                </td>
                <td><input id="edit-os-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                    <input id="os-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                </td>
            @elseif($computer->firststatus->os_stats == "OK")
                <td>
                    <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                    <input id="edit-os-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <input id="edit-os-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @else
                <td>
                    <input id="edit-os-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                    <input id="edit-os-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @endif
            
                {{-- 2nd Quarter --}}
            @if (empty($computer->secondstatus->os_stats))
                <td>
                    <input id="edit-os-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                    <input id="os-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                </td>
                <td><input id="edit-os-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                    <input id="os-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                </td>
            @elseif($computer->secondstatus->os_stats == "OK")
                <td>
                    <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                    <input id="edit-os-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <input id="edit-os-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @else
                <td>
                    <input id="edit-os-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                    <input id="edit-os-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @endif

                {{-- 3rd Quarter --}}
            @if (empty($computer->thirdstatus->os_stats))
                <td>
                    <input id="edit-os-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                    <input id="os-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                </td>
                <td><input id="edit-os-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                    <input id="os-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                </td>
            @elseif($computer->thirdstatus->os_stats == "OK")
                <td>
                    <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                    <input id="edit-os-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <input id="edit-os-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @else
                <td>
                    <input id="edit-os-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                    <input id="edit-os-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @endif

                {{-- 4th Quarter --}}
            @if (empty($computer->forthstatus->os_stats))
                <td>
                    <input id="edit-os-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                    <input id="os-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                </td>
                <td><input id="edit-os-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                    <input id="os-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                </td>
            @elseif($computer->forthstatus->os_stats == "OK")
                <td>
                    <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                    <input id="edit-os-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <input id="edit-os-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @else
                <td>
                    <input id="edit-os-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->os_stats == 'OK' ? 'checked' : '' }} />
                </td>
                <td>
                    <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                    <input id="edit-os-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->os_stats == 'DEF' ? 'checked' : '' }} />
                </td>
            @endif
      </tr>

      {{-- ANTIVIRUS --}}
      <tr>
        <th colspan="4">ANTI-VIRUS</th>
            @if($computer->posts->antivirus == '')
                <td colspan="4" id="itemtype">
                    <input type="text" id="edit-antivirus-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa...">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @elseif($computer->posts->antivirus == 'N/A')

                <td colspan="4" id="itemtype">
                    <span class="post-input">{{ $computer->posts->antivirus }}</span>
                    <input type="text" id="edit-antivirus-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." >
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->antivirus }}</span>
                    <input type="text" id="edit-antivirus-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('antivirus') ?? $computer->posts->antivirus }}">
                </td>

                {{-- Status --}}
                    {{-- 1st Status --}}
                @if (empty($computer->firststatus->avirus_stats))
                    <td>
                        <input id="edit-avirus-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                        <input id="avirus-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                    </td>
                    <td><input id="edit-avirus-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                        <input id="avirus-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                    </td>
                @elseif($computer->firststatus->avirus_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avirus-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-avirus-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-avirus-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avirus-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->avirus_stats))
                    <td>
                        <input id="edit-avirus-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                        <input id="avirus-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                    </td>
                    <td><input id="edit-avirus-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                        <input id="avirus-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                    </td>
                @elseif($computer->secondstatus->avirus_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avirus-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-avirus-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-avirus-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avirus-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->avirus_stats))
                    <td>
                        <input id="edit-avirus-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                        <input id="avirus-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                    </td>
                    <td><input id="edit-avirus-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                        <input id="avirus-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                    </td>
                @elseif($computer->thirdstatus->avirus_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avirus-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-avirus-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-avirus-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avirus-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->avirus_stats))
                    <td>
                        <input id="edit-avirus-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                        <input id="avirus-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                    </td>
                    <td><input id="edit-avirus-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                        <input id="avirus-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                    </td>
                @elseif($computer->forthstatus->avirus_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-avirus-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-avirus-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-avirus-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->avirus_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-avirus-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->avirus_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

            @endif
      </tr>

      {{-- MS OFFICE --}}
      <tr>
        <th colspan="4">MICROSOFT OFFICE</th>
            @if($computer->posts->ms_office == '')
                <td colspan="4" id="itemtype">
                    {{-- <input type="text" id="ms_office-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." > --}}
                    
                        {{-- <select id="ms_office-input" class="msofficeselect2 rounded border border-secondary pl-1" multiple="multiple" style="width: 100%;" name="bizboxselect">
                            <option></option>
                            <option value=" 2007">2007</option>
                            <option value=" 2013">2013</option>
                            <option value=" 2016">2016</option>
                            <option value=" 2019">2019</option>
                        </select>
                        <input type="hidden" name="ms_office" id="getmsoffice"> --}}

                        <select id="edit-ms_office-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                            <option disabled selected hidden>Select Version</option>
                            <option value="2007">2007</option>
                            <option value="2013">2013</option>
                            <option value="2016">2016</option>
                            <option value="2019">2019</option>
                        </select>
                        
                    
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->ms_office }}</span>
                    {{-- <input type="text" id="edit-ms_office-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." value="{{ old('ms_office') ?? $computer->posts->ms_office }}"> --}}
                    <select id="edit-ms_office-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>Select Version</option>
                        <option value="2007" {{$computer->posts->ms_office == "2007" ? 'selected' : ''}}>2007</option>
                        <option value="2013" {{$computer->posts->ms_office == "2013" ? 'selected' : ''}}>2013</option>
                        <option value="2016" {{$computer->posts->ms_office == "2016" ? 'selected' : ''}}>2016</option>
                        <option value="2019" {{$computer->posts->ms_office == "2019" ? 'selected' : ''}}>2019</option>
                    </select>
                </td>

                {{-- Status --}}
                    {{-- 1st Status --}}
                @if (empty($computer->firststatus->msoffice_stats))
                    <td>
                        <input id="edit-msoffice-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                        <input id="msoffice-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                    </td>
                    <td><input id="edit-msoffice-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                        <input id="msoffice-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                    </td>
                @elseif($computer->firststatus->msoffice_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-msoffice-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-msoffice-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-msoffice-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-msoffice-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->msoffice_stats))
                    <td>
                        <input id="edit-msoffice-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                        <input id="msoffice-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                    </td>
                    <td><input id="edit-msoffice-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                        <input id="msoffice-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                    </td>
                @elseif($computer->secondstatus->msoffice_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-msoffice-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-msoffice-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-msoffice-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-msoffice-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->msoffice_stats))
                    <td>
                        <input id="edit-msoffice-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                        <input id="msoffice-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                    </td>
                    <td><input id="edit-msoffice-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                        <input id="msoffice-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                    </td>
                @elseif($computer->thirdstatus->msoffice_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-msoffice-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-msoffice-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-msoffice-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-msoffice-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->msoffice_stats))
                    <td>
                        <input id="edit-msoffice-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                        <input id="msoffice-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                    </td>
                    <td><input id="edit-msoffice-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                        <input id="msoffice-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                    </td>
                @elseif($computer->forthstatus->msoffice_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-msoffice-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-msoffice-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-msoffice-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->msoffice_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-msoffice-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->msoffice_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

            @endif
      </tr>

      {{-- BIZBOX HIS--}}
      <tr>
        <th colspan="4">BIZBOX HIS</th>
            @if($computer->posts->his == '')
                <td colspan="4" id="itemtype">
                    {{-- <input type="text" id="his-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" placeholder="Aa..." > --}}
                    <select id="edit-his-input" name="his" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100">
                        <option disabled selected hidden>HIS</option>
                        <option value="OK">OK</option>
                        <option value="N/A">N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @elseif($computer->posts->his == 'N/A')

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->his }}</span>
                    <select id="edit-his-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>HIS</option>
                        <option value="OK" {{$computer->posts->his == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->his == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->his }}</span>
                    <select id="edit-his-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>HIS</option>
                        <option value="OK" {{$computer->posts->his == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->his == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>

                {{-- Status --}}
                {{-- 1st Status --}}
                @if (empty($computer->firststatus->his_stats))
                    <td>
                        <input id="edit-his-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                        <input id="his-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                    </td>
                    <td><input id="edit-his-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                        <input id="his-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                    </td>
                @elseif($computer->firststatus->his_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-his-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-his-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-his-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-his-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->his_stats))
                    <td>
                        <input id="edit-his-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                        <input id="his-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                    </td>
                    <td><input id="edit-his-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                        <input id="his-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                    </td>
                @elseif($computer->secondstatus->his_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-his-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-his-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-his-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-his-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->his_stats))
                    <td>
                        <input id="edit-his-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                        <input id="his-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                    </td>
                    <td><input id="edit-his-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                        <input id="his-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                    </td>
                @elseif($computer->thirdstatus->his_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-his-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-his-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-his-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-his-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->his_stats))
                    <td>
                        <input id="edit-his-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                        <input id="his-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                    </td>
                    <td><input id="edit-his-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                        <input id="his-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                    </td>
                @elseif($computer->forthstatus->his_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-his-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-his-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-his-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->his_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-his-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->his_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
            @endif
      </tr>

      {{-- BIZBOX MMS--}}
      <tr>
        <th colspan="4">BIZBOX MMS</th>
            @if($computer->posts->mms == '')
                <td colspan="4" id="itemtype">
                    <select id="edit-mms-input" name="mms" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100">
                        <option disabled selected hidden>MMS</option>
                        <option value="OK">OK</option>
                        <option value="N/A">N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @elseif($computer->posts->mms == 'N/A')

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->mms }}</span>
                    <select id="edit-mms-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>MMS</option>
                        <option value="OK" {{$computer->posts->mms == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->mms == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->mms }}</span>
                    <select id="edit-mms-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>MMS</option>
                        <option value="OK" {{$computer->posts->mms == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->mms == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>

                {{-- Status --}}
                    {{-- 1st Status --}}
                @if (empty($computer->firststatus->mms_stats))
                    <td>
                        <input id="edit-mms-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                        <input id="mms-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                    </td>
                    <td><input id="edit-mms-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                        <input id="mms-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                    </td>
                @elseif($computer->firststatus->mms_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-mms-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-mms-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-mms-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-mms-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->mms_stats))
                    <td>
                        <input id="edit-mms-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                        <input id="mms-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                    </td>
                    <td><input id="edit-mms-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                        <input id="mms-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                    </td>
                @elseif($computer->secondstatus->mms_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-mms-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-mms-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-mms-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-mms-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->mms_stats))
                    <td>
                        <input id="edit-mms-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                        <input id="mms-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                    </td>
                    <td><input id="edit-mms-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                        <input id="mms-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                    </td>
                @elseif($computer->thirdstatus->mms_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-mms-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-mms-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-mms-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-mms-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->mms_stats))
                    <td>
                        <input id="edit-mms-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                        <input id="mms-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                    </td>
                    <td><input id="edit-mms-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                        <input id="mms-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                    </td>
                @elseif($computer->forthstatus->mms_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-mms-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-mms-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-mms-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->mms_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-mms-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->mms_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
            @endif
      </tr>

      {{-- BIZBOX EMR--}}
      <tr>
        <th colspan="4">BIZBOX EMR</th>
            @if(empty($computer->posts->emr))
                <td colspan="4" id="itemtype">
                    <select id="edit-emr-input" name="emr" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100">
                        <option disabled selected hidden>EMR</option>
                        <option value="OK">OK</option>
                        <option value="N/A">N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @elseif($computer->posts->emr == 'N/A')

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->emr }}</span>
                    <select id="edit-emr-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>EMR</option>
                        <option value="OK" {{$computer->posts->emr == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->emr == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->emr }}</span>
                    <select id="edit-emr-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>EMR</option>
                        <option value="OK" {{$computer->posts->emr == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->emr == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>

                {{-- Status --}}
                        {{-- 1st Status --}}
                @if (empty($computer->firststatus->emr_stats))
                    <td>
                        <input id="edit-emr-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                        <input id="emr-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                    </td>
                    <td><input id="edit-emr-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                        <input id="emr-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                    </td>
                @elseif($computer->firststatus->emr_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-emr-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-emr-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-emr-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-emr-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->emr_stats))
                    <td>
                        <input id="edit-emr-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                        <input id="emr-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                    </td>
                    <td><input id="edit-emr-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                        <input id="emr-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                    </td>
                @elseif($computer->secondstatus->emr_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-emr-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-emr-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-emr-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-emr-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->emr_stats))
                    <td>
                        <input id="edit-emr-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                        <input id="emr-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                    </td>
                    <td><input id="edit-emr-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                        <input id="emr-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                    </td>
                @elseif($computer->thirdstatus->emr_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-emr-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-emr-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-emr-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-emr-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->emr_stats))
                    <td>
                        <input id="edit-emr-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                        <input id="emr-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                    </td>
                    <td><input id="edit-emr-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                        <input id="emr-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                    </td>
                @elseif($computer->forthstatus->emr_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-emr-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-emr-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-emr-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->emr_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-emr-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->emr_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

            @endif
      </tr>

      {{-- QUEU SYSTEM --}}
        <tr>
            <th colspan="4">QUEUING SYSTEM</th>
            @if($computer->posts->queui_sys == '')
                <td colspan="4" id="itemtype">
                    <select id="edit-queui_sys-input" name="queui_sys" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100">
                        <option disabled selected hidden>Queuing</option>
                        <option value="OK">OK</option>
                        <option value="N/A">N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @elseif($computer->posts->queui_sys == 'N/A')

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->queui_sys }}</span>
                    <select id="edit-queui_sys-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>Queuing</option>
                        <option value="OK" {{$computer->posts->queui_sys == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->queui_sys == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            @else

                <td colspan="4" id="itemtype">
                    <span class="edit-post-input">{{ $computer->posts->queui_sys }}</span>
                    <select id="edit-queui_sys-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                        <option disabled selected hidden>QUEUING</option>
                        <option value="OK" {{$computer->posts->queui_sys == "OK" ? 'selected' : ''}}>OK</option>
                        <option value="N/A" {{$computer->posts->queui_sys == "N/A" ? 'selected' : ''}}>N/A</option>
                    </select>
                </td>

                {{-- Status --}}
                {{-- 1st Status --}}
                @if (empty($computer->firststatus->queui_stats))
                    <td>
                        <input id="edit-queui-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                        <input id="queui-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                    </td>
                    <td><input id="edit-queui-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                        <input id="queui-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                    </td>
                @elseif($computer->firststatus->queui_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-queui-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-queui-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-queui-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-queui-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
                
                    {{-- 2nd Quarter --}}
                @if (empty($computer->secondstatus->queui_stats))
                    <td>
                        <input id="edit-queui-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                        <input id="queui-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                    </td>
                    <td><input id="edit-queui-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                        <input id="queui-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                    </td>
                @elseif($computer->secondstatus->queui_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-queui-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-queui-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-queui-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-queui-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 3rd Quarter --}}
                @if (empty($computer->thirdstatus->queui_stats))
                    <td>
                        <input id="edit-queui-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                        <input id="queui-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                    </td>
                    <td><input id="edit-queui-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                        <input id="queui-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                    </td>
                @elseif($computer->thirdstatus->queui_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-queui-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-queui-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-queui-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-queui-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif

                    {{-- 4th Quarter --}}
                @if (empty($computer->forthstatus->queui_stats))
                    <td>
                        <input id="edit-queui-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                        <input id="queui-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                    </td>
                    <td><input id="edit-queui-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                        <input id="queui-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                    </td>
                @elseif($computer->forthstatus->queui_stats == "OK")
                    <td>
                        <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                        <input id="edit-queui-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <input id="edit-queui-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @else
                    <td>
                        <input id="edit-queui-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->queui_stats == 'OK' ? 'checked' : '' }} />
                    </td>
                    <td>
                        <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                        <input id="edit-queui-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->queui_stats == 'DEF' ? 'checked' : '' }} />
                    </td>
                @endif
            @endif
        </tr>

        {{-- WEBLIS --}}
        <tr>
            <th colspan="4">WEBLIS</th>
                @if(empty($computer->posts->weblis))
                    <td colspan="4" id="itemtype">
                        <select id="edit-weblis-input" name="weblis" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100">
                            <option disabled selected hidden>Weblis</option>
                            <option value="OK">OK</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @elseif($computer->posts->weblis == 'N/A')

                    <td colspan="4" id="itemtype">
                        <span class="edit-post-input">{{ $computer->posts->weblis }}</span>
                        <select id="edit-weblis-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                            <option disabled selected hidden>Weblis</option>
                            <option value="OK" {{$computer->posts->weblis == "OK" ? 'selected' : ''}}>OK</option>
                            <option value="N/A" {{$computer->posts->weblis == "N/A" ? 'selected' : ''}}>N/A</option>
                        </select>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @else

                    <td colspan="4" id="itemtype">
                        <span class="edit-post-input">{{ $computer->posts->weblis }}</span>
                        <select id="edit-weblis-input" class="edit-input-post-software d-none rounded border border-secondary pl-1 w-100" >
                            <option disabled selected hidden>Weblis</option>
                            <option value="OK" {{$computer->posts->weblis == "OK" ? 'selected' : ''}}>OK</option>
                            <option value="N/A" {{$computer->posts->weblis == "N/A" ? 'selected' : ''}}>N/A</option>
                        </select>
                    </td>

                    {{-- Status --}}
                    {{-- 1st Status --}}
                    @if (empty($computer->firststatus->weblis_stats))
                        <td>
                            <input id="edit-weblis-ok1" class="d-none software-1stedit-checkbox ok1" type="checkbox"  required />
                            <input id="weblis-status1-ok" class="d-none soft1stcheckbox ok1" type="checkbox"  required />
                        </td>
                        <td><input id="edit-weblis-def1" class="d-none software-1stedit-checkbox def1" type="checkbox" required />
                            <input id="weblis-status1-def" class="d-none soft1stcheckbox def1" type="checkbox"  required />
                        </td>
                    @elseif($computer->firststatus->weblis_stats == "OK")
                        <td>
                            <strong class="statuscheck software-edit-check1"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-weblis-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <input id="edit-weblis-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @else
                        <td>
                            <input id="edit-weblis-ok1" class="d-none software-1stedit-checkbox" type="checkbox"  {{ $computer->firststatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <strong class="statusdef software-edit-check1"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-weblis-def1" class="d-none software-1stedit-checkbox" type="checkbox" {{ $computer->firststatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
                    
                        {{-- 2nd Quarter --}}
                    @if (empty($computer->secondstatus->weblis_stats))
                        <td>
                            <input id="edit-weblis-ok2" class="d-none software-2ndedit-checkbox ok2" type="checkbox"  required />
                            <input id="weblis-status2-ok" class="d-none soft2ndcheckbox ok2" type="checkbox"  required />
                        </td>
                        <td><input id="edit-weblis-def2" class="d-none software-2ndedit-checkbox def2" type="checkbox" required />
                            <input id="weblis-status2-def" class="d-none soft2ndcheckbox def2" type="checkbox"  required />
                        </td>
                    @elseif($computer->secondstatus->weblis_stats == "OK")
                        <td>
                            <strong class="statuscheck software-edit-check2"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-weblis-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <input id="edit-weblis-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @else
                        <td>
                            <input id="edit-weblis-ok2" class="d-none software-2ndedit-checkbox" type="checkbox"  {{ $computer->secondstatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <strong class="statusdef software-edit-check2"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-weblis-def2" class="d-none software-2ndedit-checkbox" type="checkbox" {{ $computer->secondstatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 3rd Quarter --}}
                    @if (empty($computer->thirdstatus->weblis_stats))
                        <td>
                            <input id="edit-weblis-ok3" class="d-none software-3rdedit-checkbox ok3" type="checkbox"  required />
                            <input id="weblis-status3-ok" class="d-none soft3rdcheckbox ok3" type="checkbox"  required />
                        </td>
                        <td><input id="edit-weblis-def3" class="d-none software-3rdedit-checkbox def3" type="checkbox" required />
                            <input id="weblis-status3-def" class="d-none soft3rdcheckbox def3" type="checkbox"  required />
                        </td>
                    @elseif($computer->thirdstatus->weblis_stats == "OK")
                        <td>
                            <strong class="statuscheck software-edit-check3"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-weblis-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <input id="edit-weblis-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @else
                        <td>
                            <input id="edit-weblis-ok3" class="d-none software-3rdedit-checkbox" type="checkbox"  {{ $computer->thirdstatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <strong class="statusdef software-edit-check3"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-weblis-def3" class="d-none software-3rdedit-checkbox" type="checkbox" {{ $computer->thirdstatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif

                        {{-- 4th Quarter --}}
                    @if (empty($computer->forthstatus->weblis_stats))
                        <td>
                            <input id="edit-weblis-ok4" class="d-none software-4thedit-checkbox ok4" type="checkbox"  required />
                            <input id="weblis-status4-ok" class="d-none soft4thcheckbox ok4" type="checkbox"  required />
                        </td>
                        <td><input id="edit-weblis-def4" class="d-none software-4thedit-checkbox def4" type="checkbox" required />
                            <input id="weblis-status4-def" class="d-none soft4thcheckbox def4" type="checkbox"  required />
                        </td>
                    @elseif($computer->forthstatus->weblis_stats == "OK")
                        <td>
                            <strong class="statuscheck software-edit-check4"> <i class="fas fa-check"></i> </strong>
                            <input id="edit-weblis-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <input id="edit-weblis-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @else
                        <td>
                            <input id="edit-weblis-ok4" class="d-none software-4thedit-checkbox" type="checkbox"  {{ $computer->forthstatus->weblis_stats == 'OK' ? 'checked' : '' }} />
                        </td>
                        <td>
                            <strong class="statusdef software-edit-check4"> <i class="fas fa-times-circle"></i> </strong>
                            <input id="edit-weblis-def4" class="d-none software-4thedit-checkbox" type="checkbox" {{ $computer->forthstatus->weblis_stats == 'DEF' ? 'checked' : '' }} />
                        </td>
                    @endif
                @endif
        </tr>

      <tr>
        <th colspan="4">APPL</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">DAI Inventory</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">DAI DMS</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">Polytech LIS</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">BBIS</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">IPOS</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">Patient ID System</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">Patient ID Scanner</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">Patient Watcher's</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">Patient Wristband</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th colspan="4">PHIC Portal</th>
        <td colspan="4" id="itemtype">N/A</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
        {{-- Buttons --}}
    @if(Auth::user()->username !== 'guest')
      <tr>
        <th colspan="4"></th>
        <td colspan="4">
        
            {{-- @if(!$computer->posts->cpu || !$computer->posts->monitor) --}}
            @if(!$computer->posts || !$computer->posts->cpu || !$computer->posts->monitor || !$computer->posts->os)
                <button type="button" id="edit-preventive-software" class="btn-start-preventive bg-warning"><i class="fas fa-pencil-alt"></i> Add Preventive</button>
                <button type="submit" id="edit-save-preventive-software" class="d-none btn-save-preventive button-disable-post" form="edit_computer_preventive_software">Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                <button type="button" id="edit-reload-software" class="closereload d-none float-right"><i class="fas fa-undo-alt"></i></button>
            @else
                {{-- <button type="button" id="edit-preventive" class="btn-start-preventive">Edit</button> --}}
                <button type="button" id="edit-preventive-software" class="btn-start-preventive bg-warning"><i class="fas fa-pencil-alt"></i> Edit</button>
                <button type="submit" id="edit-save-preventive-software" class="d-none btn-save-preventive button-disable-post" form="edit_computer_preventive_software">Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                <button type="button" id="edit-reload-software" class="closereload d-none float-right"><i class="fas fa-undo-alt"></i></button>
            @endif
        </td>
            {{-- 1st Status  button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if(empty($computer->firststatus->cpu_stats) && empty($computer->firststatus->monitor_stats))
                        @if($computer->posts->os)
                            <button onclick="alert('Please check the Hardware first, before you proceed to this section')" class="softstatusbutton-add alert-add"><i class="fas fa-plus"></i> Add</button>
                        @endif
                    @else  
                        @if (empty($computer->firststatus->os_stats))
                            <button type="button" id="softstatusbutton1" class="softstatusbutton-add"><i class="fas fa-plus"></i> Add</button>
                            <button type="submit" id="softsavestatusbutton1" class="d-none softstatusbutton-save validsave1 button-disable-status1" form="softfirst_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" id="softsavestatusbutton1" class="d-none softstatusbutton-close1 closereload float-right"><i class="fas fa-times"></i></button>
                        @else
                            <button type="button" id="software-edit-button1" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 1st Quarter</button>
                            <button type="submit" id="software-update-statusbutton1" class="d-none statusbutton-update button-disable-status1" form="software_first_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" class="d-none software-update-statusbutton-close1 closereload float-right"><i class="fas fa-times"></i></button>
                        @endif
                    @endif
                @endif
            </td>
            {{-- 2nd Status  button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if(empty($computer->secondstatus->cpu_stats) && empty($computer->secondstatus->monitor_stats))
                        @if($computer->posts->os)
                            <button onclick="alert('Please check the Hardware first, before you proceed to this section')" class="softstatusbutton-add alert-add"><i class="fas fa-plus"></i> Add</button>
                        @endif
                    @else 

                        @if (empty($computer->secondstatus->os_stats))
                            <button type="button" id="softstatusbutton2" class="softstatusbutton-add"><i class="fas fa-plus"></i> Add</button>
                            <button type="submit" id="softsavestatusbutton2" class="d-none softstatusbutton-save validsave2 button-disable-status2" form="softsecond_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" id="softsavestatusbutton2" class="d-none softstatusbutton-close2 closereload float-right"><i class="fas fa-times"></i></button>
                        @else
                            <button type="button" id="software-edit-button2" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 2nd Quarter</button>
                            <button type="submit" id="software-update-statusbutton2" class="d-none statusbutton-update button-disable-status2" form="software_second_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" class="d-none software-update-statusbutton-close2 closereload float-right"><i class="fas fa-times"></i></button>
                        @endif
                    @endif
                @endif
            </td> 
            
            {{-- 3rd Status button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if(empty($computer->thirdstatus->cpu_stats) && empty($computer->thirdstatus->monitor_stats))
                        @if($computer->posts->os)
                            <button onclick="alert('Please check the Hardware first, before you proceed to this section')" class="softstatusbutton-add alert-add"><i class="fas fa-plus"></i> Add</button>
                        @endif
                    @else 

                        @if (empty($computer->thirdstatus->os_stats))
                            <button type="button" id="softstatusbutton3" class="softstatusbutton-add"><i class="fas fa-plus"></i> Add</button>
                            <button type="submit" id="softsavestatusbutton3" class="d-none softstatusbutton-save validsave3 button-disable-status3" form="softthird_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" id="softsavestatusbutton3" class="d-none softstatusbutton-close3 closereload float-right"><i class="fas fa-times"></i></button>
                        @else
                            <button type="button" id="software-edit-button3" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 3rd Quarter</button>
                            <button type="submit" id="software-update-statusbutton3" class="d-none statusbutton-update button-disable-status3" form="software_third_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" class="d-none software-update-statusbutton-close3 closereload float-right"><i class="fas fa-times"></i></button>
                        @endif
                    @endif
                @endif
            </td>

            {{-- 4th Status button save/close --}}
            <td colspan="2">
                @if($computer->posts)
                    @if(empty($computer->forthstatus->cpu_stats) && empty($computer->forthstatus->monitor_stats))
                        @if($computer->posts->os)
                            <button onclick="alert('Please check the Hardware first, before you proceed to this section')" class="softstatusbutton-add alert-add"><i class="fas fa-plus"></i> Add</button>
                        @endif
                    @else 

                        @if (empty($computer->forthstatus->os_stats))
                            <button type="button" id="softstatusbutton4" class="softstatusbutton-add"><i class="fas fa-plus"></i> Add</button>
                            <button type="submit" id="softsavestatusbutton4" class="d-none softstatusbutton-save validsave4 button-disable-status4" form="softforth_status"><i class="fas fa-plus"></i> Save <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" id="softsavestatusbutton4" class="d-none softstatusbutton-close4 closereload float-right"><i class="fas fa-times"></i></button>
                        @else
                            <button type="button" id="software-edit-button4" class="statusbutton-edit bg-success"><i class="fas fa-pencil-alt"></i> Edit 4th Quarter</button>
                            <button type="submit" id="software-update-statusbutton4" class="d-none statusbutton-update button-disable-status4" form="software_forth_status_update"><i class="fas fa-wrench"></i> Update <i class="spinner fa fa-spinner fa-spin float-right mt-1 ml-1"></i></button>
                            <button type="button" class="d-none software-update-statusbutton-close4 closereload float-right"><i class="fas fa-times"></i></button>
                        @endif
                    @endif
                @endif
            </td>
      </tr>
    @endif
      <tr>
        <td colspan="16">Check appropriate box with ( <i class="fas fa-check"></i> ) If Maintenance activity is performed ( <i class="fas fa-times-circle"></i> ) mark if not.
          (Please see separate "Preventive Maintenance (Workstation)" Sheet.)</td>
      </tr>
    </tbody>
</table>
        @include('posts.post_preventive_form')
        @include('posts.edit_post_preventive_form')
        @include('posts.post_form')
        @include('posts.edit_form')                     
