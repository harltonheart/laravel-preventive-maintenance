$(document).ready(function () {

    // ----------------------->HARDWARE
    //button1
    $('#statusbutton1').on('click', function () {
        $('.1stcheckbox').removeClass('d-none')
        $('#statusbutton1').hide()
        $('#savestatusbutton1').removeClass('d-none')
        $('.statusbutton-close1').removeClass('d-none')

        $('#statusbutton2').addClass('d-none')
        $('#statusbutton3').addClass('d-none')
        $('#statusbutton4').addClass('d-none')

    })

    //button2
    $('#statusbutton2').on('click', function () {
        $('.2ndcheckbox').removeClass('d-none')
        $('#statusbutton2').hide()
        $('#savestatusbutton2').removeClass('d-none')
        $('.statusbutton-close2').removeClass('d-none')

        $('#statusbutton1').addClass('d-none')
        $('#statusbutton3').addClass('d-none')
        $('#statusbutton4').addClass('d-none')

    })
    //button3
    $('#statusbutton3').on('click', function () {
        $('.3rdcheckbox').removeClass('d-none')
        $('#statusbutton3').hide()
        $('#savestatusbutton3').removeClass('d-none')
        $('.statusbutton-close3').removeClass('d-none')

        $('#statusbutton1').addClass('d-none')
        $('#statusbutton2').addClass('d-none')
        $('#statusbutton4').addClass('d-none')

    })
    //button4
    $('#statusbutton4').on('click', function () {
        $('.4thcheckbox').removeClass('d-none')
        $('#statusbutton4').hide()
        $('#savestatusbutton4').removeClass('d-none')
        $('.statusbutton-close4').removeClass('d-none')

        $('#statusbutton1').addClass('d-none')
        $('#statusbutton2').addClass('d-none')
        $('#statusbutton3').addClass('d-none')

    })

    $('.closereload').on('click', function () {
        location.reload();
    });



    //--------------------Hardwarestatus 1st status-----------------------------//
    //1st status mouse check
    $('#mouse-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status1-def').prop('checked', false);
        }
    });

    $('#mouse-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status1-ok').prop('checked', false);
        }
    });

    //1st status keyboard check
    $('#keyboard-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status1-def').prop('checked', false);
        }
    });

    $('#keyboard-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status1-ok').prop('checked', false);
        }
    });

    //1st status monitor check
    $('#monitor-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status1-def').prop('checked', false);
        }
    });

    $('#monitor-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status1-ok').prop('checked', false);
        }
    });

    //1st status avrup check
    $('#avrups-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status1-def').prop('checked', false);
        }
    });

    $('#avrups-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status1-ok').prop('checked', false);
        }
    });

    //1st status printer check
    $('#printer-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status1-def').prop('checked', false);
        }
    });

    $('#printer-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status1-ok').prop('checked', false);
        }
    });

    //1st status cpu check
    $('#cpu-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status1-def').prop('checked', false);
        }
    });

    $('#cpu-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status1-ok').prop('checked', false);
        }
    });

    //1st status barcode check
    $('#barcode-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status1-def').prop('checked', false);
        }
    });

    $('#barcode-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status1-ok').prop('checked', false);
        }
    });


    //hardware 2nd status
    //2nd status MOUSE CHECK
    $('#mouse-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status2-def').prop('checked', false);
        }
    });

    $('#mouse-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status2-ok').prop('checked', false);
        }
    });


    //2nd status keyboard CHECK
    $('#keyboard-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status2-def').prop('checked', false);
        }
    });

    $('#keyboard-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status2-ok').prop('checked', false);
        }
    });

    //2nd status Monitor CHECK
    $('#monitor-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status2-def').prop('checked', false);
        }
    });

    $('#monitor-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status2-ok').prop('checked', false);
        }
    });

    //2nd status avrups CHECK
    $('#avrups-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status2-def').prop('checked', false);
        }
    });

    $('#avrups-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status2-ok').prop('checked', false);
        }
    });

    //2nd status printer CHECK
    $('#printer-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status2-def').prop('checked', false);
        }
    });

    $('#printer-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status2-ok').prop('checked', false);
        }
    });

    //2nd status cpu CHECK
    $('#cpu-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status2-def').prop('checked', false);
        }
    });

    $('#cpu-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status2-ok').prop('checked', false);
        }
    });

    //2nd status barcode CHECK
    $('#barcode-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status2-def').prop('checked', false);
        }
    });

    $('#barcode-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status2-ok').prop('checked', false);
        }
    });



    //-----------------------------------Hardware 3rd status------------------------------//
    //3rd status MOUSE CHECK
    $('#mouse-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status3-def').prop('checked', false);
        }
    });

    $('#mouse-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status3-ok').prop('checked', false);
        }
    });

    //3rd status keyboard CHECK
    $('#keyboard-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status3-def').prop('checked', false);
        }
    });

    $('#keyboard-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status3-ok').prop('checked', false);
        }
    });

    //3rd status monitor CHECK
    $('#monitor-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status3-def').prop('checked', false);
        }
    });

    $('#monitor-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status3-ok').prop('checked', false);
        }
    });


    //3rd status avrups CHECK
    $('#avrups-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status3-def').prop('checked', false);
        }
    });

    $('#avrups-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status3-ok').prop('checked', false);
        }
    });

    //3rd status printer CHECK
    $('#printer-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status3-def').prop('checked', false);
        }
    });

    $('#printer-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status3-ok').prop('checked', false);
        }
    });

    //3rd status cpu CHECK
    $('#cpu-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status3-def').prop('checked', false);
        }
    });

    $('#cpu-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status3-ok').prop('checked', false);
        }
    });

    //3rd status barcode CHECK
    $('#barcode-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status3-def').prop('checked', false);
        }
    });

    $('#barcode-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status3-ok').prop('checked', false);
        }
    });



    //------------------------Hardware 4th status-------------------------//
    //4th status MOUSE CHECK
    $('#mouse-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status4-def').prop('checked', false);
        }
    });

    $('#mouse-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mouse-status4-ok').prop('checked', false);
        }
    });

    //4th status keyboard CHECK
    $('#keyboard-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status4-def').prop('checked', false);
        }
    });

    $('#keyboard-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#keyboard-status4-ok').prop('checked', false);
        }
    });

    //4th status monitor CHECK
    $('#monitor-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status4-def').prop('checked', false);
        }
    });

    $('#monitor-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#monitor-status4-ok').prop('checked', false);
        }
    });

    //4th status avrups CHECK
    $('#avrups-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status4-def').prop('checked', false);
        }
    });

    $('#avrups-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#avrups-status4-ok').prop('checked', false);
        }
    });

    //4th status printer CHECK
    $('#printer-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status4-def').prop('checked', false);
        }
    });

    $('#printer-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#printer-status4-ok').prop('checked', false);
        }
    });

    //4th status printer CHECK
    $('#cpu-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status4-def').prop('checked', false);
        }
    });

    $('#cpu-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#cpu-status4-ok').prop('checked', false);
        }
    });

    //4th status printer CHECK
    $('#barcode-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status4-def').prop('checked', false);
        }
    });

    $('#barcode-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#barcode-status4-ok').prop('checked', false);
        }
    });



    // ------------------------SOFTWARE----------------------//


    //button1
    $('#softstatusbutton1').on('click', function () {
        $('.soft1stcheckbox').removeClass('d-none')
        $('#softstatusbutton1').hide()
        $('#softsavestatusbutton1').removeClass('d-none')
        $('.softstatusbutton-close1').removeClass('d-none')

        $('#softstatusbutton2').addClass('d-none')
        $('#softstatusbutton3').addClass('d-none')
        $('#softstatusbutton4').addClass('d-none')

        $('.alert-add').hide()
    })


    //button2
    $('#softstatusbutton2').on('click', function () {
        $('.soft2ndcheckbox').removeClass('d-none')
        $('#softstatusbutton2').hide()
        $('#softsavestatusbutton2').removeClass('d-none')
        $('.softstatusbutton-close2').removeClass('d-none')

        $('#softstatusbutton1').addClass('d-none')
        $('#softstatusbutton3').addClass('d-none')
        $('#softstatusbutton4').addClass('d-none')

        $('.alert-add').hide()
    })
    //button3
    $('#softstatusbutton3').on('click', function () {
        $('.soft3rdcheckbox').removeClass('d-none')
        $('#softstatusbutton3').hide()
        $('#softsavestatusbutton3').removeClass('d-none')
        $('.softstatusbutton-close3').removeClass('d-none')

        $('#softstatusbutton1').addClass('d-none')
        $('#softstatusbutton2').addClass('d-none')
        $('#softstatusbutton4').addClass('d-none')

        $('.alert-add').hide()
    })
    //button4
    $('#softstatusbutton4').on('click', function () {
        $('.soft4thcheckbox').removeClass('d-none')
        $('#softstatusbutton4').hide()
        $('#softsavestatusbutton4').removeClass('d-none')
        $('.softstatusbutton-close4').removeClass('d-none')

        $('#softstatusbutton1').addClass('d-none')
        $('#softstatusbutton2').addClass('d-none')
        $('#softstatusbutton3').addClass('d-none')

        $('.alert-add').hide()
    })

    $('.closereload').on('click', function () {
        location.reload();
    });



    //--------------------SOFTWARE STATUS 1st status---------------------//

    //1st status systemboot check
    $('#sysboot-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#sysboot-status1-def').prop('checked', false);
        }
    });

    $('#sysboot-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#sysboot-status1-ok').prop('checked', false);
        }
    });

    //1st status os check
    $('#os-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status1-def').prop('checked', false);
        }
    });

    $('#os-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status1-ok').prop('checked', false);
        }
    });

    //1st status antivirus check
    $('#antivirus-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status1-def').prop('checked', false);
        }
    });

    $('#antivirus-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status1-ok').prop('checked', false);
        }
    });

    //1st status msoffice check
    $('#msoffice-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status1-def').prop('checked', false);
        }
    });

    $('#msoffice-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status1-ok').prop('checked', false);
        }
    });

    //1st status his check
    $('#his-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status1-def').prop('checked', false);
        }
    });

    $('#his-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status1-ok').prop('checked', false);
        }
    });

    //1st status mms check
    $('#mms-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status1-def').prop('checked', false);
        }
    });

    $('#mms-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status1-ok').prop('checked', false);
        }
    });

    //1st status emr check
    $('#emr-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status1-def').prop('checked', false);
        }
    });

    $('#emr-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status1-ok').prop('checked', false);
        }
    });

    //1st status queui check
    $('#queui-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status1-def').prop('checked', false);
        }
    });

    $('#queui-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status1-ok').prop('checked', false);
        }
    });

    //1st status weblis check
    $('#weblis-status1-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status1-def').prop('checked', false);
        }
    });

    $('#weblis-status1-def').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status1-ok').prop('checked', false);
        }
    });



    //----------------------2nd status systemboot check-------------------//
    $('#systemboot-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#systemboot-status2-def').prop('checked', false);
        }
    });

    $('#systemboot-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#systemboot-status2-ok').prop('checked', false);
        }
    });

    //2st status os check
    $('#os-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status2-def').prop('checked', false);
        }
    });

    $('#os-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status2-ok').prop('checked', false);
        }
    });

    //2st status antivirus check
    $('#antivirus-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status2-def').prop('checked', false);
        }
    });

    $('#antivirus-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status2-ok').prop('checked', false);
        }
    });

    //2st status msoffice check
    $('#msoffice-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status2-def').prop('checked', false);
        }
    });

    $('#msoffice-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status2-ok').prop('checked', false);
        }
    });

    //2st status his check
    $('#his-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status2-def').prop('checked', false);
        }
    });

    $('#his-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status2-ok').prop('checked', false);
        }
    });

    //2st status mms check
    $('#mms-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status2-def').prop('checked', false);
        }
    });

    $('#mms-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status2-ok').prop('checked', false);
        }
    });

    //2st status emr check
    $('#emr-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status2-def').prop('checked', false);
        }
    });

    $('#emr-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status2-ok').prop('checked', false);
        }
    });

    //2st status queui check
    $('#queui-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status2-def').prop('checked', false);
        }
    });

    $('#queui-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status2-ok').prop('checked', false);
        }
    });

    //2st status weblis check
    $('#weblis-status2-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status2-def').prop('checked', false);
        }
    });

    $('#weblis-status2-def').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status2-ok').prop('checked', false);
        }
    });





    //----------------------3rd status systemboot check-------------------//
    //3rd status systemboot check
    $('#systemboot-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#systemboot-status3-def').prop('checked', false);
        }
    });

    $('#systemboot-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#systemboot-status3-ok').prop('checked', false);
        }
    });

    //3rd status os check
    $('#os-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status3-def').prop('checked', false);
        }
    });

    $('#os-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status3-ok').prop('checked', false);
        }
    });

    //3rd status antivirus check
    $('#antivirus-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status3-def').prop('checked', false);
        }
    });

    $('#antivirus-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status3-ok').prop('checked', false);
        }
    });

    //3rd status msoffice check
    $('#msoffice-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status3-def').prop('checked', false);
        }
    });

    $('#msoffice-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status3-ok').prop('checked', false);
        }
    });

    //3rd status his check
    $('#his-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status3-def').prop('checked', false);
        }
    });

    $('#his-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status3-ok').prop('checked', false);
        }
    });

    //3rd status mms check
    $('#mms-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status3-def').prop('checked', false);
        }
    });

    $('#mms-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status3-ok').prop('checked', false);
        }
    });

    //3rd status emr check
    $('#emr-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status3-def').prop('checked', false);
        }
    });

    $('#emr-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status3-ok').prop('checked', false);
        }
    });

    //3rd status queui check
    $('#queui-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status3-def').prop('checked', false);
        }
    });

    $('#queui-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status3-ok').prop('checked', false);
        }
    });

    //3rd status weblis check
    $('#weblis-status3-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status3-def').prop('checked', false);
        }
    });

    $('#weblis-status3-def').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status3-ok').prop('checked', false);
        }
    });




    //----------------------4th status systemboot check-------------------//
    //4th status systemboot check
    $('#systemboot-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#systemboot-status4-def').prop('checked', false);
        }
    });

    $('#systemboot-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#systemboot-status4-ok').prop('checked', false);
        }
    });

    //4th status os check
    $('#os-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status4-def').prop('checked', false);
        }
    });

    $('#os-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#os-status4-ok').prop('checked', false);
        }
    });

    //4th status antivirus check
    $('#antivirus-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status4-def').prop('checked', false);
        }
    });

    $('#antivirus-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#antivirus-status4-ok').prop('checked', false);
        }
    });

    //4th status msoffice check
    $('#msoffice-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status4-def').prop('checked', false);
        }
    });

    $('#msoffice-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#msoffice-status4-ok').prop('checked', false);
        }
    });

    //4th status his check
    $('#his-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status4-def').prop('checked', false);
        }
    });

    $('#his-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#his-status4-ok').prop('checked', false);
        }
    });

    //4th status mms check
    $('#mms-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status4-def').prop('checked', false);
        }
    });

    $('#mms-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#mms-status4-ok').prop('checked', false);
        }
    });

    //4th status emr check
    $('#emr-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status4-def').prop('checked', false);
        }
    });

    $('#emr-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#emr-status4-ok').prop('checked', false);
        }
    });

    //4th status queui check
    $('#queui-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status4-def').prop('checked', false);
        }
    });

    $('#queui-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#queui-status4-ok').prop('checked', false);
        }
    });

    //4th status weblis check
    $('#weblis-status4-ok').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status4-def').prop('checked', false);
        }
    });

    $('#weblis-status4-def').change(function () {
        if ($(this).is(":checked")) {
            $('#weblis-status4-ok').prop('checked', false);
        }
    });
})