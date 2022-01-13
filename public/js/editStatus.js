$(document).ready(function () {


    //------------------------------HARDWARE------------------------//
    //------------------------------- 1st Status Edit----------BUTTONS
    //1st status button
    $('#edit-button1').on('click', function () {
        $('.1stedit-checkbox').removeClass('d-none')
        $('#edit-button1').hide()
        $('#update-statusbutton1').removeClass('d-none')
        $('.update-statusbutton-close1').removeClass('d-none')

        $('.edit-check1').addClass('d-none')

        $('#edit-button2').hide()
        $('#edit-button3').hide()
        $('#edit-button4').hide()
        $('#edit-preventive').hide()

        // $('.edit-hardware-firstdate').removeClass('d-none')
        $('.edit-date-first').removeClass('d-none')
        $('.hide-firsthardware').hide()

    })

    //------------------------------- 2nd Status Edit
    //2nd status button
    $('#edit-button2').on('click', function () {
        $('.2ndedit-checkbox').removeClass('d-none')
        $('#edit-button2').hide()
        $('#update-statusbutton2').removeClass('d-none')
        $('.update-statusbutton-close2').removeClass('d-none')

        $('.edit-check2').addClass('d-none')

        $('#edit-button1').hide()
        $('#edit-button3').hide()
        $('#edit-button4').hide()
        $('#edit-preventive').hide()

        // $('.edit-hardware-seconddate').removeClass('d-none')
        $('.edit-date-second').removeClass('d-none')
        $('.hide-secondhardware').hide()
    })

    //------------------------------- 3rd Status Edit
    //3rd status button
    $('#edit-button3').on('click', function () {
        $('.3rdedit-checkbox').removeClass('d-none')
        $('#edit-button3').hide()
        $('#update-statusbutton3').removeClass('d-none')
        $('.update-statusbutton-close3').removeClass('d-none')

        $('.edit-check3').addClass('d-none')

        $('#edit-button2').hide()
        $('#edit-button1').hide()
        $('#edit-button4').hide()
        $('#edit-preventive').hide()

        // $('.edit-hardware-thirddate').removeClass('d-none')
        $('.edit-date-third').removeClass('d-none')
        $('.hide-thirdhardware').hide()
    })

    //------------------------------- 4th Status Edit
    //4th status button
    $('#edit-button4').on('click', function () {
        $('.4thedit-checkbox').removeClass('d-none')
        $('#edit-button4').hide()
        $('#update-statusbutton4').removeClass('d-none')
        $('.update-statusbutton-close4').removeClass('d-none')

        $('.edit-check4').addClass('d-none')

        $('#edit-button2').hide()
        $('#edit-button3').hide()
        $('#edit-button1').hide()
        $('#edit-preventive').hide()

        // $('.edit-hardware-forthdate').removeClass('d-none')
        $('.edit-date-forth').removeClass('d-none')
        $('.hide-forthhardware').hide()
    })

    //------------------------------SOFTWARE------------------------//
    //------------------------------- 1st Status Edit----------BUTTONS
    $('#software-edit-button1').on('click', function () { //edit button
        $('.software-1stedit-checkbox').removeClass('d-none') //show all checkbox
        $('#software-edit-button1').hide() //hide edit button
        $('#software-update-statusbutton1').removeClass('d-none') //show update button
        $('.software-update-statusbutton-close1').removeClass('d-none') //show close button

        $('.software-edit-check1').addClass('d-none')//check logo or X logo

        $('#software-edit-button2').hide()
        $('#software-edit-button3').hide()
        $('#software-edit-button4').hide()

        $('#edit-preventive-software').hide()
        $('.softstatusbutton-add').hide()

    })


    //------------------------------- 2nd Status Edit----------BUTTONS
    $('#software-edit-button2').on('click', function () { //edit button
        $('.software-2ndedit-checkbox').removeClass('d-none') //show all checkbox
        $('#software-edit-button2').hide() //hide edit button
        $('#software-update-statusbutton2').removeClass('d-none') //show update button
        $('.software-update-statusbutton-close2').removeClass('d-none') //show close button

        $('.software-edit-check2').addClass('d-none')//check logo or X logo

        $('#software-edit-button1').hide()
        $('#software-edit-button3').hide()
        $('#software-edit-button4').hide()

        $('#edit-preventive-software').hide()
        $('.softstatusbutton-add').hide()
    })


    //------------------------------- 3rd Status Edit----------BUTTONS
    $('#software-edit-button3').on('click', function () { //edit button
        $('.software-3rdedit-checkbox').removeClass('d-none') //show all checkbox
        $('#software-edit-button3').hide() //hide edit button
        $('#software-update-statusbutton3').removeClass('d-none') //show update button
        $('.software-update-statusbutton-close3').removeClass('d-none') //show close button

        $('.software-edit-check3').addClass('d-none')//check logo or X logo

        $('#software-edit-button2').hide()
        $('#software-edit-button1').hide()
        $('#software-edit-button4').hide()

        $('#edit-preventive-software').hide()
        $('.softstatusbutton-add').hide()
    })


    //------------------------------- 4th Status Edit----------BUTTONS
    $('#software-edit-button4').on('click', function () { //edit button
        $('.software-4thedit-checkbox').removeClass('d-none') //show all checkbox
        $('#software-edit-button4').hide() //hide edit button
        $('#software-update-statusbutton4').removeClass('d-none') //show update button
        $('.software-update-statusbutton-close4').removeClass('d-none') //show close button

        $('.software-edit-check4').addClass('d-none')//check logo or X logo

        $('#software-edit-button2').hide()
        $('#software-edit-button3').hide()
        $('#software-edit-button1').hide()

        $('#edit-preventive-software').hide()
        $('.softstatusbutton-add').hide()
    })




    //-------------------HARDWARE--------------------//
    //customize checkbox if check or uncheck


    // $('#sysboot-input').on('change', function () {
    //     let sysboot = $("#sysboot-input").val();
    //     $("#sysboot-form").val(sysboot);
    // })

    //1st Quarter Status
    //1st status mouse check
    $('#edit-mouse-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-def1').prop('checked', false);
        }
    });

    $('#edit-mouse-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-ok1').prop('checked', false);
        }
    });


    //1st status keyboard check
    $('#edit-keyboard-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-def1').prop('checked', false);
        }
    });

    $('#edit-keyboard-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-ok1').prop('checked', false);
        }
    });


    //1st status monitor check
    $('#edit-monitor-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-def1').prop('checked', false);
        }
    });

    $('#edit-monitor-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-ok1').prop('checked', false);
        }
    });


    //1st status avr ups check
    $('#edit-avrups-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-def1').prop('checked', false);
        }
    });

    $('#edit-avrups-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-ok1').prop('checked', false);
        }
    });


    //1st status printer check
    $('#edit-printer-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-def1').prop('checked', false);
        }
    });

    $('#edit-printer-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-ok1').prop('checked', false);
        }
    });


    //1st status cpu check
    $('#edit-cpu-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-def1').prop('checked', false);
        }
    });

    $('#edit-cpu-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-ok1').prop('checked', false);
        }
    });


    //1st status barcode check
    $('#edit-barcode-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-def1').prop('checked', false);
        }
    });

    $('#edit-barcode-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-ok1').prop('checked', false);
        }
    });


    //2nd Quarter Status
    //2nd status mouse check
    $('#edit-mouse-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-def2').prop('checked', false);
        }
    });

    $('#edit-mouse-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-ok2').prop('checked', false);
        }
    });


    //2nd status keyboard check
    $('#edit-keyboard-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-def2').prop('checked', false);
        }
    });

    $('#edit-keyboard-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-ok2').prop('checked', false);
        }
    });


    //2nd status monitor check
    $('#edit-monitor-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-def2').prop('checked', false);
        }
    });

    $('#edit-monitor-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-ok2').prop('checked', false);
        }
    });


    //2nd status avr ups check
    $('#edit-avrups-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-def2').prop('checked', false);
        }
    });

    $('#edit-avrups-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-ok2').prop('checked', false);
        }
    });


    //2nd status printer check
    $('#edit-printer-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-def2').prop('checked', false);
        }
    });

    $('#edit-printer-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-ok2').prop('checked', false);
        }
    });


    //2nd status cpu check
    $('#edit-cpu-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-def2').prop('checked', false);
        }
    });

    $('#edit-cpu-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-ok2').prop('checked', false);
        }
    });



    //2nd status barcode check
    $('#edit-barcode-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-def2').prop('checked', false);
        }
    });

    $('#edit-barcode-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-ok2').prop('checked', false);
        }
    });


    //3rd Quarter Status
    //3rd status mouse check
    $('#edit-mouse-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-def3').prop('checked', false);
        }
    });

    $('#edit-mouse-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-ok3').prop('checked', false);
        }
    });


    //3rd status keyboard check
    $('#edit-keyboard-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-def3').prop('checked', false);
        }
    });

    $('#edit-keyboard-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-ok3').prop('checked', false);
        }
    });


    //3rd status monitor check
    $('#edit-monitor-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-def3').prop('checked', false);
        }
    });

    $('#edit-monitor-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-ok3').prop('checked', false);
        }
    });


    //3rd status avr ups check
    $('#edit-avrups-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-def3').prop('checked', false);
        }
    });

    $('#edit-avrups-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-ok3').prop('checked', false);
        }
    });


    //3rd status printer check
    $('#edit-printer-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-def3').prop('checked', false);
        }
    });

    $('#edit-printer-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-ok3').prop('checked', false);
        }
    });


    //3rd status cpu check
    $('#edit-cpu-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-def3').prop('checked', false);
        }
    });

    $('#edit-cpu-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-ok3').prop('checked', false);
        }
    });



    //3rd status barcode check
    $('#edit-barcode-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-def3').prop('checked', false);
        }
    });

    $('#edit-barcode-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-ok3').prop('checked', false);
        }
    });



    //4th Quarter Status
    //4th status mouse check
    $('#edit-mouse-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-def4').prop('checked', false);
        }
    });

    $('#edit-mouse-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mouse-ok4').prop('checked', false);
        }
    });


    //4th status keyboard check
    $('#edit-keyboard-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-def4').prop('checked', false);
        }
    });

    $('#edit-keyboard-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-keyboard-ok4').prop('checked', false);
        }
    });


    //4th status monitor check
    $('#edit-monitor-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-def4').prop('checked', false);
        }
    });

    $('#edit-monitor-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-monitor-ok4').prop('checked', false);
        }
    });


    //4th status avr ups check
    $('#edit-avrups-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-def4').prop('checked', false);
        }
    });

    $('#edit-avrups-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avrups-ok4').prop('checked', false);
        }
    });


    //4th status printer check
    $('#edit-printer-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-def4').prop('checked', false);
        }
    });

    $('#edit-printer-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-printer-ok4').prop('checked', false);
        }
    });


    //4th status cpu check
    $('#edit-cpu-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-def4').prop('checked', false);
        }
    });

    $('#edit-cpu-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-cpu-ok4').prop('checked', false);
        }
    });



    //4th status barcode check
    $('#edit-barcode-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-def4').prop('checked', false);
        }
    });

    $('#edit-barcode-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-barcode-ok4').prop('checked', false);
        }
    });



    //-------------------SOFTWARE--------------------//
    //customize checkbox if check or uncheck


    //1st Quarter Status
    //1st status sysboot check
    $('#edit-sysboot-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-def1').prop('checked', false);
        }
    });

    $('#edit-sysboot-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-ok1').prop('checked', false);
        }
    });


    //1st status os check
    $('#edit-os-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-def1').prop('checked', false);
        }
    });

    $('#edit-os-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-ok1').prop('checked', false);
        }
    });


    //1st status antivirus check
    $('#edit-avirus-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-def1').prop('checked', false);
        }
    });

    $('#edit-avirus-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-ok1').prop('checked', false);
        }
    });


    //1st status msoffice check
    $('#edit-msoffice-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-def1').prop('checked', false);
        }
    });

    $('#edit-msoffice-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-ok1').prop('checked', false);
        }
    });


    //1st status his check
    $('#edit-his-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-def1').prop('checked', false);
        }
    });

    $('#edit-his-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-ok1').prop('checked', false);
        }
    });


    //1st status mms check
    $('#edit-mms-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-def1').prop('checked', false);
        }
    });

    $('#edit-mms-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-ok1').prop('checked', false);
        }
    });


    //1st status emr check
    $('#edit-emr-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-def1').prop('checked', false);
        }
    });

    $('#edit-emr-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-ok1').prop('checked', false);
        }
    });


    //1st status queui check
    $('#edit-queui-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-def1').prop('checked', false);
        }
    });

    $('#edit-queui-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-ok1').prop('checked', false);
        }
    });


    //1st status weblis check
    $('#edit-weblis-ok1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-def1').prop('checked', false);
        }
    });

    $('#edit-weblis-def1').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-ok1').prop('checked', false);
        }
    });


    //2nd Quarter Status
    //2nd status sysboot check
    $('#edit-sysboot-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-def2').prop('checked', false);
        }
    });

    $('#edit-sysboot-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-ok2').prop('checked', false);
        }
    });


    //2nd status os check
    $('#edit-os-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-def2').prop('checked', false);
        }
    });

    $('#edit-os-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-ok2').prop('checked', false);
        }
    });


    //2nd status antivirus check
    $('#edit-avirus-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-def2').prop('checked', false);
        }
    });

    $('#edit-avirus-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-ok2').prop('checked', false);
        }
    });


    //2nd status msoffice check
    $('#edit-msoffice-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-def2').prop('checked', false);
        }
    });

    $('#edit-msoffice-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-ok2').prop('checked', false);
        }
    });


    //2nd status his check
    $('#edit-his-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-def2').prop('checked', false);
        }
    });

    $('#edit-his-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-ok2').prop('checked', false);
        }
    });


    //2nd status mms check
    $('#edit-mms-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-def2').prop('checked', false);
        }
    });

    $('#edit-mms-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-ok2').prop('checked', false);
        }
    });



    //2nd status emr check
    $('#edit-emr-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-def2').prop('checked', false);
        }
    });

    $('#edit-emr-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-ok2').prop('checked', false);
        }
    });



    //2nd status queui check
    $('#edit-queui-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-def2').prop('checked', false);
        }
    });

    $('#edit-queui-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-ok2').prop('checked', false);
        }
    });



    //2nd status weblis check
    $('#edit-weblis-ok2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-def2').prop('checked', false);
        }
    });

    $('#edit-weblis-def2').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-ok2').prop('checked', false);
        }
    });


    //3rd Quarter Status
    //3rd status sysboot check
    $('#edit-sysboot-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-def3').prop('checked', false);
        }
    });

    $('#edit-sysboot-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-ok3').prop('checked', false);
        }
    });


    //3rd status os check
    $('#edit-os-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-def3').prop('checked', false);
        }
    });

    $('#edit-os-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-ok3').prop('checked', false);
        }
    });


    //3rd status avirus check
    $('#edit-avirus-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-def3').prop('checked', false);
        }
    });

    $('#edit-avirus-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-ok3').prop('checked', false);
        }
    });


    //3rd status msoffice check
    $('#edit-msoffice-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-def3').prop('checked', false);
        }
    });

    $('#edit-msoffice-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-ok3').prop('checked', false);
        }
    });


    //3rd status his check
    $('#edit-his-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-def3').prop('checked', false);
        }
    });

    $('#edit-his-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-ok3').prop('checked', false);
        }
    });


    //3rd status mms check
    $('#edit-mms-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-def3').prop('checked', false);
        }
    });

    $('#edit-mms-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-ok3').prop('checked', false);
        }
    });



    //3rd status emr check
    $('#edit-emr-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-def3').prop('checked', false);
        }
    });

    $('#edit-emr-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-ok3').prop('checked', false);
        }
    });



    //3rd status queui check
    $('#edit-queui-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-def3').prop('checked', false);
        }
    });

    $('#edit-queui-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-ok3').prop('checked', false);
        }
    });



    //3rd status weblis check
    $('#edit-weblis-ok3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-def3').prop('checked', false);
        }
    });

    $('#edit-weblis-def3').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-ok3').prop('checked', false);
        }
    });



    //4th Quarter Status
    //4th status sysboot check
    $('#edit-sysboot-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-def4').prop('checked', false);
        }
    });

    $('#edit-sysboot-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-sysboot-ok4').prop('checked', false);
        }
    });


    //4th status os check
    $('#edit-os-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-def4').prop('checked', false);
        }
    });

    $('#edit-os-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-os-ok4').prop('checked', false);
        }
    });


    //4th status avirus check
    $('#edit-avirus-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-def4').prop('checked', false);
        }
    });

    $('#edit-avirus-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-avirus-ok4').prop('checked', false);
        }
    });


    //4th status msoffice check
    $('#edit-msoffice-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-def4').prop('checked', false);
        }
    });

    $('#edit-msoffice-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-msoffice-ok4').prop('checked', false);
        }
    });


    //4th status his check
    $('#edit-his-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-def4').prop('checked', false);
        }
    });

    $('#edit-his-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-his-ok4').prop('checked', false);
        }
    });


    //4th status emr check
    $('#edit-emr-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-def4').prop('checked', false);
        }
    });

    $('#edit-emr-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-emr-ok4').prop('checked', false);
        }
    });


    //4th status mms check
    $('#edit-mms-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-def4').prop('checked', false);
        }
    });

    $('#edit-mms-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-mms-ok4').prop('checked', false);
        }
    });


    //4th status queui check
    $('#edit-queui-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-def4').prop('checked', false);
        }
    });

    $('#edit-queui-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-queui-ok4').prop('checked', false);
        }
    });



    //4th status weblis check
    $('#edit-weblis-ok4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-def4').prop('checked', false);
        }
    });

    $('#edit-weblis-def4').change(function () {
        if ($(this).is(":checked")) {
            $('#edit-weblis-ok4').prop('checked', false);
        }
    });



    // Set a New Date
    $('.edit-date-first').on('click', function () {
        $(this).hide()
        $('.hide-firsthardware').hide()
        $('.edit-hardware-firstdate').removeClass('d-none')
    })

    $('.edit-date-second').on('click', function () {
        $(this).hide()
        $('.hide-secondhardware').hide()
        $('.edit-hardware-seconddate').removeClass('d-none')
    })

    $('.edit-date-third').on('click', function () {
        $(this).hide()
        $('.hide-thirdhardware').hide()
        $('.edit-hardware-thirddate').removeClass('d-none')
    })

    $('.edit-date-forth').on('click', function () {
        $(this).hide()
        $('.hide-forthhardware').hide()
        $('.edit-hardware-forthdate').removeClass('d-none')
    })




})