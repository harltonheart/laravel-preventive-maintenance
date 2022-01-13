@if($computer->posts)
    {{-- HARDWARE --}}
    <form id="edit_computer_preventive_hardware" action="{{ route('update.post', $computer->posts->id)}}" method="post" class="d-none form-prevent-post-hw" >
        @csrf
        @method('PATCH')
        <input type="hidden" name="mouse" id="edit-mouse-form" value="{{ old('mouse') ?? $computer->posts->mouse }}">
        <input type="hidden" name="kboard" id="edit-keyboard-form" value="{{ old('kboard') ?? $computer->posts->kboard }}">
        <input type="hidden" name="monitor" id="edit-monitor-form" value="{{ old('monitor') ?? $computer->posts->monitor }}">
        <input type="hidden" name="avr_ups" id="edit-avrups-form" value="{{ old('avr_ups') ?? $computer->posts->avr_ups }}">
        <input type="hidden" name="printer" id="edit-printer-form" value="{{ old('printer') ?? $computer->posts->printer }}">
        <input type="hidden" name="cpu" id="edit-cpu-form" value="{{ old('cpu') ?? $computer->posts->cpu }}">
        <input type="hidden" name="bargun" id="edit-barcode-form" value="{{ old('bargun') ?? $computer->posts->bargun }}">
    </form>


    {{-- SOFTWARE --}}
    <form id="edit_computer_preventive_software" action="{{ route('update.post', $computer->posts->id)}}" method="post" class="d-none form-prevent-post-sw" >
        @csrf
        @method('PATCH')
        <input type="hidden" name="sysboot" id="edit-sysboot-form" value="{{ old('sysboot') ?? $computer->posts->sysboot }}">
        <input type="hidden" name="antivirus" id="edit-antivirus-form" value="{{ old('antivirus') ?? $computer->posts->antivirus }}">
        <input type="hidden" name="ms_office" id="edit-ms_office-form" value="{{ old('ms_office') ?? $computer->posts->ms_office }}">
        <input type="hidden" name="os" id="edit-os-form" value="{{ old('os') ?? $computer->posts->os }}">
        <input type="hidden" name="his" id="edit-his-form" value="{{ old('his') ?? $computer->posts->his }}">
        <input type="hidden" name="mms" id="edit-mms-form" value="{{ old('mms') ?? $computer->posts->mms }}">
        <input type="hidden" name="emr" id="edit-emr-form" value="{{ old('emr') ?? $computer->posts->emr }}">
        <input type="hidden" name="queui_sys" id="edit-queui_sys-form" value="{{ old('queui_sys') ?? $computer->posts->queui_sys }}">
        <input type="hidden" name="weblis" id="edit-weblis-form" value="{{ old('weblis') ?? $computer->posts->weblis }}">
    </form>

@endif