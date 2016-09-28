@extends('body')
@section('centerbox')

<div class="layout-page ">
    <div class="layout-breadcrumbs itemscope itemtype="http://schema.org/ItemList">
        <div class="container-fluid">
            <div class="container-breadcrumbs">
                <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <meta itemprop="itemListOrder" content="http://schema.org/ItemListOrderDescending"/>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="url">Главная</a></li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="" itemprop="url">Новости</a></li>
                </ol>
            </div>
        </div>
    </div>

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
                    <div class="row">
                        <div class="text-center margin-b-50 margin-t-15">
                            <h1 class="page-title rowed">Все новости</h1>
                        </div>

                        <div class="masonry" data-columns>
                            @foreach ($data as $news)
                                <div class="newsWrapper" layout="column" layout-align="stretch" itemscope itemtype="http://schema.org/Article">
                                    <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>

                                    <a class="newsImage" href="news/{{$news->slug}}" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                                        <img src="uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}" alt="{{$news->name}}">
                                        <div style="display:none">
                                        <p class="">{{ ucfirst(Date::parse($news->created_at)->format('M')) }}
                                        <br class="hide-mobile"><span>{{ date('d', strtotime($news->created_at)) }}</span></p>
                                        </div>

                                        <meta itemprop="url" content="http://170d3237.ngrok.io/uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}">

                                        <meta itemprop="width" content="800">
                                        <meta itemprop="height" content="800">
                                    </a>

                                    <a href="news/{{$news->slug}}" class="newsTitle" itemprop="headline">
                                        {{$news->name}}
                                    </a>

                                    <p>{{ str_limit($news->description_short, $limit = 150, $end = '...') }}</p>

                                    <md-button class="newsReadMore" ng-href="news/{{$news->slug}}">Читать далее</md-button>

                                    <meta itemprop="dateModified" content="{{$news->created_at}}">
                                    <meta itemprop="datePublished" content="{{$news->created_at}}">
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