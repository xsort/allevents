@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">
    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.promo')]]])

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
                <h1 class="page-title rowed">Акции</h1>
            </div>
            <div class="blog-post masonry" data-columns>
                @foreach($data->news as $d)
                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="uploaded/{{isset($d->photos{0}) ? $d->photos{0}->source : 'nophoto.png'}}" alt="">
                            <div class="post-date ">
                                <p class="">{{ date('M', strtotime($d->created_at)) }}
                                    <br class="hide-mobile"><span>{{ date('d', strtotime($d->created_at)) }}</span></p>
                            </div>

                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">{{$d->name}}</a></h3>

                            <p class="post-inner-content mrg-vertical-15">{{$d->description_short}}</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="{{ route('get-news', $d->slug) }}">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            </div>
        </div>
        @include('partials.right-banners')
        <!--
        <div class="news-items">
                <a href="layout/pages/news-page-2.php">next page</a>
        </div>
-->
        
    </div>
</div>
    </div>         
</div>

@stop