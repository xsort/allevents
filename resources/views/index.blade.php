
@extends('body')
@section('centerbox')


<div class="layout-page indexPage">
    <div class="layout-content" >
        <div class="container-fluid mainMenu" >
            <div class="row" layout="row" layout-align="space-between stretch">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    
                	@foreach ($categories as $key=>$category)
                	
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">

                            <a href="{{$category->slug}}" class="mainMenuItem filterBlock-{{$key}} c-bg-center" style="background-image: url('uploaded/{{isset($category->photos{0}) ? $category->photos{0}->source : 'nophoto.png'}}');">

                                <div class="c-bg-center" layout="column" layout-align="space-between stretch">
                                    <h3 class="mainMenuTitle" layout="column" layout-align="end center" >{{$category->name}}</h3>
                                    <span class="mainMenuDescrShort">{!!$category->description!!}</span>
                                    <md-button>Посмотреть все</md-button>
                                </div>
                            </a>

                        </div>
                    </div>
                    
                    @endforeach

                    
                </div>
                @include('partials.right-banners')
            </div>
        </div>

        <section class="row bgBlue" ng-cloak>
            <div class="text-center">
                <h2 class="whiteBlockTitle">{{ trans('common.recommended') }}</h2>
            </div>

            <div class="container-fluid" ng-cloak>
                <div class="recommendedSlider">
                    <button type="button" class="recommended-next prev-arrow control-slider hidden-xs md-whiteframe-3dp"></button>

                    <div id="recommended">
        				@foreach ($products as $product)
        	        	<a href="{{$product->slug}}" class="instItem" layout-align="center center">
                            <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                            <div layout="column" layout-align="space-between stretch">
                                <h3 class="instTitle">
                                    <span>{{$product->name}}</span>
                                    
                                </h3>
                                <span class="instDescrShort">{{ str_limit($product->description_short, $limit = 120, $end = '...') }}</span>
                                <md-button class="md-rised" md-ink-ripple="false">Посмотреть</md-button>
                            </div>
                        </a>
        	            @endforeach
                    </div>

                    <button type="button" class="recommended-prev next-arrow control-slider hidden-xs md-whiteframe-3dp"></button>
                </div>
            </div>

        </section>

        <section class="sectionDivider">

            <div class="text-center">
                <h2 class="indexSectionTitle">{{ trans('common.reports') }}</h2>
            </div>
                    <div class="container-fluid ">
                        <div class="row">

                            <div id="reportSlider" layout="row" ng-cloak>
                                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                                    <button type="button" class="report-next prev-arrow control-slider hidden-xs md-whiteframe-2dp"></button>
                                </div>

                                <div class="col-lg-10 col-md-10 col-xs-12" id="report">

                                    <a href="javascript:void(0)" class="reportItem c-bg-center" style="background-image: url('images/reports-notice/concert.png')">
                                        <div layout="row" layout-align="center center">
                                            <span>Концерты</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="reportItem c-bg-center" style="background-image: url('images/reports-notice/sport.png')">
                                        <div layout="row" layout-align="center center">
                                            <span>Спорт</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="reportItem c-bg-center" style="background-image: url('images/reports-notice/theatre.png')">
                                        <div layout="row" layout-align="center center">
                                            <span>Театры</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="reportItem c-bg-center" style="background-image: url('images/reports-notice/cinema.jpg')">
                                        <div layout="row" layout-align="center center">
                                            <span>Кинотеатры</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="reportItem c-bg-center" style="background-image: url('images/reports-notice/sport.png')">
                                        <div layout="row" layout-align="center center">
                                            <span>Развлечения</span>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="reportItem c-bg-center" style="background-image: url('images/reports-notice/festival.jpg')">
                                        <div layout="row" layout-align="center center">
                                            <span>Фестивали и выставки</span>
                                        </div>
                                    </a>
        		                </div>

                                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                                    <button type="button" class="report-prev next-arrow control-slider hidden-xs md-whiteframe-2dp"></button>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

        <section>
            <div class="text-center">
                <h2 class="indexSectionTitle">{{ trans('common.news') }}</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="newsSlider" ng-cloak>
                        <button type="button" class="news-next prev-arrow control-slider hidden-xs md-whiteframe-3dp"></button>

                        <div id="news">
                            @foreach ($newslist as $news)
                            <div class="newsItem" layout="column" layout-align="stretch" >

                                <a href="/news/{{$news->slug}}" class="c-bg-center md-whiteframe-1dp" style="background-image:url('uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}');">
                                </a>

                                <h2 class="newsItemTitle"><a href="/news/{{$news->slug}}" class="">{{$news->name}}</a></h2>

                                <figure>
                                    <span class="text-left">{{ date('d', strtotime($news->created_at)) }} {{ ucfirst(Date::parse($news->created_at)->format('M')) }} , {{ date('Y', strtotime($news->created_at)) }}<!-- 18 февраля 2016 --></span><!-- <span class="pull-right">{{ date('H:i', strtotime($news->created_at)) }}</span> -->
                                </figure>
                                <span>{{ str_limit($news->description_short, $limit = 100, $end = '...') }}</span>

                                <div>
                                    <md-button ng-href="/news/{{$news->slug}}" class="newsMore md-raised">{{ trans('common.read-more-dot') }} <span class="fa fa-angle-double-right"></span></md-button>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <button type="button" class="news-prev next-arrow control-slider hidden-xs md-whiteframe-3dp"></button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop

