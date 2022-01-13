$(document).ready(function () {

    
    //-------------------------HARDWARE--------------------------//

    
    //------------------------------- 1st Quarter Edit
    //MOUSE
    $('#edit-mouse-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mouse_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#mouse_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-mouse-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mouse_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#mouse_edit_status1").prop('value', '');
        }
    })


    //KEYBOARD
    $('#edit-keyboard-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#keyboard_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-keyboard-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#keyboard_edit_status1").prop('value', '');
        }
    })


    //MONITOR
    $('#edit-monitor-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#monitor_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#monitor_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-monitor-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#monitor_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#monitor_edit_status1").prop('value', '');
        }
    })


    //AVR UPS
    $('#edit-avrups-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avrups_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#avrups_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-avrups-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avrups_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#avrups_edit_status1").prop('value', '');
        }
    })


    //Printer
    $('#edit-printer-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#printer_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#printer_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-printer-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#printer_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#printer_edit_status1").prop('value', '');
        }
    })


    //CPU
    $('#edit-cpu-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#cpu_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#cpu_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-cpu-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#cpu_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#cpu_edit_status1").prop('value', '');
        }
    })


    //Barcode
    $('#edit-barcode-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#barcode_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#barcode_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-barcode-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#barcode_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#barcode_edit_status1").prop('value', '');
        }
    })
    


    //------------------------------- 2nd Quarter Edit
    //MOUSE
    $('#edit-mouse-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mouse_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#mouse_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-mouse-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mouse_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#mouse_edit_status2").prop('value', '');
        }
    })


    //KEYBOARD
    $('#edit-keyboard-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#keyboard_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-keyboard-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#keyboard_edit_status2").prop('value', '');
        }
    })


    //MONITOR
    $('#edit-monitor-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#monitor_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#monitor_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-monitor-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#monitor_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#monitor_edit_status2").prop('value', '');
        }
    })


    //AVR UPS
    $('#edit-avrups-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avrups_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#avrups_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-avrups-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avrups_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#avrups_edit_status2").prop('value', '');
        }
    })


    //Printer
    $('#edit-printer-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#printer_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#printer_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-printer-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#printer_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#printer_edit_status2").prop('value', '');
        }
    })


    //CPU
    $('#edit-cpu-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#cpu_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#cpu_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-cpu-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#cpu_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#cpu_edit_status2").prop('value', '');
        }
    })


    //Barcode
    $('#edit-barcode-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#barcode_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#barcode_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-barcode-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#barcode_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#barcode_edit_status2").prop('value', '');
        }
    })
    
    


    //------------------------------- 3rd Quarter Edit
    //MOUSE
    $('#edit-mouse-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mouse_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#mouse_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-mouse-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mouse_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#mouse_edit_status3").prop('value', '');
        } 
    })


    //KEYBOARD
    $('#edit-keyboard-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#keyboard_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-keyboard-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#keyboard_edit_status3").prop('value', '');
        }
    })


    //MONITOR
    $('#edit-monitor-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#monitor_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#monitor_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-monitor-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#monitor_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#monitor_edit_status3").prop('value', '');
        }
    })


    //AVR UPS
    $('#edit-avrups-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avrups_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#avrups_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-avrups-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avrups_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#avrups_edit_status3").prop('value', '');
        }
    })


    //Printer
    $('#edit-printer-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#printer_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#printer_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-printer-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#printer_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#printer_edit_status3").prop('value', '');
        }
    })


    //CPU
    $('#edit-cpu-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#cpu_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#cpu_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-cpu-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#cpu_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#cpu_edit_status3").prop('value', '');
        }
    })


    //Barcode
    $('#edit-barcode-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#barcode_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#barcode_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-barcode-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#barcode_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#barcode_edit_status3").prop('value', '');
        }
    })
    
    
    


    //------------------------------- 4th Quarter Edit
    //MOUSE
    $('#edit-mouse-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mouse_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#mouse_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-mouse-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mouse_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#mouse_edit_status4").prop('value', '');
        }
    })


    //KEYBOARD
    $('#edit-keyboard-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#keyboard_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-keyboard-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#keyboard_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#keyboard_edit_status4").prop('value', '');
        }
    })


    //MONITOR
    $('#edit-monitor-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#monitor_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#monitor_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-monitor-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#monitor_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#monitor_edit_status4").prop('value', '');
        }
    })


    //AVR UPS
    $('#edit-avrups-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avrups_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#avrups_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-avrups-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avrups_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#avrups_edit_status4").prop('value', '');
        }
    })


    //Printer
    $('#edit-printer-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#printer_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#printer_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-printer-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#printer_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#printer_edit_status4").prop('value', '');
        }
    })


    //CPU
    $('#edit-cpu-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#cpu_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#cpu_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-cpu-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#cpu_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#cpu_edit_status4").prop('value', '');
        }
    })


    //Barcode
    $('#edit-barcode-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#barcode_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#barcode_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-barcode-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#barcode_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#barcode_edit_status4").prop('value', '');
        }
    })






















    //-------------------------SOFTWARE--------------------------//

    
    //------------------------------- 1st Quarter Edit
    //sysboot
    $('#edit-sysboot-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#sysboot_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-sysboot-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#sysboot_edit_status1").prop('value', '');
        }
    })


    //os
    $('#edit-os-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#os_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#os_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-os-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#os_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#os_edit_status1").prop('value', '');
        }
    })


    //avirus
    $('#edit-avirus-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avirus_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#avirus_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-avirus-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avirus_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#avirus_edit_status1").prop('value', '');
        }
    })


    //msoffice
    $('#edit-msoffice-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#msoffice_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-msoffice-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#msoffice_edit_status1").prop('value', '');
        }
    })


    //his
    $('#edit-his-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#his_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#his_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-his-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#his_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#his_edit_status1").prop('value', '');
        }
    })


    //mms
    $('#edit-mms-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mms_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#mms_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-mms-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mms_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#mms_edit_status1").prop('value', '');
        }
    })


    //emr
    $('#edit-emr-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#emr_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#emr_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-emr-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#emr_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#emr_edit_status1").prop('value', '');
        }
    })


    //queui
    $('#edit-queui-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#queui_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#queui_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-queui-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#queui_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#queui_edit_status1").prop('value', '');
        }
    })


    //weblis
    $('#edit-weblis-ok1').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#weblis_edit_status1").val('OK'); //form id with input hidden
        } else {
            $("#weblis_edit_status1").prop('value', '');
        }
    })
    
    $('#edit-weblis-def1').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#weblis_edit_status1").val('DEF'); //form id with input hidden
        } else {
            $("#weblis_edit_status1").prop('value', '');
        }
    })
    


    //------------------------------- 2nd Quarter Edit
    //sysboot
    $('#edit-sysboot-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#sysboot_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-sysboot-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#sysboot_edit_status2").prop('value', '');
        }
    })


    //os
    $('#edit-os-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#os_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#os_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-os-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#os_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#os_edit_status2").prop('value', '');
        }
    })


    //avirus
    $('#edit-avirus-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avirus_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#avirus_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-avirus-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avirus_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#avirus_edit_status2").prop('value', '');
        }
    })


    //AVR UPS
    $('#edit-msoffice-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#msoffice_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-msoffice-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#msoffice_edit_status2").prop('value', '');
        }
    })


    //his
    $('#edit-his-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#his_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#his_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-his-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#his_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#his_edit_status2").prop('value', '');
        }
    })


    //mms
    $('#edit-mms-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mms_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#mms_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-mms-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mms_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#mms_edit_status2").prop('value', '');
        }
    })


    //emr
    $('#edit-emr-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#emr_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#emr_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-emr-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#emr_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#emr_edit_status2").prop('value', '');
        }
    })


    //queui
    $('#edit-queui-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#queui_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#queui_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-queui-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#queui_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#queui_edit_status2").prop('value', '');
        }
    })


    //weblis
    $('#edit-weblis-ok2').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#weblis_edit_status2").val('OK'); //form id with input hidden
        } else {
            $("#weblis_edit_status2").prop('value', '');
        }
    })
    
    $('#edit-weblis-def2').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#weblis_edit_status2").val('DEF'); //form id with input hidden
        } else {
            $("#weblis_edit_status2").prop('value', '');
        }
    })
    
    


    //------------------------------- 3rd Quarter Edit
    //sysboot
    $('#edit-sysboot-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#sysboot_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-sysboot-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#sysboot_edit_status3").prop('value', '');
        } 
    })


    //os
    $('#edit-os-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#os_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#os_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-os-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#os_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#os_edit_status3").prop('value', '');
        }
    })


    //avirus
    $('#edit-avirus-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avirus_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#avirus_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-avirus-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avirus_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#avirus_edit_status3").prop('value', '');
        }
    })


    //AVR UPS
    $('#edit-msoffice-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#msoffice_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-msoffice-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#msoffice_edit_status3").prop('value', '');
        }
    })


    //his
    $('#edit-his-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#his_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#his_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-his-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#his_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#his_edit_status3").prop('value', '');
        }
    })


    //mms
    $('#edit-mms-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mms_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#mms_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-mms-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mms_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#mms_edit_status3").prop('value', '');
        }
    })


    //emr
    $('#edit-emr-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#emr_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#emr_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-emr-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#emr_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#emr_edit_status3").prop('value', '');
        }
    })


    //queui
    $('#edit-queui-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#queui_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#queui_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-queui-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#queui_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#queui_edit_status3").prop('value', '');
        }
    })


    //weblis
    $('#edit-weblis-ok3').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#weblis_edit_status3").val('OK'); //form id with input hidden
        } else {
            $("#weblis_edit_status3").prop('value', '');
        }
    })
    
    $('#edit-weblis-def3').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#weblis_edit_status3").val('DEF'); //form id with input hidden
        } else {
            $("#weblis_edit_status3").prop('value', '');
        }
    })
    
    
    


    //------------------------------- 4th Quarter Edit
    //sysboot
    $('#edit-sysboot-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#sysboot_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-sysboot-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#sysboot_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#sysboot_edit_status4").prop('value', '');
        }
    })


    //os
    $('#edit-os-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#os_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#os_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-os-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#os_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#os_edit_status4").prop('value', '');
        }
    })


    //avirus
    $('#edit-avirus-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#avirus_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#avirus_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-avirus-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#avirus_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#avirus_edit_status4").prop('value', '');
        }
    })


    //AVR UPS
    $('#edit-msoffice-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#msoffice_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-msoffice-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#msoffice_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#msoffice_edit_status4").prop('value', '');
        }
    })


    //his
    $('#edit-his-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#his_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#his_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-his-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#his_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#his_edit_status4").prop('value', '');
        }
    })


    //mms
    $('#edit-mms-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#mms_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#mms_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-mms-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#mms_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#mms_edit_status4").prop('value', '');
        }
    })


    //emr
    $('#edit-emr-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#emr_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#emr_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-emr-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#emr_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#emr_edit_status4").prop('value', '');
        }
    })

    
    //queui
    $('#edit-queui-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#queui_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#queui_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-queui-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#queui_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#queui_edit_status4").prop('value', '');
        }
    })


    //weblis
    $('#edit-weblis-ok4').on('change', function () { //input id and send it to form hidden
        if ($(this).is(":checked")) {
            $("#weblis_edit_status4").val('OK'); //form id with input hidden
        } else {
            $("#weblis_edit_status4").prop('value', '');
        }
    })
    
    $('#edit-weblis-def4').on('change', function () { //input id
        if ($(this).is(":checked")) {
            $("#weblis_edit_status4").val('DEF'); //form id with input hidden
        } else {
            $("#weblis_edit_status4").prop('value', '');
        }
    })
    

})