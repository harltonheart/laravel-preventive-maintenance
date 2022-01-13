{{-- HARDWARE --}}
<form id="computer_preventive" action="{{ route('store.post', $computer->id)}}" method="post" class="d-none" >
    @csrf
    <input type="hidden" name="mouse" id="mouse-form">
    <input type="hidden" name="kboard" id="keyboard-form">
    <input type="hidden" name="monitor" id="monitor-form">
    <input type="hidden" name="avr_ups" id="avrups-form">
    <input type="hidden" name="printer" id="printer-form">
    <input type="hidden" name="cpu" id="cpu-form">
    <input type="hidden" name="bargun" id="barcode-form">
</form>

{{-- SOFTWARE --}}
<form id="computer_preventive_edit" action="{{ route('update.post', $computer->id)}}" method="post" class="d-none" >
    @csrf
    @method('PATCH')
    <input type="hidden" name="sysboot" id="sysboot-form">
    <input type="hidden" name="os" id="os-form">
    <input type="hidden" name="antivirus" id="antivirus-form">
    <input type="hidden" name="ms_office" id="ms_office-form">
    <input type="hidden" name="his" id="his-form">
    <input type="hidden" name="mms" id="mms-form">
    <input type="hidden" name="emr" id="emr-form">
    <input type="hidden" name="queui_sys" id="queui_sys-form">
    <input type="hidden" name="weblis" id="weblis-form">
</form>