var $;
$(document).ready(function () {
    "use strict";

//    $(".imgs-box img").first().hover(function () {
//        $(this).attr("src", "imges/ah.jpg");
//    }, function () {
//        $(this).attr("src", "imges/a.jpg");
//    });
//
//    $(".imgs-box .secImg").hover(function () {
//        $(this).attr("src", "imges/bh.jpg");
//    }, function () {
//        $(this).attr("src", "imges/b.jpg");
//    });
//
//    $(".imgs-box img").last().hover(function () {
//        $(this).attr("src", "imges/ch.jpg");
//    }, function () {
//        $(this).attr("src", "imges/c.jpg");
//    });


    $(".nav > li > a ").first().click(function () {
        $("#speces, #acc, #safty, #features").slideUp("slow");
        $("#about").slideToggle("slow", function () {
        $(".navbar-default .navbar-nav li .active").toggleClass();
        });
    });

    $(".nav > li > a.fea ").click(function () {
        $(".navbar-default .navbar-nav li .active").toggleClass();
        $("#about,#speces, #acc, #safty").slideUp("slow");
        $("#features").slideToggle("slow");
    });

    $(".nav > li > a.safty").click(function () {
        $(".navbar-default .navbar-nav li .active").toggleClass();
        $("#about,#speces, #features,  #acc").slideUp("slow");
        $("#safty").slideToggle("slow");
    });

    $(".nav > li > a.acc").click(function () {
        $(".navbar-default .navbar-nav li .active").toggleClass();
        $("#about,#speces, #safty,  #features").slideUp("slow");
        $("#acc").slideToggle("slow");
    });

    $(".nav > li > a").last().click(function () {
        $(".navbar-default .navbar-nav li .active").toggleClass();
        $("#about,#features, #acc, #safty").slideUp("slow");
        $("#speces").slideToggle("slow");
    });

    $(".nav > li > a").click(function () {
        $(this).siblings().css({background: "transparent"});
    });

    /* applyClickEvent */
    function applyClickEvent() {
        $('a[href*=#]').on('click', function (e) {
            e.preventDefault();

            if ($($.attr(this, 'href')).length > 0) {
                $('html, body').animate({
                    scrollTop: $("#nav").offset().top
                }, 1000);
            }
            return false;
        });
    }
    applyClickEvent();

    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        }
    });

    $('.popup-modal-dismiss').click(function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    
      $('.feature1').on({
    'mouseover' : function() {
      $(this).attr('src','imges/1a.jpg');
    },
    mouseout : function() {
  $(this).attr('src','imges/1.jpg');
    }
  });
    
        $('.feature2').on({
    'mouseover' : function() {
      $(this).attr('src','imges/2a.jpg');
    },
    mouseout : function() {
  $(this).attr('src','imges/2.jpg');
    }
  });
    
    
         $('.feature3').on({
    'mouseover' : function() {
      $(this).attr('src','imges/3a.jpg');
    },
    mouseout : function() {
  $(this).attr('src','imges/3.jpg');
    }
  });

  

});
