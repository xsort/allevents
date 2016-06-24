@extends('body')
@section('centerbox')
<div class="layout-page ">
@include('partials.product-up-menu')
<div class="layout-breadcrumbs">
    <div class="container-fluid">
        <div class="container-breadcrumbs">
            <ul class="breadcrumbs">
                <li><a href="">Главная</a></li>
                <li><a href="/kluby">Клубы</a></li>
                <li><a href="/{{$data->slug}}">{{$data->name}}</a></li>
                <li>Акции</li>
            </ul>
        </div>
    </div>
</div>

    <div class="layout-content" >
        <div class="container-fluid">

    <div class="row">
        <div class="col-md-9">
            <div class="text-center margin-b-50 margin-t-15">
                <h1 class="page-title rowed">Акции</h1>
            </div>
            <div class="blog-post masonry" data-columns>

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
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>

                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-2.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>

                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-3.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="single-left.html">Lorem ipsum dolor sit amet.</a></h3>
                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-4.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>
                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-5.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>

                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>
                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-6.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>

                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-7.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>

                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-8.png" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>

                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-wrapper">
                        <div class="blog-img">
                            <img class="img-responsive" src="img/news/news-page-9.jpg" alt="">
                            <div class="post-date ">
                                <p class="">Дек
                                    <br class="hide-mobile"><span>02</span></p>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="detail-news.php">Lorem ipsum dolor sit amet.</a></h3>

                            <p class="post-inner-content mrg-vertical-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="post-bottom">
                                <span class="read-more"><a class="btn no-padding " href="detail-news.php">Читать далее</a></span>
                            </div>
                        </div>
                    </div>
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