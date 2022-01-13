$(document).ready(function () {

    //prevent submit

    //department
    $('.form-prevent-department').on('submit', function(){
        $('.button-prevent-department').attr('disabled', 'true');
        $('.spinner').show();
    })



    //preventive maintenance post

    $('.form-prevent').on('submit', function(){
        $('.button-prevent').attr('disabled', 'true');
        $('.spinner').show();
    })

    $('.form-prevent-post-hw').on('submit', function(){
        $('.button-disable-post').attr('disabled', 'true');
        $('.spinner').show();
    })

    $('.form-prevent-post-sw').on('submit', function(){
        $('.button-disable-post').attr('disabled', 'true');
        $('.spinner').show();
    })

    $('.form-prevent-status1').on('submit', function(){
        $('.button-disable-status1').attr('disabled', 'true');
        $('.spinner').show();
    })

    $('.form-prevent-status2').on('submit', function(){
        $('.button-disable-status2').attr('disabled', 'true');
        $('.spinner').show();
    })

    $('.form-prevent-status3').on('submit', function(){
        $('.button-disable-status3').attr('disabled', 'true');
        $('.spinner').show();
    })

    $('.form-prevent-status4').on('submit', function(){
        $('.button-disable-status4').attr('disabled', 'true');
        $('.spinner').show();
    })


});