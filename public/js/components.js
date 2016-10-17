var LoadingPage = function() {
    var _loadingpage = function() {
        $("#loading").delay(2000).fadeOut(500);
    }
    return {
        init: function() {
            _loadingpage();
        }
    }
}();

var SmoothScroll = function() {
    var _smoothscroll = function() {
        try {
            $.browserSelector();
            if ($("html").hasClass("chrome")) {
                $.smoothScroll();
            }
        } catch (err) {

        };
    }
    return {
        init: function() {
            _smoothscroll();
        }
    }
}();

var ScrollToTop = function() {
    var _scrolltotop = function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 80) {
                $('.scroll-to-top').fadeIn(300);
            } else {
                $('.scroll-to-top').fadeOut(300);
            }
        });

        if ($('.scroll-to-top').length) {
            $(".scroll-to-top").on('click', function() {
                $('html, body').animate({
                    scrollTop: $('html, body').offset().top
                }, 1000);
            });
        }
    }
    return {
        init: function() {
            _scrolltotop();
        }
    }
}();



var LayoutHeader = function() {

    var _handleHeaderOnScroll = function() {
        if ($(window).scrollTop() > $(".topbar").height() + $("header").height() +$(".layoutInstMenu").height() + $(".instHeadImageContainer").height()) {
            $("body").addClass("page-on-scroll");
            $("body").removeClass("remove-bg");
            $(".top-sm-logo").css({
                "display": "none",
            });
        } else {
            $("body").removeClass("page-on-scroll");
            $("body").addClass("remove-bg");
            $(".top-sm-logo").css({
                "display": "block",
            });
        }
    }

    return {
        init: function() {
            if ($('body').hasClass('c-layout-header-fixed-non-minimized')) {
                return;
            }
            _handleHeaderOnScroll();

            $(window).scroll(function() {
                _handleHeaderOnScroll();
            });
        }
    };
}();



$(document).ready(function() {
    LayoutHeader.init();
    LoadingPage.init();
    ScrollToTop.init();
    // SmoothScroll.init();
});


// $(document).ready(
//     function() {
//         $("#sidebar md-content").niceScroll({
//             cursorwidth: 0,
//             scrollspeed: 60,
//             mousescrollstep: 40,
//         });
//     }
// );




$(document).ready(function() {
    $('.menu-left-container li.has-sub > a').on('click', function() {
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('active')) {
            element.removeClass('active');
            element.find('li').removeClass('active');
            element.find('ul').slideUp();
        } else {
            element.addClass('active');
            element.children('ul').slideDown();
            element.siblings('li').children('ul').slideUp();
            element.siblings('li').removeClass('active');
            element.siblings('li').find('li').removeClass('active');
            element.siblings('li').find('ul').slideUp();
        }
    });
});

$(document).ready(function() {
    $('.xs-menu li.has-sub > a').on('click', function() {
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('active')) {
            element.removeClass('active');
            element.find('li').removeClass('active');
            element.find('ul').slideUp();
        } else {
            element.addClass('active');
            element.children('ul').slideDown();
            element.siblings('li').children('ul').slideUp();
            element.siblings('li').removeClass('active');
            element.siblings('li').find('li').removeClass('active');
            element.siblings('li').find('ul').slideUp();
        }
    });
});


$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});