@section('jsonIndexMicrodata')
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "https://allevents.md/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://query.example.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
@stop

@section('loadingPage')
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>
        </div>
    </div>
</div>
@stop

@section('linkStyleIndexPage')
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
@stop


@section('scriptIndexPage')
    <script src="js/slick.min.js"></script>


<script>
$(document).ready(function(){
    $('#recommended').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '.recommended-prev',
    prevArrow: '.recommended-next',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 3500,
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
    nextArrow: '.notice-prev',
    prevArrow: '.notice-next',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 2500,
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
    nextArrow: '.news-prev',
    prevArrow: '.news-next',
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
    nextArrow: '.report-prev',
    prevArrow: '.report-next',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 2200,
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
});
</script>
@stop




@section('styleIndexPage')
<style>
    
/*-----------------------------NEW INDEX PAGE------------------------------*/

.indexPage > div > section { padding-top: 10px; }

.next-arrow, .prev-arrow { z-index: 6; position: absolute; }

.next-arrow { background: url(../images/slider-notice/arrow-right.png); right: 0; }

.prev-arrow { background: url(../images/slider-notice/arrow-left.png); left: 0;}

.control-slider { display: block; height: 100px; background-repeat: no-repeat; width: 35px; position: absolute; cursor: pointer; -webkit-transition: all 0.2s;transition: all 0.2s; border: none; }

section.bgBlue { background: #dee3eb; }

section.sectionDivider { background: url(../images/divider-block.png) no-repeat center bottom; -webkit-background-size: 100% 1px; -moz-background-size: 100% 1px; -o-background-size: 100% 1px; background-size: 100% 1px; }

.indexSectionTitle { margin: 0px; color: #898989; font-size: 27px; text-align: center; text-transform: uppercase; letter-spacing: 1px; padding-top: 45px; padding-bottom: 60px; background: url(../images/deliteli.png) no-repeat center 106px; position: relative; display: inline-block; }


/*-------------------RECOMMENDED SLIDER----------------------*/

.instItem { display: block; !important; width: 100%; position: relative; background-color: white; margin-right: 15px; margin-left: 15px; padding: 35px; }

.instItem img{     max-width: calc(100% - 70px); max-height: calc(100% - 70px); position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-50%,0);}

.instItem > div {  transition: all 200ms linear; -webkit-transition: all 200ms linear; position: absolute; left: 0; top: 0; display: flex; width: 100%; height: 100%; background-color: rgba(193, 222, 151, 1); opacity: 0; padding:35px;}

.instItem:hover > div { opacity: 1; }

.instItem:before { content: ""; display: block; padding-top: 100%; }

.instItem .instDescrShort { transition: all 0.35s ease; margin-bottom:10px;font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 15px; color: white; }

.instItem .instTitle { transition: all 0.25s ease;   border-bottom:2px solid white; padding-bottom: 10px; margin:0; color: white; text-align: center; margin-bottom: 10px; letter-spacing: 0.5px;text-transform: uppercase; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: bold;}

.instItem button { transition: all 0.45s ease;  font-weight:bold; min-height:30px; height:30px;margin:0; color: rgba(193, 222, 151, 1); border-radius: 0; background-color: white; width: 70%; margin-left: 15%; border-radius: 20px;line-height: 1px; font-size: 12px;}

.instItem button:hover { background-color: transparent !important; color: white; border:2px solid white; }

.instItem .instTitle,.instItem .instDescrShort,.instItem button{ -webkit-transform: translate3d(0,60px,0); transform: translate3d(0,60px,0); }

.instItem:hover .instTitle,.instItem:hover .instDescrShort,.instItem:hover button { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);   }

