
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