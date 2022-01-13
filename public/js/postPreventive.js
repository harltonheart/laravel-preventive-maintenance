$(document).ready(function () {

    //------------------------------HARDWARE-------------------------------//

    //ADD PREVENTIVE BUTTON
    $('#add-preventive').on('click', function () { //show the input
        $(this).hide()
        $('#save-preventive').removeClass('d-none')
        $('.input-post').removeClass('d-none')
        $('#reload').removeClass('d-none')
    })


    //MOUSE INPUT
    $('#mouse-input').on('change', function () {
        let mouse = $("#mouse-input").val();
        $("#mouse-form").val(mouse);
    })


    //KEYBOARD INPUT
    $('#keyboard-input').on('change', function () {
        let keyboard = $("#keyboard-input").val();
        $("#keyboard-form").val(keyboard);
    })


    //MONITOR INPUT
    $('#monitor-input').on('change', function () {
        let monitor = $("#monitor-input").val();
        $("#monitor-form").val(monitor);
    })


    //AVRUPS INPUT
    $('#avrups-input').on('change', function () {
        let avrups = $("#avrups-input").val();
        $("#avrups-form").val(avrups);
    })


    //PRINTER INPUT
    $('#printer-input').on('change', function () {
        let printer = $("#printer-input").val();
        $("#printer-form").val(printer);
    })


    //CPU INPUT
    $('#cpu-input').on('change', function () {
        let cpu = $("#cpu-input").val();
        $("#cpu-form").val(cpu);
    })


    //BARCODE INPUT
    $('#barcode-input').on('change', function () {
        let barcode = $("#barcode-input").val();
        $("#barcode-form").val(barcode);
    })



    //------------------------------SOFTWARE-------------------------------//

    //ADD PREVENTIVE BUTTON
    $('#add-preventive-software').on('click', function () { //show the input
        $(this).hide()
        $('#save-preventive-software').removeClass('d-none')
        $('.input-post-software').removeClass('d-none')
        $('#reload-software').removeClass('d-none')
    })


    //SYSTEM BOOT INPUT
    $('#sysboot-input').on('change', function () {
        let sysboot = $("#sysboot-input").val();
        $("#sysboot-form").val(sysboot);
    })
    if ($("#sysboot-input").prop('value', null)) {
        $("#sysboot-form").val('N/A');
    }


    //OS INPUT
    $('#os-input').on('change', function () {
        let os = $("#os-input").val();
        $("#os-form").val(os);
    })


    //ANTIVIRUS INPUT
    $('#antivirus-input').on('change', function () {
        let antivirus = $("#antivirus-input").val();
        $("#antivirus-form").val(antivirus);
    })


    //ms_office INPUT
    $('#ms_office-input').on('change', function () {
        let ms_office = $("#ms_office-input").val();
        $("#ms_office-form").val(ms_office);
    })



    //his INPUT
    $('#his-input').on('change', function () {
        let his = $("#his-input").val();
        $("#his-form").val(his);
    })


    //mms INPUT
    $('#mms-input').on('change', function () {
        let mms = $("#mms-input").val();
        $("#mms-form").val(mms);
    })


    //emr INPUT
    $('#emr-input').on('change', function () {
        let emr = $("#emr-input").val();
        $("#emr-form").val(emr);
    })


    //queui_sys INPUT
    $('#queui_sys-input').on('change', function () {
        let queui_sys = $("#queui_sys-input").val();
        $("#queui_sys-form").val(queui_sys);
    })


    //weblis INPUT
    $('#weblis-input').on('change', function () {
        let weblis = $("#weblis-input").val();
        $("#weblis-form").val(weblis);
    })

})