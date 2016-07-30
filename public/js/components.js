$(window).scroll(function () {
    if ($(window).scrollTop() > 80) {

        $('.scroll-to-top').fadeIn(300);
    } else {

        $('.scroll-to-top').fadeOut(300);
    }
});

if ($('.scroll-to-top').length) {
    $(".scroll-to-top").on('click', function () {
        // animate
        $('html, body').animate({
            scrollTop: $('html, body').offset().top
        }, 1000);

    });
}

var LayoutHeader = function () {

    var _handleHeaderOnScroll = function () {



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
        //main function to initiate the module
        init: function () {
            if ($('body').hasClass('c-layout-header-fixed-non-minimized')) {
                return;
            }

            _handleHeaderOnScroll();

            $(window).scroll(function () {
                _handleHeaderOnScroll();
            });
        }
    };
}();



$(document).ready(function () {
    // init layout handlers 
    LayoutHeader.init();
});

//$(".first-section").height( $(".wrapper-footer").height() );
//$(".second-section").height( $(".wrapper-footer").height() );
//$(".third-section").height( $(".wrapper-footer").height() );
//$(".fourth-section").height( $(".wrapper-footer").height() );

$('#recommended').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '.recommended-next',
    prevArrow: '.recommended-prev',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 6000,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            }
    },

        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
    },

        {
            breakpoint: 350,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
    }
  ]
});

$('#notice').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    nextArrow: '.notice-next',
    prevArrow: '.notice-prev',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            }
    },
        {
            breakpoint: 876,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            }
    },
        {
            breakpoint: 550,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
    },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
    },
        {
            breakpoint: 350,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
    }
  ]
});


$('#news').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '.news-next',
    prevArrow: '.news-prev',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,

            }
    },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,

            }
    }
  ]
});

$('#report').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: '.report-next',
    prevArrow: '.report-prev',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
         {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 976,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
    },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
    }
  ]
});



$(".left-divider-hover").mouseenter(function () {
    $('.sidebar-container').animate({
        left: '0'
    }, 400);
    $('.slider-toggle').animate({
        left: '330'
    }, 400);
    $('.menu-button').animate({
        left: '330'
    }, 400);
    $('.slider-toggle').toggleClass('slider-toggle-active');
    $('.sidebar-hover').toggleClass('sidebar-hover-active');
    $('.menu-button').toggleClass('menu-button-active');
    $('.sidebar-container').toggleClass('sidebar-container-active');
})


$(".sidebar-hover").mouseleave(function () {
    $('.sidebar-container').animate({
        left: '-330'
    }, 400);
    $('.slider-toggle').animate({
        left: '3'
    }, 400);
    $('.menu-button').animate({
        left: '3'
    }, 400);
    $('.slider-toggle').removeClass('slider-toggle-active');
    $('.sidebar-hover').removeClass('sidebar-hover-active');
    $('.menu-button').removeClass('menu-button-active');
    $('.sidebar-container').removeClass('sidebar-container-active');
})

$(".left-divider").click(function () {
    $('.sidebar-container').animate({
        left: '0'
    }, 400);
    $('.slider-toggle').animate({
        left: '330'
    }, 400);
    $('.menu-button').animate({
        left: '330'
    }, 400);
    $('.slider-toggle').toggleClass('slider-toggle-active');
    $('.sidebar-hover').toggleClass('sidebar-hover-active');
    $('.menu-button').toggleClass('menu-button-active');
    $('.sidebar-container').toggleClass('sidebar-container-active');
});

//$('.menu-button').click(function () {
//$('.sidebar-container').animate({
//        left: '0'
//    }, 400);
//    $('.slider-toggle').animate({
//        left: '330'
//    }, 400);
//    $('.menu-button').animate({
//        left: '330'
//    }, 400);
//    $('.slider-toggle').toggleClass('slider-toggle-active');
//    $('.sidebar-hover').toggleClass('sidebar-hover-active');
//    $('.menu-button').toggleClass('menu-button-active');
//    $('.sidebar-container').toggleClass('sidebar-container-active');
//});

