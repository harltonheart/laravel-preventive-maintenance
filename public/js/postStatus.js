$(document).ready(function () {
    //------------------------------------HARDWARE--------------------------------------///
    //----------------------------------------1st Status--------------------------------------//
    //mouse
    $('#mouse-status1-ok').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mouse_status1").val('OK'); //form id with input hidden
        } else {
            $("#mouse_status1").prop('value', null);
        }
    })
    $('#mouse-status1-def').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mouse_status1").val('DEF'); //form id with input hidden
        }
    })

    //keyboard
    $('#keyboard-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status1").val('OK');
        } else {
            $("#keyboard_status1").prop('value', null);
        }
    })
    $('#keyboard-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status1").val('DEF');
        } else {
            $("#keyboard_status1").prop('value', null);
        }
    })

    //Monitor
    $('#monitor-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status1").val('OK');
        } else {
            $("#monitor_status1").prop('value', null);
        }
    })
    $('#monitor-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status1").val('DEF');
        } else {
            $("#monitor_status1").prop('value', null);
        }
    })

    //avrups
    $('#avrups-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status1").val('OK');
        } else {
            $("#avrups_status1").prop('value', null);
        }
    })
    $('#avrups-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status1").val('DEF');
        } else {
            $("#avrups_status1").prop('value', null);
        }
    })

    //printer
    $('#printer-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status1").val('OK');
        } else {
            $("#printer_status1").prop('value', null);
        }
    })
    $('#printer-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status1").val('DEF');
        } else {
            $("#printer_status1").prop('value', null);
        }
    })

    //cpu
    $('#cpu-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status1").val('OK');
        } else {
            $("#cpu_status1").prop('value', null);
        }
    })
    $('#cpu-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status1").val('DEF');
        } else {
            $("#cpu_status1").prop('value', null);
        }
    })

    //barcode
    $('#barcode-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status1").val('OK');
        } else {
            $("#barcode_status1").prop('value', null);
        }
    })
    $('#barcode-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status1").val('DEF');
        } else {
            $("#barcode_status1").prop('value', null);
        }
    })






    //----------------------------------------2nd Status--------------------------------------//
    //mouse
    $('#mouse-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#mouse_status2").val('OK');
        } else {
            $("#mouse_status2").prop('value', null);
        }
    })
    $('#mouse-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#mouse_status2").val('DEF');
        } else {
            $("#mouse_status2").prop('value', null);
        }
    })

    //keyboard
    $('#keyboard-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status2").val('OK');
        } else {
            $("#keyboard_status2").prop('value', null);
        }
    })
    $('#keyboard-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status2").val('DEF');
        } else {
            $("#keyboard_status2").prop('value', null);
        }
    })

    //Monitor
    $('#monitor-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status2").val('OK');
        } else {
            $("#monitor_status2").prop('value', null);
        }
    })
    $('#monitor-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status2").val('DEF');
        } else {
            $("#monitor_status2").prop('value', null);
        }
    })

    //avrups
    $('#avrups-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status2").val('OK');
        } else {
            $("#avrups_status2").prop('value', null);
        }
    })
    $('#avrups-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status2").val('DEF');
        } else {
            $("#avrups_status2").prop('value', null);
        }
    })

    //printer
    $('#printer-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status2").val('OK');
        } else {
            $("#printer_status2").prop('value', null);
        }
    })
    $('#printer-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status2").val('DEF');
        } else {
            $("#printer_status2").prop('value', null);
        }
    })

    //cpu
    $('#cpu-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status2").val('OK');
        } else {
            $("#cpu_status2").prop('value', null);
        }
    })
    $('#cpu-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status2").val('DEF');
        } else {
            $("#cpu_status2").prop('value', null);
        }
    })

    //barcode
    $('#barcode-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status2").val('OK');
        } else {
            $("#barcode_status2").prop('value', null);
        }
    })
    $('#barcode-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status2").val('DEF');
        } else {
            $("#barcode_status2").prop('value', null);
        }
    })





    //----------------------------------------3rd Status--------------------------------------//
    //mouse
    $('#mouse-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#mouse_status3").val('OK');
        } else {
            $("#mouse_status3").prop('value', null);
        }
    })
    $('#mouse-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#mouse_status3").val('DEF');
        } else {
            $("#mouse_status3").prop('value', null);
        }
    })

    //keyboard
    $('#keyboard-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status3").val('OK');
        } else {
            $("#keyboard_status3").prop('value', null);
        }
    })
    $('#keyboard-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status3").val('DEF');
        } else {
            $("#keyboard_status3").prop('value', null);
        }
    })

    //Monitor
    $('#monitor-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status3").val('OK');
        } else {
            $("#monitor_status3").prop('value', null);
        }
    })
    $('#monitor-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status3").val('DEF');
        } else {
            $("#monitor_status3").prop('value', null);
        }
    })

    //avrups
    $('#avrups-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status3").val('OK');
        } else {
            $("#avrups_status3").prop('value', null);
        }
    })
    $('#avrups-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status3").val('DEF');
        } else {
            $("#avrups_status3").prop('value', null);
        }
    })

    //printer
    $('#printer-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status3").val('OK');
        } else {
            $("#printer_status3").prop('value', null);
        }
    })
    $('#printer-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status3").val('DEF');
        } else {
            $("#printer_status3").prop('value', null);
        }
    })

    //cpu
    $('#cpu-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status3").val('OK');
        } else {
            $("#cpu_status3").prop('value', null);
        }
    })
    $('#cpu-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status3").val('DEF');
        } else {
            $("#cpu_status3").prop('value', null);
        }
    })

    //barcode
    $('#barcode-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status3").val('OK');
        } else {
            $("#barcode_status3").prop('value', null);
        }
    })
    $('#barcode-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status3").val('DEF');
        } else {
            $("#barcode_status3").prop('value', null);
        }
    })





    //----------------------------------------4th Status--------------------------------------//
    //mouse
    $('#mouse-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#mouse_status4").val('OK');
        } else {
            $("#mouse_status4").prop('value', null);
        }
    })
    $('#mouse-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#mouse_status4").val('DEF');
        } else {
            $("#mouse_status4").prop('value', null);
        }
    })

    //keyboard
    $('#keyboard-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status4").val('OK');
        } else {
            $("#keyboard_status4").prop('value', null);
        }
    })
    $('#keyboard-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#keyboard_status4").val('DEF');
        } else {
            $("#keyboard_status4").prop('value', null);
        }
    })

    //Monitor
    $('#monitor-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status4").val('OK');
        } else {
            $("#monitor_status4").prop('value', null);
        }
    })
    $('#monitor-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#monitor_status4").val('DEF');
        } else {
            $("#monitor_status4").prop('value', null);
        }
    })

    //avrups
    $('#avrups-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status4").val('OK');
        } else {
            $("#avrups_status4").prop('value', null);
        }
    })
    $('#avrups-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#avrups_status4").val('DEF');
        } else {
            $("#avrups_status4").prop('value', null);
        }
    })

    //printer
    $('#printer-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status4").val('OK');
        } else {
            $("#printer_status4").prop('value', null);
        }
    })
    $('#printer-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#printer_status4").val('DEF');
        } else {
            $("#printer_status4").prop('value', null);
        }
    })

    //cpu
    $('#cpu-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status4").val('OK');
        } else {
            $("#cpu_status4").prop('value', null);
        }
    })
    $('#cpu-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#cpu_status4").val('DEF');
        } else {
            $("#cpu_status4").prop('value', null);
        }
    })

    //barcode
    $('#barcode-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status4").val('OK');
        } else {
            $("#barcode_status4").prop('value', null);
        }
    })
    $('#barcode-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#barcode_status4").val('DEF');
        } else {
            $("#barcode_status4").prop('value', null);
        }
    })





    //----------------------------SOFTWARE-----------------------------//
    //-------------------------1st Status------------------------------//   

    //------System Boot
    $('#sysboot-status1-ok').on('change', function () { //input check box id
        if ($(this).is(":checked")) {
            $("#softsysboot_status1").val('OK'); //form id with input hidden
        } else {
            $("#softsysboot_status1").prop('value', null); //form id with input hidden
        }
    })
    $('#sysboot-status1-def').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#softsysboot_status1").val('DEF'); //form id with input hidden
        } else {
            $("#softsysboot_status1").prop('value', null);//form id with input hidden
        }
    })


    //---------------Operating System
    $('#os-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status1").val('OK');
        } else {
            $("#softos_status1").prop('value', null);
        }
    })
    $('#os-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status1").val('DEF');
        } else {
            $("#softos_status1").prop('value', null);
        }
    })


    //---------------Anti Virus
    $('#avirus-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status1").val('OK');
        } else {
            $("#softantivirus_status1").prop('value', null);
        }
    })
    $('#avirus-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status1").val('DEF');
        } else {
            $("#softantivirus_status1").prop('value', null);
        }
    })


    //---------------Microsoft Office
    $('#msoffice-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status1").val('OK');
        } else {
            $("#softmsoffice_status1").prop('value', null);
        }
    })
    $('#msoffice-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status1").val('DEF');
        } else {
            $("#softmsoffice_status1").prop('value', null);
        }
    })


    //---------------BIZBOX his
    $('#his-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status1").val('OK');
        } else {
            $("#softhis_status1").prop('value', null);
        }
    })
    $('#his-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status1").val('DEF');
        } else {
            $("#softhis_status1").prop('value', null);
        }
    })


    //---------------BIZBOX mms
    $('#mms-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status1").val('OK');
        } else {
            $("#softmms_status1").prop('value', null);
        }
    })
    $('#mms-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status1").val('DEF');
        } else {
            $("#softmms_status1").prop('value', null);
        }
    })


    //---------------BIZBOX emr
    $('#emr-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status1").val('OK');
        } else {
            $("#softemr_status1").prop('value', null);
        }
    })
    $('#emr-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status1").val('DEF');
        } else {
            $("#softemr_status1").prop('value', null);
        }
    })


    //---------------BIZBOX queui
    $('#queui-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status1").val('OK');
        } else {
            $("#softqueui_status1").prop('value', null);
        }
    })
    $('#queui-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status1").val('DEF');
        } else {
            $("#softqueui_status1").prop('value', null);
        }
    })


    //---------------Weblis
    $('#weblis-status1-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status1").val('OK');
        } else {
            $("#softweblis_status1").prop('value', null);
        }
    })
    $('#weblis-status1-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status1").val('DEF');
        } else {
            $("#softweblis_status1").prop('value', null);
        }
    })






    //-------------------------2nd Status------------------------------//  

    //------System Boot
    $('#sysboot-status2-ok').on('change', function () { //input check box id
        if ($(this).is(":checked")) {
            $("#softsysboot_status2").val('OK'); //form id with input hidden
        } else {
            $("#softsysboot_status2").prop('value', null); //form id with input hidden
        }
    })
    $('#sysboot-status2-def').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#softsysboot_status2").val('DEF'); //form id with input hidden
        } else {
            $("#softsysboot_status2").prop('value', null);//form id with input hidden
        }
    })


    //---------------Operating System
    $('#os-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status2").val('OK');
        } else {
            $("#softos_status2").prop('value', null);
        }
    })
    $('#os-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status2").val('DEF');
        } else {
            $("#softos_status2").prop('value', null);
        }
    })


    //---------------Anti Virus
    $('#avirus-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status2").val('OK');
        } else {
            $("#softantivirus_status2").prop('value', null);
        }
    })
    $('#avirus-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status2").val('DEF');
        } else {
            $("#softantivirus_status2").prop('value', null);
        }
    })


    //---------------Microsoft Office
    $('#msoffice-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status2").val('OK');
        } else {
            $("#softmsoffice_status2").prop('value', null);
        }
    })
    $('#msoffice-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status2").val('DEF');
        } else {
            $("#softmsoffice_status2").prop('value', null);
        }
    })


    //---------------BIZBOX his
    $('#his-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status2").val('OK');
        } else {
            $("#softhis_status2").prop('value', null);
        }
    })
    $('#his-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status2").val('DEF');
        } else {
            $("#softhis_status2").prop('value', null);
        }
    })


    //---------------BIZBOX mms
    $('#mms-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status2").val('OK');
        } else {
            $("#softmms_status2").prop('value', null);
        }
    })
    $('#mms-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status2").val('DEF');
        } else {
            $("#softmms_status2").prop('value', null);
        }
    })


    //---------------BIZBOX emr
    $('#emr-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status2").val('OK');
        } else {
            $("#softemr_status2").prop('value', null);
        }
    })
    $('#emr-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status2").val('DEF');
        } else {
            $("#softemr_status2").prop('value', null);
        }
    })


    //--------------- queui
    $('#queui-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status2").val('OK');
        } else {
            $("#softqueui_status2").prop('value', null);
        }
    })
    $('#queui-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status2").val('DEF');
        } else {
            $("#softqueui_status2").prop('value', null);
        }
    })


    //---------------Weblis
    $('#weblis-status2-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status2").val('OK');
        } else {
            $("#softweblis_status2").prop('value', null);
        }
    })
    $('#weblis-status2-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status2").val('DEF');
        } else {
            $("#softweblis_status2").prop('value', null);
        }
    })






    //-------------------------3rd Status------------------------------//  

    //------System Boot
    $('#sysboot-status3-ok').on('change', function () { //input check box id
        if ($(this).is(":checked")) {
            $("#softsysboot_status3").val('OK'); //form id with input hidden
        } else {
            $("#softsysboot_status3").prop('value', null); //form id with input hidden
        }
    })
    $('#sysboot-status3-def').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#softsysboot_status3").val('DEF'); //form id with input hidden
        } else {
            $("#softsysboot_status3").prop('value', null);//form id with input hidden
        }
    })


    //---------------Operating System
    $('#os-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status3").val('OK');
        } else {
            $("#softos_status3").prop('value', null);
        }
    })
    $('#os-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status3").val('DEF');
        } else {
            $("#softos_status3").prop('value', null);
        }
    })


    //---------------Anti Virus
    $('#avirus-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status3").val('OK');
        } else {
            $("#softantivirus_status3").prop('value', null);
        }
    })
    $('#avirus-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status3").val('DEF');
        } else {
            $("#softantivirus_status3").prop('value', null);
        }
    })


    //---------------Microsoft Office
    $('#msoffice-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status3").val('OK');
        } else {
            $("#softmsoffice_status3").prop('value', null);
        }
    })
    $('#msoffice-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status3").val('DEF');
        } else {
            $("#softmsoffice_status3").prop('value', null);
        }
    })


    //---------------BIZBOX his
    $('#his-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status3").val('OK');
        } else {
            $("#softhis_status3").prop('value', null);
        }
    })
    $('#his-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status3").val('DEF');
        } else {
            $("#softhis_status3").prop('value', null);
        }
    })


    //---------------BIZBOX mms
    $('#mms-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status3").val('OK');
        } else {
            $("#softmms_status3").prop('value', null);
        }
    })
    $('#mms-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status3").val('DEF');
        } else {
            $("#softmms_status3").prop('value', null);
        }
    })


    //---------------BIZBOX emr
    $('#emr-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status3").val('OK');
        } else {
            $("#softemr_status3").prop('value', null);
        }
    })
    $('#emr-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status3").val('DEF');
        } else {
            $("#softemr_status3").prop('value', null);
        }
    })


    //---------------BIZBOX queui
    $('#queui-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status3").val('OK');
        } else {
            $("#softqueui_status3").prop('value', null);
        }
    })
    $('#queui-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status3").val('DEF');
        } else {
            $("#softqueui_status3").prop('value', null);
        }
    })


    //---------------Weblis
    $('#weblis-status3-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status3").val('OK');
        } else {
            $("#softweblis_status3").prop('value', null);
        }
    })
    $('#weblis-status3-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status3").val('DEF');
        } else {
            $("#softweblis_status3").prop('value', null);
        }
    })





    //-------------------------4th Status------------------------------//  

    //------System Boot
    $('#sysboot-status4-ok').on('change', function () { //input check box id
        if ($(this).is(":checked")) {
            $("#softsysboot_status4").val('OK'); //form id with input hidden
        } else {
            $("#softsysboot_status4").prop('value', null); //form id with input hidden
        }
    })
    $('#sysboot-status4-def').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#softsysboot_status4").val('DEF'); //form id with input hidden
        } else {
            $("#softsysboot_status4").prop('value', null);//form id with input hidden
        }
    })


    //---------------Operating System
    $('#os-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status4").val('OK');
        } else {
            $("#softos_status4").prop('value', null);
        }
    })
    $('#os-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softos_status4").val('DEF');
        } else {
            $("#softos_status4").prop('value', null);
        }
    })


    //---------------Anti Virus
    $('#avirus-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status4").val('OK');
        } else {
            $("#softantivirus_status4").prop('value', null);
        }
    })
    $('#avirus-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softantivirus_status4").val('DEF');
        } else {
            $("#softantivirus_status4").prop('value', null);
        }
    })


    //---------------Microsoft Office
    $('#msoffice-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status4").val('OK');
        } else {
            $("#softmsoffice_status4").prop('value', null);
        }
    })
    $('#msoffice-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmsoffice_status4").val('DEF');
        } else {
            $("#softmsoffice_status4").prop('value', null);
        }
    })


    //---------------BIZBOX his
    $('#his-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status4").val('OK');
        } else {
            $("#softhis_status4").prop('value', null);
        }
    })
    $('#his-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softhis_status4").val('DEF');
        } else {
            $("#softhis_status4").prop('value', null);
        }
    })


    //---------------BIZBOX mms
    $('#mms-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status4").val('OK');
        } else {
            $("#softmms_status4").prop('value', null);
        }
    })
    $('#mms-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softmms_status4").val('DEF');
        } else {
            $("#softmms_status4").prop('value', null);
        }
    })


    //---------------BIZBOX emr
    $('#emr-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status4").val('OK');
        } else {
            $("#softemr_status4").prop('value', null);
        }
    })
    $('#emr-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softemr_status4").val('DEF');
        } else {
            $("#softemr_status4").prop('value', null);
        }
    })


    //---------------BIZBOX queui
    $('#queui-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status4").val('OK');
        } else {
            $("#softqueui_status4").prop('value', null);
        }
    })
    $('#queui-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softqueui_status4").val('DEF');
        } else {
            $("#softqueui_status4").prop('value', null);
        }
    })


    //---------------Weblis
    $('#weblis-status4-ok').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status4").val('OK');
        } else {
            $("#softweblis_status4").prop('value', null);
        }
    })
    $('#weblis-status4-def').on('change', function () {
        if ($(this).is(":checked")) {
            $("#softweblis_status4").val('DEF');
        } else {
            $("#softweblis_status4").prop('value', null);
        }
    })
})