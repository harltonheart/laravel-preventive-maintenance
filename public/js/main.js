$('#flash-message').delay(500).fadeOut(10000);

$("#departments").select2({
    placeholder: 'Select Department',
    allowClear: true
});

$('#departments').one('select2:open', function () {
    $('input.select2-search__field').prop('placeholder', 'Search Department...');
});


$(".department_edit").select2({
    placeholder: 'Select Department',
    allowClear: true
});

$('.department_edit').one('select2:open', function () {
    $('input.select2-search__field').prop('placeholder', 'Search Department...');
});


//Create User
$(".datepicker1").datepicker({
    format: " yyyy",
    viewMode: "years",
    minViewMode: "years",
    autoclose: true,
    orientation: 'bottom auto',
});
$('input[name="year"]').parents('.datepicker1').first().datepicker('setDate', new Date());

//Schedule Year
$(".year-sched").datepicker({
    format: " yyyy",
    viewMode: "years",
    minViewMode: "years",
    autoclose: true,
    orientation: 'bottom auto',
});
$('.year-sched').parents('.year-sched').first().datepicker('setDate', new Date());


//Fetch Year Summary
$('.datepicker2').datepicker({
    format: " yyyy",
    viewMode: "years",
    minViewMode: "years",
    autoclose: true,
    orientation: 'bottom auto',
    onSelect: function () {
        let query = $('.datepicker2').val();
        let page = $('#hidden_page').val();
        fetch_year(page, query)
    }
})
$('input[name="yearonly"]').parents('.datepicker2').first().datepicker('setDate', new Date());


//First Quarter Status
$('.firstdate').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    orientation: 'bottom auto',
}).on('change', function () {
    let firstdate = $(this).val();
    $("#firstdate-form").val(firstdate);
});
$('.firstdate').parents('.firstdate').first().datepicker('setDate', new Date())



//Second Quarter Status
$('.seconddate').datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    orientation: 'bottom auto',
}).on('change', function () {
    let seconddate = $(this).val();
    $("#seconddate-form").val(seconddate);
});
$('.seconddate').parents('.seconddate').first().datepicker('setDate', new Date());


//Third Quarter Status
$('.thirddate').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    orientation: 'bottom auto',
}).on('change', function () {
    let thirddate = $(this).val();
    $("#thirddate-form").val(thirddate);
});
$('.thirddate').parents('.thirddate').first().datepicker('setDate', new Date());


//Forth Quarter Status
$('.forthdate').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    orientation: 'bottom auto',
}).on('change', function () {
    let forthdate = $(this).val();
    $("#forthdate-form").val(forthdate);
});
$('.forthdate').parents('.forthdate').first().datepicker('setDate', new Date());


//Date Remarks
$('.datepicker3').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    orientation: 'bottom auto',
})
$('input[name="date_findings"]').parents('.datepicker3').first().datepicker('setDate', new Date());

//Edit Date Remarks
$('.remarksedit').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true,
    orientation: 'bottom auto',
})
$('input[name="date_findings"]').parents('.remarksedit').first().datepicker('setDate', new Date());

//Create Schedule Year
$('.datepicker4').datepicker({
    format: " yyyy",
    viewMode: "years",
    minViewMode: "years",
    autoclose: true,
    orientation: 'bottom auto',
})
$('input[name="year"]').parents('.datepicker4').first().datepicker('setDate', new Date());
