@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')


<div class="layout-page ">
    @include('products.top-menu')
    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => $trans->product_promo_breadcrumbs]]])

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
            <div class="row">
                <div class="col-md-9">
                    <div class="row" ng-cloak>
                        <div class="text-center newsListTitle">
                            <h1 class="page-title rowed">{{$trans->product_promo_title}}</h1>
                        </div>
                            <div class="masonry" data-columns >
                                @foreach($data->news as $d)
                                    <div class="newsWrapper" layout="column" layout-align="stretch" itemscope itemtype="http://schema.org/Article">
                                    <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                                    <a class="newsImage md-whiteframe-1dp" href="{{ route('get-news', $d->slug) }}" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                        <img src="uploaded/{{isset($d->photos{0}) ? $d->photos{0}->source : 'nophoto.png'}}">
                                        <div class="date">
                                            <span>{{ ucfirst(Date::parse($d->created_at)->format('M')) }}</span>
                                            <span>{{ date('d', strtotime($d->created_at)) }}</span>
                                        </div>

                                        <meta itemprop="url" content="http://170d3237.ngrok.io/uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}">
                                        <meta itemprop="width" content="800">
                                        <meta itemprop="height" content="800">
                                        </a>

                                        <a href="{{ route('get-news', $d->slug) }}" class="newsTitle" itemprop="headline">
                                            {{$d->name}}
                                        </a>

                                        <p>{{ str_limit($d->description_short, $limit = 150, $end = '...') }}</p>

                                        <md-button class="newsReadMore" ng-href="{{ route('get-news', $d->slug) }}">{{$trans->product_promo_post_button}}</md-button>

                                        <meta itemprop="dateModified" content="{{$d->created_at}}">
                                        <meta itemprop="datePublished" content="{{$d->created_at}}">
                                        <meta itemprop="author" content="Allevents.md">             
                                        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                                <meta itemprop="url" content="http://170d3237.ngrok.io/images/logo/logo-big.png">
                                                <meta itemprop="width" content="160">
                                                <meta itemprop="height" content="150">
                                            </div>
                                            <meta itemprop="name" content="Allevents.md">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                </div>
                @include('partials.right-banners')        
            </div>
        </div>
    </div>         
</div>
@stop


@section('styleProductPromoPage')

<style>
    /*-----------------------------NEW NEWS LIST-------------------------------*/

.newsListTitle { margin-top: 15px; margin-bottom: 50px; }

.newsWrapper { margin-bottom: 40px }

.newsWrapper .newsImage { min-height: 60px; }

.newsWrapper .newsImage img{ width: 100%; transition: all 300ms linear; -webkit-transition: all 300ms linear; max-width: 100%; height: auto; margin: 0 auto; }

.newsWrapper > a{ position:relative; transition: all 300ms linear; -webkit-transition: all 300ms linear; overflow: hidden; letter-spacing: 1px; line-height: 1.5; font-weight: 500; color: #3e3e3e; margin-top: 10px; margin-bottom: 12px; font-size: 20px; }

.newsWrapper > a > div.date{ box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.52); color: #616060; position: absolute; top: 15px; background: white; right: 15px; text-align: center; font-size: 13px; padding: 7px 10px; }

.newsWrapper > a > div span { width: 100%; display: block; }

.newsWrapper > a:hover { color:#E3605B; }

.newsWrapper > p{ padding: 0; font-size: 13px; font-weight: normal; letter-spacing: 0.5px; line-height: 24px; color: #777; margin-bottom: 20px; }

.newsWrapper > a.newsReadMore{ margin:0; height:40px; width: 150px; background-color: #3e3e3e; color: #ffffff; font-size: 11px; letter-spacing: 2px; border-radius: 0; line-height: 40px; }

.newsWrapper > a.newsReadMore:hover{ background-color: #3e3e3e }

.newsWrapper > a.newsReadMore.md-button .md-ripple-container{ border-radius:0; }

.newsWrapper > a.newsReadMore:hover {     box-shadow: 0 4px 5px -2px rgba(0,0,0,.2),0 7px 10px 1px rgba(0,0,0,.14),0 2px 16px 1px rgba(0,0,0,.12); }

.newsWrapper:hover .newsImage img { -moz-transform: scale(1.1); -ms-transform: scale(1.1); -o-transform: scale(1.1); transform: scale(1.1); -webkit-transform: scale(1.1); opacity: 0.9; }

.newsWrapper:hover a { color:#E3605B; }

.newsWrapper:hover a.newsReadMore{ background-color: #E3605B; color: white;     box-shadow: 0 4px 5px -2px rgba(0,0,0,.2),0 7px 10px 1px rgba(0,0,0,.14),0 2px 16px 1px rgba(0,0,0,.12);}

@media screen and (max-width:767px) {
    .masonry[data-columns]::before { content: '1 .col-xs-12'; }

    .newsWrapper:hover .newsImage img{ opacity: 1; -moz-transform: scale(1); -ms-transform: scale(1); -o-transform: scale(1); transform: scale(1); -webkit-transform: scale(1); }

    .newsWrapper > a { font-size: 17px; }

    .newsWrapper > p { font-size: 12px; }
}

@media screen and (min-width:768px) and (max-width:991px) {
    .masonry[data-columns]::before { content: '2 .col-xs-6'; }
}

@media screen and (min-width:992px) and (max-width:1199px) {
    .masonry[data-columns]::before { content: '2 .col-xs-6'; }
}

@media screen and (min-width:1200px) {
    .masonry[data-columns]::before { content: '2 .col-xs-6'; }
}


/*-------------------------END NEW NEWS LIST-------------------------------*/


</style>

@stop