.recommendedSlider { position: relative; margin-top: 50px;}

.recommended-prev, .recommended-next,.plan-prev,.plan-next { top: 50%; transform: translate3d(0,-50%,0); background-color: white; background-size:45%; background-position: center; opacity: 0;}

.recommendedSlider:hover .recommended-prev, .recommendedSlider:hover .recommended-next { opacity: .8 }

.recommendedSlider:hover .recommended-prev:hover, .recommendedSlider:hover .recommended-next:hover { opacity: 1; }

#recommended:before{ content: ''; position: absolute; right: -1px; top:0; height: 100%; width: 16px; background-color: #dee3eb; z-index: 2 }

#recommended:after{ content: ''; position: absolute; left: 0; top:0; height: 100%; width: 15px; background-color: #dee3eb; z-index: 2 }


/*-----------------------------------------------------------*/



/*--------------------SLIDER REPORT--------------------------*/

.report-next, .report-prev,.club-main-next,.club-main-prev { background-size:40%; background-position: center; width: 45px; position: absolute; top: 50%; transform: translate3d(0,-50%,0); background-color: rgba(255, 255, 255, 0.9); }

.report-next, { left: 15px; }

.report-prev { right: 15px; } 

#reportSlider { margin-bottom: 30px;  position: relative; margin-top: 30px;}

#report { padding-left: 0px; padding-right: 0px; margin-bottom: 0; }

#report .reportItem { position: relative; width: 100%; display: block; margin-left: 15px; margin-right: 15px; }

#report .reportItem:before { display: block; content: ''; padding-top: 75%; }

#report .reportItem > div { transition: all 200ms linear; -webkit-transition: all 200ms linear; position: absolute; top:0px; left: 0px; bottom: 0px; right: 0px; box-shadow: rgba(255, 255, 255, 0.498039) 0px 0px 0px 15px inset; }

#report .reportItem > div:before { position: absolute; top: 15px; bottom: 15px; left: 15px; right: 15px; content: ''; border:2px solid white; }

#report .reportItem > div span { line-height: 37px; text-transform: uppercase; color: white; text-align: center; font-size: 27px; letter-spacing: 0.4px;     text-shadow: 1px 1px 1px rgb(91,91,91),0 0 1px rgb(91, 91, 91);}

#report .reportItem:hover > div { background: #c1de97 !important; }

#report:before,.plan-slider-nav:before{ content: ''; position: absolute; right: -1px; top:0; height: 100%; width: 15px; background-color: white; z-index: 2 }

#report:after,.plan-slider-nav:after{ content: ''; position: absolute; left: 0; top:0; height: 100%; width: 15px; background-color: white; z-index: 2 }

/*-----------------------------------------------------------*/



/*-----------------------NEWS SLIDER-------------------------*/

#news{ position: relative; margin-bottom: 0; }

.newsSlider { position: relative; margin-top: 30px;}

.newsSlider:hover .news-next { opacity: 0.9; }

.newsSlider:hover .news-prev { opacity: 0.9; }

.newsSlider .news-prev { top: 25px; background-color: white; opacity: 0; }

.newsSlider .news-next { top: 25px; background-color: white; opacity: 0; }

.newsSlider .news-prev:hover, .newsSlider .news-next:hover { opacity: 1 !important; }

#news .newsItem { position: relative; margin-left: 15px; margin-right: 15px; min-height: 365px; color: rgb(101, 101, 101);}

