$(document).ready(function(){
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
    responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,

            }
        }, {
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
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
        }
    }, {
        breakpoint: 876,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
        }
    }, {
        breakpoint: 550,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 350,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
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
    responsive: [{
        breakpoint: 1199,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    }, {
        breakpoint: 991,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,

        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,

        }
    }]
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
    responsive: [{
        breakpoint: 1199,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    }, {
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    }, {
        breakpoint: 976,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
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
      fade: true,
  cssEase: 'linear',
});



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
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: false,
    accessibility: true,
    onAfterChange: function(slide, index) {
        console.log("slider-nav change");
        console.log(this.$slides.get(index));
        jQuery('.current-slide').removeClass('current-slide');
        jQuery(this.$slides.get(index)).addClass('current-slide');
    },
    onInit: function(slick) {
        $(slick.$slides.get(0)).addClass('current-slide');
    }
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
    centerMode: false,
    focusOnSelect: true,
    nextArrow: '.plan-next',
    prevArrow: '.plan-prev',
    responsive: [{
        breakpoint: 1199,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    }, {
        breakpoint: 991,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    }, {
        breakpoint: 976,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});

$('.other-category').slick({
    slidesToShow: 3,
    slidesToScroll: 1,

    dots: false,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 3000,
    nextArrow: '.other-next',
    prevArrow: '.other-prev',
    responsive: [{
        breakpoint: 1199,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    },  {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 550,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});


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
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    }, {
        breakpoint: 976,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 767,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 550,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 400,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});

});