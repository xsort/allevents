$(".left-divider-hover").mouseenter(function() {
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


$(".sidebar-hover").mouseleave(function() {
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

$(".left-divider").click(function() {
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


$('.slider-toggle').click(function() {
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

$('.slider-toggle-open').click(function() {
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

$(document).ready(
    function() {
        $(".sidebar-container").niceScroll({
            cursorwidth: 0,
            cursorborder: 0,
        });
    }
);
