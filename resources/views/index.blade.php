
@extends('body')
@section('centerbox')

<div class="layout-page ">
<div class="layout-content" >
<div class="container-fluid main-menu">
    <div class="row">
        <div class="col-md-9 col-sm-12">

        	@foreach ($categories as $key=>$category)
        	
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="row">
                    <a href="{{$category->slug}}">
                        <div class="menu block-{{$key}}">
                            <div class="main-menu-image" style="background: url('uploaded/{{isset($category->photos{0}) ? $category->photos{0}->source : 'nophoto.png'}}');"></div>
                            <div class="main-menu-filter"></div>
                            <h3 class="main-menu-title"><span>{{$category->name}}</span></h3>
                            <div class="divider-title"></div>
                            <span class="main-menu-descripton">{!!$category->description!!}</span>
                            <a href="{{$category->slug}}" class="main-menu-button"><span>Посмотреть все</span></a>
                        </div>
                    </a>
                    
                </div>
            </div>
            
            @endforeach

        </div>
        @include('partials.right-banners')
    </div>
</div>

<div class="row c-block-content c-bg-blue" ng-cloak>
    <div class="text-center">
        <h2 class="c-block-title">{{ trans('common.recommended') }}</h2>
    </div>

    <div class="container-fluid margin-t-50" ng-cloak>
        <div class="recommendedSlider">
            <button type="button" class="recommended-next prev-arrow control-slider hidden-xs md-whiteframe-3dp"></button>

            <div id="recommended">
				@foreach ($products as $product)
	        	<a href="{{$product->slug}}" class="instItem" layout-align="center center">
                    <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                    <div layout="column" layout-align="space-between stretch">
                        <h3 class="instTitle">
                            <span>{{$product->name}}</span>
                            <md-tooltip md-direction="top" md-delay="500">
                                <div class="font-uppercase">{{$product->name}}</div>
                            </md-tooltip>
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

</div>

<div class="c-block-content c-block-content-divider">
    <div class="text-center">
        <h2 class="indexSectionTitle">{{ trans('common.reports') }}</h2></div>
    <div class="container-fluid margin-t-30 ">
        <div class="news-slider">

            <div id="report-slider" ng-cloak>

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="report-next prev-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

                <div class="col-lg-10 col-md-10 col-xs-12" id="report">


					<!-- @foreach ($tags as $tag)
                    <a href="{{$tag->slug}}" class="item">
                        <div class="filter"></div>
                        <img src="uploaded/thumbs/{{isset($category->photos{0}) ? $category->photos{0}->source : 'nophoto.png'}}" alt="">
                        <span>{{$tag->name}}</span>
                    </a>
		            @endforeach -->
                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/concert.png" alt="">
                        <span>Концерты</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/sport.png" alt="">
                        <span>Спорт</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/theatre.png" alt="">
                        <span>Театры</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/cinema.jpg" alt="">
                        <span>Кинотеатры</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/sport.png" alt="">
                        <span>Развлечения</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/festival.jpg" alt="">
                        <span>Фестивали и выставки</span>
                    </a>
		            
                </div>

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="report-prev next-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="c-block-content ">
    <div class="text-center">
        <h2 class="indexSectionTitle">{{ trans('common.news') }}</h2>
    </div>
    <div class="container-fluid margin-t-30">
        <div class="newsSlider" ng-cloak>
            <button type="button" class="news-next prev-arrow control-slider hidden-xs md-whiteframe-3dp"></button>

            <div id="news">
                @foreach ($newslist as $news)
                <div class="newsItem" layout="column" layout-align="stretch" >

                    <a href="/news/{{$news->slug}}" class="bg-img-center" style="background:url('uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}');">
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
</div></div>
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