$('.slider-toggle').click(function () {
    $('.sidebar-container').animate({
        left: '-330'
    }, 400);
    $('.slider-toggle').animate({
        left: '3'
    }, 400);
    $('.menu-button').animate({
        left: '3'
    }, 400);
    $('.slider-toggle').removeClass('slider-toggle-active');
    $('.sidebar-hover').removeClass('sidebar-hover-active');
    $('.menu-button').removeClass('menu-button-active');
    $('.sidebar-container').removeClass('sidebar-container-active');
});

$('.slider-toggle-open').click(function () {
    $('.sidebar-container').animate({
        left: '0'
    }, 400);
    $('.slider-toggle').animate({
        left: '330'
    }, 400);
    $('.menu-button').animate({
        left: '330'
    }, 400);
    $('.slider-toggle').toggleClass('slider-toggle-active');
    $('.sidebar-hover').toggleClass('sidebar-hover-active');
    $('.menu-button').toggleClass('menu-button-active');
    $('.sidebar-container').toggleClass('sidebar-container-active');
});



//$('.menu-button').click(function(){
//    var effect = 'slide';
//    var options = { direction: "right" };
//    var duration = 5000; 
//    
//    $('.sidebar-container').toggle(effect, options, duration);
//     $('.slider-toggle').toggleClass('slider-toggle-active');
//    $(".sidebar-container").animate({width:'toggle'},330);
//    $('.slider-toggle').toggleClass('slider-toggle-active');
//});

//, function() {       
//  $('.sidebar-container').animate({ left: '0' }, 500);
//  $('.slider-toggle').animate({ left: '0' }, 500);
//});

//$('.menu-button').click(function () {
// $('.sidebar-container').toggle('slide', {
//            direction: 'left'
//        }, 1000);
//});
//
//$('.menu-button').click(function () {
//    $( ".sidebar-container" ).toggle( "slide" );
//    $('.slider-toggle').toggleClass('slider-toggle-active');
//});

//
//$(".slider-toggle").click(function () {
//        $('.sidebar-container').animate({
//            left: '0'
//        }, 500);
//        $('.slider-toggle').animate({
//            left: '330'
//        }, 500);
//        $('.slider-toggle').toggleClass('slider-toggle-active');
//    },
//    function () {
//        $('.sidebar-container').animate({
//            left: '-330'
//        }, 500);
//        $('.slider-toggle').animate({
//            left: '7'
//        }, 500);
//        $('.slider-toggle').removeClass('slider-toggle-active');
//    });


//$(".slider-toggle").mouseenter(function () {
//    $('.sidebar-container').slideToggle(30);
//    $('.slider-toggle').toggleClass('slider-toggle-active');
//    $('.sidebar-container').toggleClass('sidebar-container-active');
//});

$(".togglebtn").click(function () {
    $("body").toggleClass('overflow-h');
    $(".xs-menu").slideToggle("slow", function () {});
    $("#mask").slideToggle(1, function () {});
    $(".xs-menu-second").css("display", "none");
});

$(".togglebtn-second").click(function () {
    //    $("body").toggleClass('overflow-h');
    $(".xs-menu-second").slideToggle("slow", function () {});
    //    $("#mask").slideToggle(1, function () {});
});

$("#mask").click(function () {
    $("#mask").slideToggle("fast", function () {});
    $(".xs-menu").slideToggle("slow", function () {});
    $("body").removeClass('overflow-h');
});

$(".close-search").click(function () {
    $('.quick-search').slideToggle();
});



$(".top-search").click(function () {
    if ($(window).width() > 767) {
        $('.sliding').slideToggle(10);
    } else {
        $('.quick-search').slideToggle(10);
    }
});


$(".top-search").click(function () {
    if ($(window).width() > 767) {
        $('.top-search').toggleClass('top-search-active');
    } else {
        $('.top-search').removeClass('top-search-active');
    }
});





