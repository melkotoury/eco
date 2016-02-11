var $;
$(document).ready(function () {
    "use strict";

    $(".imgs-box img").first().hover(function () {
        $(this).attr("src", "../imges/icons/B5.jpg");
    }, function () {
        $(this).attr("src", "../imges/icons/B2.jpg");
    });

    $(".imgs-box .secImg").hover(function () {
        $(this).attr("src", "../imges/icons/B6.jpg");
    }, function () {
        $(this).attr("src", "../imges/icons/B1.jpg");
    });

    $(".imgs-box img").last().hover(function () {
        $(this).attr("src", "../imges/icons/B4.jpg");
    }, function () {
        $(this).attr("src", "../imges/icons/B3.jpg");
    });


    $(".nav > li > a ").first().click(function () {
        $("#speces, #acc, #safty, #features").slideUp("slow");
        $("#about").slideToggle("slow");
    });

    $(".nav > li > a.fea ").click(function () {
        $("#about,#speces, #acc, #safty").slideUp("slow");
        $("#features").slideToggle("slow");
    });

    $(".nav > li > a.acc ").click(function () {
        $("#about,#speces, #safty,  #features").slideUp("slow");
        $("#acc").slideToggle("slow");
    });

    $(".nav > li > a").last().click(function () {
        $("#about,#features, #acc, #safty").slideUp("slow");
        $("#speces").slideToggle("slow");
    });

});
