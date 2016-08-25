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
        if ($(window).scrollTop() > $(".topbar").height() + $(".top-navbar").height() + $(".layout-breadcrumbs").height() + $(".club-main-photo").height()) {
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
    SmoothScroll.init();
});



$(".togglebtn").click(function() {
    $("body").toggleClass('overflow-h');
    $(".xs-menu").slideToggle("slow", function() {});
    $("#mask").slideToggle(1, function() {});
    $(".xs-menu-second").css("display", "none");
});

$(".togglebtn-second").click(function() {
    //    $("body").toggleClass('overflow-h');
    $(".xs-menu-second").slideToggle("slow", function() {});
    //    $("#mask").slideToggle(1, function () {});
});

$("#mask").click(function() {
    $("#mask").slideToggle("fast", function() {});
    $(".xs-menu").slideToggle("slow", function() {});
    $("body").removeClass('overflow-h');
});

$(".close-search").click(function() {
    $('.quick-search').slideToggle();
});



$(".top-search").click(function() {
    if ($(window).width() > 767) {
        $('.sliding').slideToggle(10);
    } else {
        $('.quick-search').slideToggle(10);
    }
});


$(".top-search").click(function() {
    if ($(window).width() > 767) {
        $('.top-search').toggleClass('top-search-active');
    } else {
        $('.top-search').removeClass('top-search-active');
    }
});


$(document).ready(
    function() {
        $(".menu-modal").niceScroll({
            cursoropacitymax: 1,
            cursorwidth: 0,
            cursorborder: 0,
        });
    }
);

$(document).ready(
    function() {
        $(".modal-fade").niceScroll({
            cursoropacitymax: 1,
            cursorwidth: 0,
            cursorborder: 0,
        });
    }
);





$(".language .lang-main").click(function() {
    $(".language ul").slideToggle(0);
    $(".language").toggleClass("active");
    $(".lang-main").toggleClass("active");
});






$(window).resize(function() {
    if ($(window).width() > 767) {
        $('#mask').css('display', 'none');
        $('.xs-menu').css('display', 'none');
        $('body').removeClass('overflow-h');
    }
});

$('.auth').click(function() {
    $('.modal-fade').slideToggle("fast", function() {});
    $('.modal-auth').slideToggle("fast", function() {})
    $("body").toggleClass('overflow-h');
    $(".xs-menu").css('display', 'none');
    $("#mask").css('display', 'none');

});

$('.modal-fade').click(function() {
    $('.modal-auth').slideToggle("fast", function() {})
    $('.modal-fade').slideToggle("fast", function() {})
    $("body").removeClass('overflow-h');
})

$('.order-event').click(function() {
    $('.modal-fade-second').slideToggle("fast", function() {});
    $('.modal-event').slideToggle("fast", function() {})
    $("body").toggleClass('overflow-h');
    $(".xs-menu").css('display', 'none');
    $("#mask").css('display', 'none');
});

$('.tell-event').click(function() {
    $('.modal-fade-fourth').slideToggle("fast", function() {});
    $('.modal-tell-event').slideToggle("fast", function() {})
    $("body").toggleClass('overflow-h');
    $("#mask").css('display', 'none');
});

$('.modal-fade-fourth').click(function() {
    $('.modal-fade-fourth').slideToggle("fast", function() {})
    $('.modal-tell-event').slideToggle("fast", function() {})
    $("body").removeClass('overflow-h');
})

$('.modal-fade-second').click(function() {
    $('.modal-fade-second').slideToggle("fast", function() {})
    $('.modal-event').slideToggle("fast", function() {})
    $("body").removeClass('overflow-h');
})

$(document).ready(function() {
    var input = $('.menu-input');
    var a;
    $('.hight').click(function() {
        a = input.val();
        a++;
        input.val(a);
    });

    $('.low').click(function() {
        a = input.val();
        a = (a < 2) ? 2 : a;
        a--;
        input.val(a);

    });
});

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


$('.menu-items').jscroll({
    loadingHtml: '<img height=""50px" width="50px" src="images/loading_spinner.gif" alt="Loading" /> Loading...',
});

$('.news-items').jscroll({
    loadingHtml: '<img height=""50px" width="50px" src="images/loading_spinner.gif" alt="Loading" /> Loading...',
});

$('.club-items').jscroll({
    loadingHtml: '<img height=""50px" width="50px" src="images/loading_spinner.gif" alt="Loading" /> Loading...',
});

$('.gallery-items').jscroll({
    loadingHtml: '<img height=""50px" width="50px" src="images/loading_spinner.gif" alt="Loading" /> Loading...',
    nextSelector: 'a:last',
});


$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

$(".cart-trig").mouseenter(function() {
    $('.cart-container').addClass('cart-active');
});

$(".cart-container").mouseleave(function() {
    $('.cart-container').removeClass('cart-active');
});

$(".cart-remove-btn").click(function() {
    $(this).closest('.cart-item').remove();
});

$(".remove").click(function() {
    $(this).closest('.item-row').remove();
});