$(document).ready(
    function () {
        $(".sidebar-container").niceScroll({
//            cursoropacitymax: 1,
            cursorwidth: 0,
            cursorborder: 0,
        });
    }
);

$(document).ready(
    function () {
        $(".menu-modal").niceScroll({
            cursoropacitymax: 1,
            cursorwidth: 0,
            cursorborder: 0,
        });
    }
);

$(document).ready(
    function () {
        $(".modal-fade").niceScroll({
            cursoropacitymax: 1,
            cursorwidth: 0,
            cursorborder: 0,
        });
    }
);

$(".lang-r").click(function () {
    $(".lang-l").toggleClass("lang-l-active");
    $(".lang-r").toggleClass("active");
});

$(".lang-l").click(function () {
    if ($(".language").hasClass("language-ru")) {
        $(".language").toggleClass("language-ro");
        $(".language").removeClass("language-ru");
        $(".lang-l").toggleClass("lang-l-active");
        $(".lang-r").removeClass("active");
    } else {
        $(".language").toggleClass("language-ru");
        $(".language").removeClass("language-ro");
        $(".lang-l").toggleClass("lang-l-active");
        $(".lang-r").removeClass("active");
    }
});

$(window).resize(function () {
    if ($(window).width() > 767) {
        $('#mask').css('display', 'none');
        $('.xs-menu').css('display', 'none');
        $('body').removeClass('overflow-h');
    }
});

$('.club-main-gallery').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: '.club-main-next',
    prevArrow: '.club-main-prev',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 4000,
});

$(window).load(function () {
    $("#loading").fadeOut(1000);
})

//
//$( window ).resize(function() {
//   $('.modal').css("left","50%").css("left","-=300px");
//});
//$('.modal').css("left","50%").css("left","-=300px");

$('.auth').click(function () {
    $('.modal-fade').slideToggle("fast", function () {});
    $('.modal-auth').slideToggle("fast", function () {})
    $("body").toggleClass('overflow-h');
    $(".xs-menu").css('display', 'none');
    $("#mask").css('display', 'none');

});

$('.modal-fade').click(function () {
    $('.modal-auth').slideToggle("fast", function () {})
    $('.modal-fade').slideToggle("fast", function () {})
    $("body").removeClass('overflow-h');
})

$('.order-event').click(function () {
    $('.modal-fade-second').slideToggle("fast", function () {});
    $('.modal-event').slideToggle("fast", function () {})
    $("body").toggleClass('overflow-h');
    $(".xs-menu").css('display', 'none');
    $("#mask").css('display', 'none');
});

$('.tell-event').click(function () {
    $('.modal-fade-fourth').slideToggle("fast", function () {});
    $('.modal-tell-event').slideToggle("fast", function () {})
    $("body").toggleClass('overflow-h');
    $("#mask").css('display', 'none');
});

$('.modal-fade-fourth').click(function () {
    $('.modal-fade-fourth').slideToggle("fast", function () {})
    $('.modal-tell-event').slideToggle("fast", function () {})
    $("body").removeClass('overflow-h');
})

$('.modal-fade-second').click(function () {
    $('.modal-fade-second').slideToggle("fast", function () {})
    $('.modal-event').slideToggle("fast", function () {})
    $("body").removeClass('overflow-h');
})

$(document).ready(function () {
    var input = $('.menu-input');
    var a;
    $('.hight').click(function () {
        a = input.val();
        a++;
        input.val(a);
    });

    $('.low').click(function () {
        a = input.val();
        a = (a < 2) ? 2 : a;
        a--;
        input.val(a);

    });
});

$(document).ready(function () {
    $('.menu-left-container li.has-sub > a').on('click', function(){
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('active')) {
            element.removeClass('active');
            element.find('li').removeClass('active');
            element.find('ul').slideUp();
        }
        else {
            element.addClass('active');
            element.children('ul').slideDown();
            element.siblings('li').children('ul').slideUp();
            element.siblings('li').removeClass('active');
            element.siblings('li').find('li').removeClass('active');
            element.siblings('li').find('ul').slideUp();
        }
    });
});

