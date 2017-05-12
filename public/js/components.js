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
        $("body>md-content").scroll(function() {
        if ($("body>md-content").scrollTop() > $(".topbar").height() + $("header").height() - 40 + $(".instHeadImageContainer").outerHeight()) {
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
    })
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
});

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

$( "li.hasSub" ).click(function() {
    $( "li.hasSub" ).toggleClass( "active" );
});

