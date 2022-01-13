   

    {{-- HARDWARE --}}
    <form id="first_status" action="/computer/status/{{$computer->id}}/first" method="post" class="d-none form-prevent-status1" >
        @csrf
        <input type="hidden" name="mouse_stats" id="mouse_status1">
        <input type="hidden" name="kb_stats" id="keyboard_status1">
        <input type="hidden" name="monitor_stats" id="monitor_status1">
        <input type="hidden" name="avrups_stats" id="avrups_status1">
        <input type="hidden" name="printer_stats" id="printer_status1">
        <input type="hidden" name="cpu_stats" id="cpu_status1">
        <input type="hidden" name="bargun_stats" id="barcode_status1">
    </form>
@if($computer->firststatus)
    {{-- SOFTWARE --}}
    <form id="softfirst_status" action="/firststatus/{{ $computer->firststatus->computer_id }}" method="post" class="d-none form-prevent-status1" >
        @csrf
        @method('PATCH')
        <input type="hidden" name="sysboot_stats" id="softsysboot_status1">
        <input type="hidden" name="os_stats" id="softos_status1">
        <input type="hidden" name="avirus_stats" id="softantivirus_status1">
        <input type="hidden" name="msoffice_stats" id="softmsoffice_status1">
        <input type="hidden" name="his_stats" id="softhis_status1">
        <input type="hidden" name="mms_stats" id="softmms_status1">
        <input type="hidden" name="emr_stats" id="softemr_status1">
        <input type="hidden" name="queui_stats" id="softqueui_status1">
        <input type="hidden" name="weblis_stats" id="softweblis_status1">
    </form>
@endif


    {{-- HARDWARE --}}
    <form id="second_status" action="/computer/status/{{$computer->id}}/second" method="post" class="d-none form-prevent-status2" >
        @csrf
        <input type="hidden" name="mouse_stats" id="mouse_status2">
        <input type="hidden" name="kb_stats" id="keyboard_status2">
        <input type="hidden" name="monitor_stats" id="monitor_status2">
        <input type="hidden" name="avrups_stats" id="avrups_status2">
        <input type="hidden" name="printer_stats" id="printer_status2">
        <input type="hidden" name="cpu_stats" id="cpu_status2">
        <input type="hidden" name="bargun_stats" id="barcode_status2">
    </form>
@if($computer->secondstatus)
    {{-- SOFTWARE --}}
    <form id="softsecond_status" action="/secondstatus/{{ $computer->secondstatus->id }}" method="post" class="d-none form-prevent-status2" >
        @csrf
        @method('PATCH')
        <input type="hidden" name="sysboot_stats" id="softsysboot_status2">
        <input type="hidden" name="os_stats" id="softos_status2">
        <input type="hidden" name="avirus_stats" id="softantivirus_status2">
        <input type="hidden" name="msoffice_stats" id="softmsoffice_status2">
        <input type="hidden" name="his_stats" id="softhis_status2">
        <input type="hidden" name="mms_stats" id="softmms_status2">
        <input type="hidden" name="emr_stats" id="softemr_status2">
        <input type="hidden" name="queui_stats" id="softqueui_status2">
        <input type="hidden" name="weblis_stats" id="softweblis_status2">
    </form>
@endif


    {{-- HARDWARE --}}
    <form id="third_status" action="/computer/status/{{ $computer->id }}/third" method="post" class="d-none  form-prevent-status3" >
        @csrf
        <input type="hidden" name="mouse_stats" id="mouse_status3">
        <input type="hidden" name="kb_stats" id="keyboard_status3">
        <input type="hidden" name="monitor_stats" id="monitor_status3">
        <input type="hidden" name="avrups_stats" id="avrups_status3">
        <input type="hidden" name="printer_stats" id="printer_status3">
        <input type="hidden" name="cpu_stats" id="cpu_status3">
        <input type="hidden" name="bargun_stats" id="barcode_status3">
    </form>
@if($computer->thirdstatus)
    {{-- SOFTWARE --}}
    <form id="softthird_status" action="/thirdstatus/{{ $computer->thirdstatus->id }}" method="post" class="d-none form-prevent-status3" >
        @csrf
        @method('PATCH')
        <input type="hidden" name="sysboot_stats" id="softsysboot_status3">
        <input type="hidden" name="os_stats" id="softos_status3">
        <input type="hidden" name="avirus_stats" id="softantivirus_status3">
        <input type="hidden" name="msoffice_stats" id="softmsoffice_status3">
        <input type="hidden" name="his_stats" id="softhis_status3">
        <input type="hidden" name="mms_stats" id="softmms_status3">
        <input type="hidden" name="emr_stats" id="softemr_status3">
        <input type="hidden" name="queui_stats" id="softqueui_status3">
        <input type="hidden" name="weblis_stats" id="softweblis_status3">
    </form>
@endif


    {{-- HARDWARE --}}
    <form id="forth_status" action="/computer/status/{{ $computer->id }}/forth" method="post" class="d-none  form-prevent-status4" >
        @csrf
        <input type="hidden" name="mouse_stats" id="mouse_status4">
        <input type="hidden" name="kb_stats" id="keyboard_status4">
        <input type="hidden" name="monitor_stats" id="monitor_status4">
        <input type="hidden" name="avrups_stats" id="avrups_status4">
        <input type="hidden" name="printer_stats" id="printer_status4">
        <input type="hidden" name="cpu_stats" id="cpu_status4">
        <input type="hidden" name="bargun_stats" id="barcode_status4">
    </form>
@if($computer->forthstatus)    
    {{-- SOFTWARE --}}
    <form id="softforth_status" action="/forthstatus/{{ $computer->forthstatus->id }}" method="post" class="d-none form-prevent-status4" >
        @csrf
        @method('PATCH')
        <input type="hidden" name="sysboot_stats" id="softsysboot_status4">
        <input type="hidden" name="os_stats" id="softos_status4">
        <input type="hidden" name="avirus_stats" id="softantivirus_status4">
        <input type="hidden" name="msoffice_stats" id="softmsoffice_status4">
        <input type="hidden" name="his_stats" id="softhis_status4">
        <input type="hidden" name="mms_stats" id="softmms_status4">
        <input type="hidden" name="emr_stats" id="softemr_status4">
        <input type="hidden" name="queui_stats" id="softqueui_status4">
        <input type="hidden" name="weblis_stats" id="softweblis_status4">
    </form>
@endif