$(document).ready(function () {
    $('.xs-menu li.has-sub > a').on('click', function(){
        $(this).removeAttr('href');
        var element = $(this).parent('li');
        if (element.hasClass('active')) {
            element.removeClass('active');
            element.find('li').removeClass('active');
            element.find('ul').slideUp();
        }
        else {
            element.addClass('active');
            element.children('ul').slideDown();
            element.siblings('li').children('ul').slideUp();
            element.siblings('li').removeClass('active');
            element.siblings('li').find('li').removeClass('active');
            element.siblings('li').find('ul').slideUp();
        }
    });
});

// $(function () {

//     var menu_ul = $('.nav.xs-menu > li > ul'),
//         menu_a = $('.nav.xs-menu > li > a');

//     menu_ul.hide();

//     menu_a.click(function (e) {
//         e.preventDefault();
//         if (!$(this).hasClass('active')) {
//             menu_a.removeClass('active');
//             menu_ul.filter(':visible').slideUp('normal');
//             $(this).addClass('active').next().stop(true, true).slideDown('normal');
//         } else {
//             $(this).removeClass('active');
//             $(this).next().stop(true, true).slideUp('normal');
//         }
//     });
// });

// $('.menu-left-btn').click(function () {
//     $('.menu-left').slideToggle();
// })

// $(function () {

//     var menu_ul = $('.menu-left > li > ul'),
//         menu_a = $('.menu-left > li > a');

//     menu_ul.hide();

//     menu_a.click(function (e) {
//         e.preventDefault();
//         if (!$(this).hasClass('active')) {
//             menu_a.removeClass('active');
//             menu_ul.filter(':visible').slideUp('normal');
//             $(this).addClass('active').next().stop(true, true).slideDown('normal');
//         } else {
//             $(this).removeClass('active');
//             $(this).next().stop(true, true).slideUp('normal');
//         }
//     });
// });

$(document).ready(function () {

    // Sliders

    //// Slider Top
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: false,
        focusOnSelect: true,
        arrows: false,
        accessibility: true,
        onAfterChange: function (slide, index) {
            console.log("slider-nav change");
            console.log(this.$slides.get(index));
            jQuery('.current-slide').removeClass('current-slide');
            jQuery(this.$slides.get(index)).addClass('current-slide');
        },
        onInit: function (slick) {
            $(slick.$slides.get(0)).addClass('current-slide');
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



$('.plan-slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.plan-slider-nav'
});

$('.plan-slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.plan-slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    nextArrow: '.plan-next',
    prevArrow: '.plan-prev',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 976,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
    },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
    },
        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
    }
  ]
});

$('.other-category').slick({
    slidesToShow: 4,
    slidesToScroll: 1,

    dots: false,
    centerMode: true,

    nextArrow: '.other-next',
    prevArrow: '.other-prev',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
    },
        {
            breakpoint: 976,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
    },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
    },
        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
    }
  ]
});

$(document).ready(function () {
    $('.modal-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.modal-slider-nav'
    });

    $('.modal-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.modal-slider-for',
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000,
        centerMode: true,
        focusOnSelect: true,
        nextArrow: '.modal-next',
        prevArrow: '.modal-prev',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,

                }
    },
            {
                breakpoint: 976,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
    },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
    },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
    },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
    }
  ]
    });
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(".cart-trig").mouseenter(function () {
    $('.cart-container').addClass('cart-active');
});

$(".cart-container").mouseleave(function () {
    $('.cart-container').removeClass('cart-active');
});

$(".cart-remove-btn").click(function () {
    $(this).closest('.cart-item').remove();
});


$(".remove").click(function () {
    $(this).closest('.item-row').remove();
});