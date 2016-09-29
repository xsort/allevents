
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
        <div class="recommended-slider">
            <button type="button" class="recommended-next prev-arrow control-slider hidden-xs"></button>
            <div id="recommended">
				
				@foreach ($products as $product)
	        	<a href="{{$product->slug}}" class="category">
                    
                        <span class="logo-club">
                            <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                        </span>
                    
                    <h3 class="main-title"><span>{{$product->name}}</span></h3>
                    <div class="divider-title"></div>
                    <span class="main-menu-descripton">{{$product->description_short}}</span>
                    <div class="main-menu-button"><span>Посмотреть</span></div>
                </a>
	            @endforeach
            </div>
            <button type="button" class="recommended-prev next-arrow control-slider hidden-xs"></button>
        </div>
    </div>
</div>

<div class="c-block-content c-block-content-divider">
    <div class="text-center">
        <h2 class="c-block-title font-pink">{{ trans('common.reports') }}</h2></div>
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

<div class="c-block-content">
    <ngcart-addtocart id="1" name="Продукт 1" price="767" quantity="1" quantity-max="30" data="item"></ngcart-addtocart>
    <ngcart-addtocart id="2" name="Продукт 2" price="254" quantity="1" quantity-max="30" data="item"></ngcart-addtocart>


    
    <ngcart-cart></ngcart-cart>
    
        <script type="text/ng-template" id="template/ngCart/addtocart.html">
        <div ng-hide="attrs.id">
            <a class="btn btn-lg btn-primary" ng-disabled="true" ng-transclude></a>
        </div>

    <div ng-show="attrs.id">
            <div>
                <span ng-show="quantityMax">
                    <select name="quantity" id="quantity" ng-model="q"
                            ng-options=" v for v in qtyOpt"></select>
                </span>
                <a class="btn btn-sm btn-primary"
                   ng-click="ngCart.addItem(id, name, price, q, data)"
                   ng-transclude></a>
            </div>
            <mark  ng-show="inCart()">
                This item is in your cart. <a ng-click="ngCart.removeItemById(id)" style="cursor: pointer;">Remove</a>
            </mark>
    </div>
</script>
</div>



<div class="c-block-content ">
    <div class="text-center">
        <h2 class="c-block-title font-pink">{{ trans('common.news') }}</h2>
    </div>
    <div class="container-fluid margin-t-50">
        <div class="news-slider" ng-cloak>
            <button type="button" class="news-next prev-arrow control-slider hidden-xs"></button>
            <div id="news">
@foreach ($newslist as $news)
                <div class="newsItem" layout="column" layout-align="stretch">

                    <a href="/news/{{$news->slug}}" class="bg-img-center" style="background:url('uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}');">
                    </a>

                    <h2><a href="/news/{{$news->slug}}" class="newsItemTitle">{{$news->name}}</a></h2>

                    <figure>
                        <span class="text-left">{{ date('d F, Y', strtotime($news->created_at)) }}<!-- 18 февраля 2016 --></span><!-- <span class="pull-right">{{ date('H:i', strtotime($news->created_at)) }}</span> -->
                    </figure>
                    <span>{{ str_limit($news->description_short, $limit = 100, $end = '...') }}</span>
                    <a href="/news/{{$news->slug}}" class="read-more">{{ trans('common.read-more-dot') }}<span class="fa fa-angle-double-right"></span></a>
                </div>
@endforeach
                
            </div>
            <button type="button" class="news-prev next-arrow control-slider hidden-xs"></button>
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