@extends('body')

@section('centerbox')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">

            <div class="blog-post single-post">
                <div class="blog-wrapper no-margin no-scale">
                    <div class="blog-img">
                        <img class="img-responsive" src="img/news/news-page-4.jpg" alt="">
                    </div>


                    <div class="post-content">
                        <h3 class="post-title-detail">{{$data->name}}</h3>

                        <div class="post-meta">
                            <p class="date-news">
                                <span class="date">02 Декабря 2016</span> <span class="time">12:06</span>
                            </p>
                        </div>

                        <p class="post-inner-content mrg-vertical-15">{{$data->description}}</p>

                        <div class="post-bottom">


                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="share ">
                                        <h5 class="share-news">Поделиться с друзьями:</h5>
                                        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                                        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="tag-news-b">
                                    <h5 class="margin-b-15 tag-news">Теги :</h5>
                                    <ul class="tag">
                                        <li><a href="#">Музыка</a></li>

                                        <li><a href="#">Мероприятие</a></li>
                                        <li><a href="#">Фест</a></li>

                                    </ul>
                                </div>
                            </div>




                        </div>
                    </div>




                    <h3 class="text-left margin-t-50 com-news">Оставте комментарий</h3>
                    <div class="fb-comments" data-href="http://localhost:8080/allevents/detail-news.php" data-width="100%" data-numposts="10"></div>
                </div>

            </div>
        </div>
        <div class="col-md-3 hidden-xs hidden-sm ">
            <div onclick="location.href='http://google.ru';" class="banner banner-right first" style="background:url(img/public/first-pub.png)"></div>

            <div onclick="location.href='http://google.ru';" class="banner banner-right second" style="background:url(img/public/second-pub.png)"></div>
        </div>
    </div>
</div>


@stop