#news .newsItem > a:first-child { height: 150px; display: block; position: relative; transition: all 0.2s ease;}

#news .newsItem .newsItemTitle { margin:10px 0;font-size: 24px; line-height: 1.2; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; -webkit-transition: all 0.2s ease; transition: all 0.2s ease; }

#news .newsItem .newsItemTitle a { color: rgb(91, 91, 91);  font-size: 20px; letter-spacing: 0.5px;     transition: all 200ms linear; -webkit-transition: all 200ms linear; }

#news .newsItem > div { position: absolute; bottom: 5px; }

#news .newsItem > div a {     margin: 0; border-radius: 0; padding-left: 15px; padding-right: 15px; transition: all 200ms linear; -webkit-transition: all 200ms linear; font-size: 12px; letter-spacing: 1px; background-color: #3e3e3e; color: white;}

#news .newsItem:hover > div a { background-color: #E3605B; color: white; box-shadow: 0 4px 5px -2px rgba(0,0,0,.2),0 7px 10px 1px rgba(0,0,0,.14),0 2px 16px 1px rgba(0,0,0,.12); }

#news .newsItem > div a.md-button .md-ripple-container{ border-radius: 0; }

#news .newsItem figure{ margin:0; margin-bottom: 10px; text-transform: uppercase; font-size: 13px; }

#news .newsItem > span {     padding: 0; font-size: 13px; font-weight: normal; letter-spacing: 0.5px; line-height: 20px; color: #777; }

#news .newsItem:hover .newsItemTitle a{ color: #E3605B; }

#news .newsItem > a:first-child:hover:before { background: rgba(19, 21, 26, 0.6); }

#news .newsItem > a:first-child:hover:after { opacity: 1; }

#news .newsItem > a:first-child:before { height: 100%; width: 100%; display: block; content: ''; position: absolute; transition: all 200ms linear; -webkit-transition: all 300ms linear; top: 0; left: 0; background: rgba(19, 21, 26, 0.0); }

#news .newsItem > a:first-child:after { height: 100%; width: 100%; display: block; content: ''; position: absolute; transition: all 200ms linear; -webkit-transition: all 300ms linear; top: 0; left: 0; opacity: 0; -webkit-background-size: 20% 20%; -moz-background-size: 20% 20%; -o-background-size: 20% 20%; background-size: 20% 20%; background: url(../images/news-img-hover.png) no-repeat center; }

#news:before{ content: ''; position: absolute; right: -1px; top:0; height: 100%; width: 16px; background-color: white; z-index: 2 }

#news:after{ content: ''; position: absolute; left: 0; top:0; height: 100%; width: 15px; background-color: white; z-index: 2 }

.newsSlider .news-prev.control-slider, .newsSlider .news-next.control-slider { background-size: 45%; }

.newsSlider .news-prev, .newsSlider .news-next {  }

.newsSlider .news-prev:hover, .newsSlider .news-next:hover {  }

.newsSlider .news-prev.next-arrow, .newsSlider .news-next.prev-arrow { background-position: center; }

/*-----------------------------------------------------------*/



/*----------------------NEW MAIN MENU------------------------*/

.mainMenu { padding-bottom: 30px; }

.mainMenuItem { position: relative; display: block; overflow: hidden; }

.mainMenuItem:before { display: block; content: ''; padding-top: 100%;   opacity: 0;}

.mainMenuItem > div { position: absolute; top: 0; left: 0; right: 0; bottom: 0; text-align: center; color: white; padding: 30px; background-size: 105%; }

.mainMenuItem > div:before { content: ''; }

.mainMenuItem > div > * { z-index: 2 }

.mainMenuItem > div .mainMenuTitle { transition: all 0.25s ease; border-bottom: 2px solid white; padding-bottom: 10px; margin: 0; text-align: center; margin-bottom: 10px; letter-spacing: 0.5px; font-weight: bold; min-height: 64px; font-size: 22px;}

.mainMenuItem > div .mainMenuDescrShort{ opacity:0; transition: all 0.35s ease; margin-bottom: 10px; font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 15px; }

