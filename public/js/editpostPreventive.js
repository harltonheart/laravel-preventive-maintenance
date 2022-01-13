$(document).ready(function () {


    //------------------------------HARDWARE-------------------------------//

    //Edit PREVENTIVE BUTTON
    $('#edit-preventive').on('click', function () { //show the input
        $(this).hide()
        $('#edit-save-preventive').removeClass('d-none')
        $('.edit-input-post').removeClass('d-none')
        $('.post-input').addClass('d-none')
        $('#edit-reload').removeClass('d-none')


        $('#edit-button1').addClass('d-none')
        $('#edit-button2').addClass('d-none')
        $('#edit-button3').addClass('d-none')
        $('#edit-button4').addClass('d-none')
    })

    //MOUSE INPUT
    $('#edit-mouse-input').on('change', function () {
        let mouse = $("#edit-mouse-input").val();
        $("#edit-mouse-form").val(mouse);
    })

    //KEYBOARD INPUT
    $('#edit-keyboard-input').on('change', function () {
        let keyboard = $("#edit-keyboard-input").val();
        $("#edit-keyboard-form").val(keyboard);
    })


    //MONITOR INPUT
    $('#edit-monitor-input').on('change', function () {
        let monitor = $("#edit-monitor-input").val();
        $("#edit-monitor-form").val(monitor);
    })


    //AVRUPS INPUT
    $('#edit-avrups-input').on('change', function () {
        let avrups = $("#edit-avrups-input").val();
        $("#edit-avrups-form").val(avrups);
    })


    //PRINTER INPUT
    $('#edit-printer-input').on('change', function () {
        let printer = $("#edit-printer-input").val();
        $("#edit-printer-form").val(printer);
    })


    //CPU INPUT
    $('#edit-cpu-input').on('change', function () {
        let cpu = $("#edit-cpu-input").val();
        $("#edit-cpu-form").val(cpu);
    })


    //BARCODE INPUT
    $('#edit-barcode-input').on('change', function () {
        let barcode = $("#edit-barcode-input").val();
        $("#edit-barcode-form").val(barcode);
    })


    //------------------------------SOFTWARE-------------------------------//

    //EDIT PREVENTIVE BUTTON
    $('#edit-preventive-software').on('click', function () { //show the input
        $(this).hide()
        $('#edit-save-preventive-software').removeClass('d-none')
        $('.edit-input-post-software').removeClass('d-none')
        $('.edit-post-input').addClass('d-none')
        $('#edit-reload-software').removeClass('d-none')


        $('#software-edit-button1').addClass('d-none')
        $('#software-edit-button2').addClass('d-none')
        $('#software-edit-button3').addClass('d-none')
        $('#software-edit-button4').addClass('d-none')
    })


    //SYSTEM BOOT INPUT
    $('#edit-sysboot-input').on('change', function () {
        let sysboot = $("#edit-sysboot-input").val();
        $("#edit-sysboot-form").val(sysboot);
    })


    //OS INPUT
    $('#edit-os-input').on('change', function () {
        let os = $("#edit-os-input").val();
        $("#edit-os-form").val(os);
    })


    //ANTIVIRUS INPUT
    $('#edit-antivirus-input').on('change', function () {
        let antivirus = $("#edit-antivirus-input").val();
        $("#edit-antivirus-form").val(antivirus);
    })


    //ms_office INPUT
    $('#edit-ms_office-input').on('change', function () {
        let ms_office = $("#edit-ms_office-input").val();
        $("#edit-ms_office-form").val(ms_office);
    })


    //his INPUT
    $('#edit-his-input').on('change', function () {
        let his = $("#edit-his-input").val();
        $("#edit-his-form").val(his);
    })


    //mms INPUT
    $('#edit-mms-input').on('change', function () {
        let mms = $("#edit-mms-input").val();
        $("#edit-mms-form").val(mms);
    })


    //emr INPUT
    $('#edit-emr-input').on('change', function () {
        let emr = $("#edit-emr-input").val();
        $("#edit-emr-form").val(emr);
    })


    //queui_sys INPUT
    $('#edit-queui_sys-input').on('change', function () {
        let queui_sys = $("#edit-queui_sys-input").val();
        $("#edit-queui_sys-form").val(queui_sys);
    })


    //weblis INPUT
    $('#edit-weblis-input').on('change', function () {
        let weblis = $("#edit-weblis-input").val();
        $("#edit-weblis-form").val(weblis);
    })

})
