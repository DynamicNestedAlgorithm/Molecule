$(function (){

    "use strict";

    // particle
    $('#home').particleground({
        dotColor: '#333',
        lineColor: '#222'
    });


});

// Preloader

$(window).on("load",function (){

    $(".loading").fadeOut(500);

});