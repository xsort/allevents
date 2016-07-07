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


    <div class="row">
        <div class="col-md-9">
            <div class="text-center margin-b-50 margin-t-15">
                <h1 class="page-title rowed">Новости</h1>
            </div>
            <div class="blog-post masonry" data-columns>
				@foreach ($data as $news)
                <div class="item">
                    <div class="blog-wrapper" itemscope itemtype="http://schema.org/Article">
                    <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                        <div class="blog-img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <img class="img-responsive" src="uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}" alt="">
                            <div class="post-date ">
                                <p class="">{{ date('M', strtotime($news->created_at)) }}
                                    <br class="hide-mobile"><span>{{ date('d', strtotime($news->created_at)) }}</span></p>
                            </div>
                            <meta itemprop="url" content="http://170d3237.ngrok.io/uploaded/{{isset($news->photos{0}) ? $news->photos{0}->source : 'nophoto.png'}}">

                            <meta itemprop="width" content="800">
                            <meta itemprop="height" content="800">

                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="news/{{$news->slug}}" itemprop="headline">{{$news->name}}</a></h3>

                            <p class="post-inner-content mrg-vertical-15">{{ str_limit($news->description_short, $limit = 150, $end = '...') }}</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="news/{{$news->slug}}">Читать далее</a></span>
                            </div>
                        </div>
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
                </div>
				@endforeach  
                


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


@stop