@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')



<div class="layout-page ">

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => $trans->product_plan_breadcrumbs]]])

    <div class="layout-content" >
        <div id="loading" class="page">
            <div id="loading-center">
                <div id="loading-center-absolute" class="page">
                    <div class="object page-l one" id="object_four"></div>
                    <div class="object page-l one" id="object_three"></div>
                    <div class="object page-l one" id="object_two"></div>
                    <div class="object page-l one" id="object_one"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="container-slider-for  md-whiteframe-1dp hidden-xs">
                <div class="plan-slider-for">
                    @foreach($data->hallplan as $photo)
                        <div class="sliderForItem c-bg-center" style="background-image:url(uploaded/{{ $photo->source }});"></div>
                    @endforeach
                </div>
                <a href="{{ route('get_menu', $data->slug) }}"><img src="images/plan-menu-img.png" alt="" ></a>
            </div>
            <div class="row">
                <div class="container-slider-nav " layout="row" ng-cloak>
                    <div class="col-md-1 hidden-sm hidden-xs" >
                        <button type="button" class="plan-next control-slider prev-arrow md-whiteframe-1dp"></button>
                    </div>
                    <div class="col-md-10 col-xs-12">
                        <div class="row">
                            <div class="plan-slider-nav">
                                @foreach($data->hallplan as $photo)
                                    <div class="sliderNavItem c-bg-center" style="background-image:url(uploaded/{{ $photo->source }});"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-sm hidden-xs">
                        <button type="button" class="plan-prev control-slider next-arrow md-whiteframe-1dp"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>         
</div>

@stop

@section('linkStyleProductPlanPage')
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
@stop

@section('scriptProductPlanPage')
  
  <script src="js/slick.min.js"></script>

  <script>
    $(document).ready(function(){




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
});
  </script>
@stop

@section('styleProductPlanPage')
<style>

.next-arrow, .prev-arrow { z-index: 6; position: absolute; }

.next-arrow { background: url(../images/slider-notice/arrow-right.png); right: 0; }

.prev-arrow { background: url(../images/slider-notice/arrow-left.png); left: 0;}

.plan-next { left: 15px; }

.plan-prev { right: 15px; }

.control-slider { display: block; height: 100px; background-repeat: no-repeat; width: 35px; position: absolute; cursor: pointer; -webkit-transition: all 0.2s;transition: all 0.2s; border: none; } 

.plan-prev,.plan-next { top: 50%; transform: translate3d(0,-50%,0); background-color: white; background-size:45%; background-position: center; opacity: 0;}

.plan-prev,.plan-next { background-size:40%; background-position: center; width: 45px; position: absolute; top: 50%; transform: translate3d(0,-50%,0); background-color: rgba(255, 255, 255, 0.9); }




    /*----------------------------NEW INSTANS PAGE-----------------------------*/

.plan-slider-for .sliderForItem{ position: relative; }

.plan-slider-for .sliderForItem:before{ display: block; content: ''; padding-top: 49%; box-shadow: inset 0px 0px 0px 15px rgba(209, 201, 191, 0.7); }

.plan-slider-for .sliderForItem:after { content: ''; position: absolute; left: 15px; bottom: 15px; right: 15px; top: 15px; border:2px solid white; }

.container-slider-for a { position: absolute; right: 45px;top: 45px; width: 180px; height: auto; }

.container-slider-for a img { width: 100%; min-height: 1px; }

.plan-slider-nav { margin-bottom: 0px; }

.plan-slider-nav .sliderNavItem { position: relative; margin-left: 15px; margin-right: 15px; cursor: pointer; }

.plan-slider-nav .sliderNavItem:before { display: block; content: ''; padding-top: 75%; box-shadow: inset 0px 0px 0px 10px rgba(209, 201, 191, 0.7);     background: rgba(18, 51, 62, 0.1);}

.plan-slider-nav .sliderNavItem:after { content: ''; position: absolute; left: 10px; bottom: 10px; right: 10px; top: 10px; border:2px solid white;  }

.container-slider-nav { position: relative; }

.container-slider-nav .next-arrow,.container-slider-nav .prev-arrow { opacity: 1 }

.plan-slider-nav:before{ content: ''; position: absolute; right: -1px; top:0; height: 100%; width: 15px; background-color: white; z-index: 2}

.plan-slider-nav:after{ content: ''; position: absolute; left: 0; top:0; height: 100%; width: 15px; background-color: white; z-index: 2 }

@media(max-width: 991px){
    .container-slider-nav .next-arrow,.container-slider-nav .prev-arrow { display: none; }
    .plan-slider-for .sliderForItem:before{ padding-top: 65%;  }
}

/*----------------------------NEW INSTANS PAGE-----------------------------*/

</style>
@stop