.mainMenuItem > div .mainMenuDescrShort p { margin:0; }

.mainMenuItem > div button { opacity: 0; transition: all 0.45s ease; font-weight: bold; min-height: 30px; height: 30px; margin: 0; color: rgba(193, 222, 151, 1); border-radius: 0; background-color: white; width: 70%; margin-left: 15%; border-radius: 20px; line-height: 1px; font-size: 12px; }

.mainMenuItem > div button:hover { background-color: transparent !important;  border: 2px solid white; }

.mainMenuItem > div button:hover span { color: white; }

.mainMenuItem > div .mainMenuTitle, .mainMenuItem > div .mainMenuDescrShort, .mainMenuItem > div button { -webkit-transform: translate3d(0,50px,0); transform: translate3d(0,50px,0); }

.mainMenuItem > div:hover .mainMenuTitle, .mainMenuItem > div:hover .mainMenuDescrShort, .mainMenuItem > div:hover button { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,-10px,0); }

.mainMenuItem > div:hover .mainMenuDescrShort , .mainMenuItem > div:hover button { opacity: 1; }

.mainMenuItem:hover > div { background-image: none !important }

.mainMenuItem:hover:before { opacity: 1 }


.filterBlock-0:before {  background: #83c550 }
.filterBlock-0 button span { color: #83c550 }
.filterBlock-0 > div  { background-image: url(../images/main-menu/filter1.png); }

.filterBlock-1:before { background: slateblue }
.filterBlock-1 button span { color: slateblue }
.filterBlock-1 > div  { background-image: url(../images/main-menu/filter2.png); }

.filterBlock-2:before { background: cadetblue }
.filterBlock-2 button span { color: cadetblue }
.filterBlock-2 > div  { background-image: url(../images/main-menu/filter3.png); }

.filterBlock-3:before { background: orangered }
.filterBlock-3 button span { color:  orangered}
.filterBlock-3 > div  { background-image: url(../images/main-menu/filter4.png); }

.filterBlock-4:before { background: yellowgreen }
.filterBlock-4 button span { color:  yellowgreen}
.filterBlock-4 > div  { background-image: url(../images/main-menu/filter5.png); }

.filterBlock-5:before { background: rgba(184, 134, 11, 1); }
.filterBlock-5 button span { color:  rgba(184, 134, 11, 1);}
.filterBlock-5 > div  { background-image: url(../images/main-menu/filter6.png); }

.filterBlock-6:before { background: darkgoldenrod }
.filterBlock-6 button span { color:  darkgoldenrod}
.filterBlock-6 > div  { background-image: url(../images/main-menu/filter7.png); }

.filterBlock-7:before { background: rgba(50, 205, 50, 1); }
.filterBlock-7 button span { color:  rgba(50, 205, 50, 1);}
.filterBlock-7 > div  { background-image: url(../images/main-menu/filter8.png); }

.filterBlock-8:before { background: rgba(100, 149, 237, 1); }
.filterBlock-8 button span { color:  rgba(100, 149, 237, 1);}
.filterBlock-8 > div  { background-image: url(../images/main-menu/filter9.png); }


@media(min-width: 992px) and ( max-width: 1199px){
    .mainMenuItem > div { padding: 15px }
    .mainMenuItem > div .mainMenuTitle{ min-height: 45px; font-size: 17px}
    .mainMenuItem > div .mainMenuDescrShort{ font-size: 11px; letter-spacing: 0.3px; }
}

@media ( min-width: 768px) and ( max-width: 991px){
    .mainMenuItem > div { padding: 15px }
    .mainMenuItem > div .mainMenuTitle{ min-height: 45px; font-size: 17px}
    .mainMenuItem > div .mainMenuDescrShort{ font-size: 11px; letter-spacing: 0.3px; }
}

@media ( max-width: 767px){
    .mainMenuItem { margin-bottom: 30px;     box-shadow: 0 1px 8px 0 rgba(0,0,0,.2),0 3px 4px 0 rgba(0,0,0,.14),0 3px 3px -2px rgba(0,0,0,.12); }
}
/*-----------------------------------------------------------*/



/*-----------------------------END INDEX PAGE------------------------------*/

</style>

@stop