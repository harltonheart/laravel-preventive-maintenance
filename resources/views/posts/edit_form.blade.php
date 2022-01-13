
                    {{-- HARDWARE --}}
        
                @if($computer->firststatus)
                    {{-- 1st Status --}}
                <form id="first_status_update" action="{{ route('update.first', $computer->firststatus->id )}}" method="post" class="d-none form-prevent-status1" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="mouse_stats" id="mouse_edit_status1" value="{{ ($computer->firststatus->mouse_stats == 'OK') ? 'OK' : (($computer->firststatus->mouse_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="kb_stats" id="keyboard_edit_status1" value="{{ ($computer->firststatus->kb_stats == 'OK') ? 'OK' : (($computer->firststatus->kb_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="monitor_stats" id="monitor_edit_status1" value="{{ ($computer->firststatus->monitor_stats == 'OK') ? 'OK' : (($computer->firststatus->monitor_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avrups_stats" id="avrups_edit_status1" value="{{ ($computer->firststatus->avrups_stats == 'OK') ? 'OK' : (($computer->firststatus->avrups_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="printer_stats" id="printer_edit_status1" value="{{ ($computer->firststatus->printer_stats == 'OK') ? 'OK' : (($computer->firststatus->printer_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="cpu_stats" id="cpu_edit_status1" value="{{ ($computer->firststatus->cpu_stats == 'OK') ? 'OK' : (($computer->firststatus->cpu_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="bargun_stats" id="barcode_edit_status1" value="{{ ($computer->firststatus->bargun_stats == 'OK') ? 'OK' : (($computer->firststatus->bargun_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="created_at" id="firstdate-form" value="{{ old('created_at') ?? $computer->firststatus->created_at->format('Y-m-d') }}">
                </form>
                @endif
                
                @if($computer->secondstatus)
                        {{-- 2nd Status --}}
                <form id="second_status_update" action="{{ route('update.second', $computer->secondstatus->id )}}" method="post" class="d-none form-prevent-status2" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="mouse_stats" id="mouse_edit_status2" value="{{ ($computer->secondstatus->mouse_stats == 'OK') ? 'OK' : (($computer->secondstatus->mouse_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="kb_stats" id="keyboard_edit_status2" value="{{ ($computer->secondstatus->kb_stats == 'OK') ? 'OK' : (($computer->secondstatus->kb_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="monitor_stats" id="monitor_edit_status2" value="{{ ($computer->secondstatus->monitor_stats == 'OK') ? 'OK' : (($computer->secondstatus->monitor_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avrups_stats" id="avrups_edit_status2" value="{{ ($computer->secondstatus->avrups_stats == 'OK') ? 'OK' : (($computer->secondstatus->avrups_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="printer_stats" id="printer_edit_status2" value="{{ ($computer->secondstatus->printer_stats == 'OK') ? 'OK' : (($computer->secondstatus->printer_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="cpu_stats" id="cpu_edit_status2" value="{{ ($computer->secondstatus->cpu_stats == 'OK') ? 'OK' : (($computer->secondstatus->cpu_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="bargun_stats" id="barcode_edit_status2" value="{{ ($computer->secondstatus->bargun_stats == 'OK') ? 'OK' : (($computer->secondstatus->bargun_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="created_at" id="seconddate-form" value="{{ old('created_at') ?? $computer->secondstatus->created_at->format('Y-m-d') }}">
                </form>
                @endif
                
                @if($computer->thirdstatus)
                        {{-- 3rdStatus --}}
                <form id="third_status_update" action="{{ route('update.third', $computer->thirdstatus->id )}}" method="post" class="d-none form-prevent-status3" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="mouse_stats" id="mouse_edit_status3" value="{{ ($computer->thirdstatus->mouse_stats == 'OK') ? 'OK' : (($computer->thirdstatus->mouse_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="kb_stats" id="keyboard_edit_status3" value="{{ ($computer->thirdstatus->kb_stats == 'OK') ? 'OK' : (($computer->thirdstatus->kb_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="monitor_stats" id="monitor_edit_status3" value="{{ ($computer->thirdstatus->monitor_stats == 'OK') ? 'OK' : (($computer->thirdstatus->monitor_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avrups_stats" id="avrups_edit_status3" value="{{ ($computer->thirdstatus->avrups_stats == 'OK') ? 'OK' : (($computer->thirdstatus->avrups_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="printer_stats" id="printer_edit_status3" value="{{ ($computer->thirdstatus->printer_stats == 'OK') ? 'OK' : (($computer->thirdstatus->printer_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="cpu_stats" id="cpu_edit_status3" value="{{ ($computer->thirdstatus->cpu_stats == 'OK') ? 'OK' : (($computer->thirdstatus->cpu_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="bargun_stats" id="barcode_edit_status3" value="{{ ($computer->thirdstatus->bargun_stats == 'OK') ? 'OK' : (($computer->thirdstatus->bargun_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="created_at" id="thirddate-form" value="{{ old('created_at') ?? $computer->thirdstatus->created_at->format('Y-m-d') }}">
                </form>
                @endif
                
                @if($computer->forthstatus)
                        {{-- 4thStatus --}}
                <form id="forth_status_update" action="{{ route('update.forth', $computer->forthstatus->id )}}" method="post" class="d-none form-prevent-status4" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="mouse_stats" id="mouse_edit_status4" value="{{ ($computer->forthstatus->mouse_stats == 'OK') ? 'OK' : (($computer->forthstatus->mouse_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="kb_stats" id="keyboard_edit_status4" value="{{ ($computer->forthstatus->kb_stats == 'OK') ? 'OK' : (($computer->forthstatus->kb_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="monitor_stats" id="monitor_edit_status4" value="{{ ($computer->forthstatus->monitor_stats == 'OK') ? 'OK' : (($computer->forthstatus->monitor_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avrups_stats" id="avrups_edit_status4" value="{{ ($computer->forthstatus->avrups_stats == 'OK') ? 'OK' : (($computer->forthstatus->avrups_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="printer_stats" id="printer_edit_status4" value="{{ ($computer->forthstatus->printer_stats == 'OK') ? 'OK' : (($computer->forthstatus->printer_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="cpu_stats" id="cpu_edit_status4" value="{{ ($computer->forthstatus->cpu_stats == 'OK') ? 'OK' : (($computer->forthstatus->cpu_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="bargun_stats" id="barcode_edit_status4" value="{{ ($computer->forthstatus->bargun_stats == 'OK') ? 'OK' : (($computer->forthstatus->bargun_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="created_at" id="forthdate-form" value="{{ old('created_at') ?? $computer->forthstatus->created_at->format('Y-m-d') }}">
                </form>
                @endif
                
                
                
                
                
                
                                    {{-- SOFTWARE --}}
                        
                @if($computer->firststatus)
                    {{-- 1st Status --}}
                <form id="software_first_status_update" action="{{ route('update.first', $computer->firststatus->id )}}" method="post" class="d-none form-prevent-status1" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="sysboot_stats" id="sysboot_edit_status1" value="{{ ($computer->firststatus->sysboot_stats == 'OK') ? 'OK' : (($computer->firststatus->sysboot_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="os_stats" id="os_edit_status1" value="{{ ($computer->firststatus->os_stats == 'OK') ? 'OK' : (($computer->firststatus->os_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avirus_stats" id="avirus_edit_status1" value="{{ ($computer->firststatus->avirus_stats == 'OK') ? 'OK' : (($computer->firststatus->avirus_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="msoffice_stats" id="msoffice_edit_status1" value="{{ ($computer->firststatus->msoffice_stats == 'OK') ? 'OK' : (($computer->firststatus->msoffice_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="his_stats" id="his_edit_status1" value="{{ ($computer->firststatus->his_stats == 'OK') ? 'OK' : (($computer->firststatus->his_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="mms_stats" id="mms_edit_status1" value="{{ ($computer->firststatus->mms_stats == 'OK') ? 'OK' : (($computer->firststatus->mms_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="emr_stats" id="emr_edit_status1" value="{{ ($computer->firststatus->emr_stats == 'OK') ? 'OK' : (($computer->firststatus->emr_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="queui_stats" id="queui_edit_status1" value="{{ ($computer->firststatus->queui_stats == 'OK') ? 'OK' : (($computer->firststatus->queui_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="weblis_stats" id="weblis_edit_status1" value="{{ ($computer->firststatus->weblis_stats == 'OK') ? 'OK' : (($computer->firststatus->weblis_stats == 'DEF') ? 'DEF' : '') }}">
                </form>
                @endif
                
                @if($computer->secondstatus)
                        {{-- 2nd Status --}}
                <form id="software_second_status_update" action="{{ route('update.second', $computer->secondstatus->id )}}" method="post" class="d-none form-prevent-status2" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="sysboot_stats" id="sysboot_edit_status2" value="{{ ($computer->secondstatus->sysboot_stats == 'OK') ? 'OK' : (($computer->secondstatus->sysboot_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="os_stats" id="os_edit_status2" value="{{ ($computer->secondstatus->os_stats == 'OK') ? 'OK' : (($computer->secondstatus->os_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avirus_stats" id="avirus_edit_status2" value="{{ ($computer->secondstatus->avirus_stats == 'OK') ? 'OK' : (($computer->secondstatus->avirus_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="msoffice_stats" id="msoffice_edit_status2" value="{{ ($computer->secondstatus->msoffice_stats == 'OK') ? 'OK' : (($computer->secondstatus->msoffice_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="his_stats" id="his_edit_status2" value="{{ ($computer->secondstatus->his_stats == 'OK') ? 'OK' : (($computer->secondstatus->his_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="mms_stats" id="mms_edit_status2" value="{{ ($computer->secondstatus->mms_stats == 'OK') ? 'OK' : (($computer->secondstatus->mms_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="emr_stats" id="emr_edit_status2" value="{{ ($computer->secondstatus->emr_stats == 'OK') ? 'OK' : (($computer->secondstatus->emr_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="queui_stats" id="queui_edit_status2" value="{{ ($computer->secondstatus->queui_stats == 'OK') ? 'OK' : (($computer->secondstatus->queui_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="weblis_stats" id="weblis_edit_status2" value="{{ ($computer->secondstatus->weblis_stats == 'OK') ? 'OK' : (($computer->secondstatus->weblis_stats == 'DEF') ? 'DEF' : '') }}">
                </form>
                @endif
                
                @if($computer->thirdstatus)
                        {{-- 3rdStatus --}}
                <form id="software_third_status_update" action="{{ route('update.third', $computer->thirdstatus->id )}}" method="post" class="d-none form-prevent-status3" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="sysboot_stats" id="sysboot_edit_status3" value="{{ ($computer->thirdstatus->sysboot_stats == 'OK') ? 'OK' : (($computer->thirdstatus->sysboot_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="os_stats" id="os_edit_status3" value="{{ ($computer->thirdstatus->os_stats == 'OK') ? 'OK' : (($computer->thirdstatus->os_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avirus_stats" id="avirus_edit_status3" value="{{ ($computer->thirdstatus->avirus_stats == 'OK') ? 'OK' : (($computer->thirdstatus->avirus_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="msoffice_stats" id="msoffice_edit_status3" value="{{ ($computer->thirdstatus->msoffice_stats == 'OK') ? 'OK' : (($computer->thirdstatus->msoffice_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="his_stats" id="his_edit_status3" value="{{ ($computer->thirdstatus->his_stats == 'OK') ? 'OK' : (($computer->thirdstatus->his_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="mms_stats" id="mms_edit_status3" value="{{ ($computer->thirdstatus->mms_stats == 'OK') ? 'OK' : (($computer->thirdstatus->mms_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="emr_stats" id="emr_edit_status3" value="{{ ($computer->thirdstatus->emr_stats == 'OK') ? 'OK' : (($computer->thirdstatus->emr_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="queui_stats" id="queui_edit_status3" value="{{ ($computer->thirdstatus->queui_stats == 'OK') ? 'OK' : (($computer->thirdstatus->queui_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="weblis_stats" id="weblis_edit_status3" value="{{ ($computer->thirdstatus->weblis_stats == 'OK') ? 'OK' : (($computer->thirdstatus->weblis_stats == 'DEF') ? 'DEF' : '') }}">
                </form>
                @endif
                
                @if($computer->forthstatus)
                        {{-- 4thStatus --}}
                <form id="software_forth_status_update" action="{{ route('update.forth', $computer->forthstatus->id )}}" method="post" class="d-none form-prevent-status4" >
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="sysboot_stats" id="sysboot_edit_status4" value="{{ ($computer->forthstatus->sysboot_stats == 'OK') ? 'OK' : (($computer->forthstatus->sysboot_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="os_stats" id="os_edit_status4" value="{{ ($computer->forthstatus->os_stats == 'OK') ? 'OK' : (($computer->forthstatus->os_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="avirus_stats" id="avirus_edit_status4" value="{{ ($computer->forthstatus->avirus_stats == 'OK') ? 'OK' : (($computer->forthstatus->avirus_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="msoffice_stats" id="msoffice_edit_status4" value="{{ ($computer->forthstatus->msoffice_stats == 'OK') ? 'OK' : (($computer->forthstatus->msoffice_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="his_stats" id="his_edit_status4" value="{{ ($computer->forthstatus->his_stats == 'OK') ? 'OK' : (($computer->forthstatus->his_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="mms_stats" id="mms_edit_status4" value="{{ ($computer->forthstatus->mms_stats == 'OK') ? 'OK' : (($computer->forthstatus->mms_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="emr_stats" id="emr_edit_status4" value="{{ ($computer->forthstatus->emr_stats == 'OK') ? 'OK' : (($computer->forthstatus->emr_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="queui_stats" id="queui_edit_status4" value="{{ ($computer->forthstatus->queui_stats == 'OK') ? 'OK' : (($computer->forthstatus->queui_stats == 'DEF') ? 'DEF' : '') }}">
                    <input type="hidden" name="weblis_stats" id="weblis_edit_status4" value="{{ ($computer->forthstatus->weblis_stats == 'OK') ? 'OK' : (($computer->forthstatus->weblis_stats == 'DEF') ? 'DEF' : '') }}">
                </form>
                @endif