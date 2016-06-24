@extends('body')
@section('centerbox')

<div class="layout-page ">
<div class="layout-content" >

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="text-center margin-b-50 margin-t-15">
                <h1 class="page-title rowed">Новости</h1>
            </div>
            <div class="blog-post masonry" data-columns>
				@foreach ($data as $news)
                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-1.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>

                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="news/{{$news->slug}}">{{$news->name}}</a></h3>

                            <p class="post-inner-content mrg-vertical-15">{{$news->description_short}}</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="news/{{$news->slug}}">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>
				@endforeach  
                


            </div>
        </div>
        <div class="col-md-3 hidden-xs hidden-sm ">
            <div onclick="location.href='http://google.ru';" class="banner banner-right first" style="background:url(img/public/first-pub.png)"></div>

            <div onclick="location.href='http://google.ru';" class="banner banner-right second" style="background:url(img/public/second-pub.png)"></div>
        </div>
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