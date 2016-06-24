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
                <li>Видео</li>
            </ul>
        </div>
    </div>
</div>
    <div class="layout-content" >

<div class="container-fluid">
    <div class="row">
        <!--
   <div class="text-center margin-b-50 margin-t-15">
            <h1 class="page-title rowed">Видео</h1>
        </div>
-->
        <div class="masonry video-page" data-columns>
            <div class="item">
                <div class=" textstyle element">

                    <iframe width="100%" src="https://www.youtube.com/embed/HuAxVfZasUk?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

                    <div class="video-info">
                        <div class="video-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                        <div class="video-disc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident enim minima, qui sit, eaque commodi id, similique, atque voluptate quidem pariatur totam? Consectetur recusandae rerum hic adipisci.</div>
                        <div class="video-date">
                            <span class="date">19 февраля 2016</span> <span class="time">12:06</span>
                            <div class="video-share">
                                <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                                <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class=" textstyle element">
                    <iframe width="100%" src="https://www.youtube.com/embed/ta7ITAYTATM?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <div class="video-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                    <!--                <div class="video-disc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ducimus minima officiis eligendi laborum eius, delectus beatae sit assumenda pariatur.</div>-->
                    <div class="video-date">
                        <span>19 февраля 2016 12:06</span>
                        <div class="video-share">
                            <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                            <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class=" textstyle element">
                    <iframe width="100%" src="https://www.youtube.com/embed/FL4dqEttK64?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <div class="video-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                    <div class="video-disc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fugit molestias amet rem consequuntur velit! In accusantium laboriosam magni eaque placeat officiis, distinctio sapiente quia consequatur itaque!</div>
                    <div class="video-date">
                        <span>19 февраля 2016 12:06</span>
                        <div class="video-share">
                            <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                            <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class=" textstyle element">
                    <iframe width="100%" src="https://www.youtube.com/embed/FL4dqEttK64?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <div class="video-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                    <div class="video-disc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi architecto atque consequuntur repellat quaerat nostrum, ipsum, ad nihil ut eius vel. Sequi autem at, necessitatibus quod voluptatem.</div>
                    <div class="video-date">
                        <span>19 февраля 2016 12:06</span>
                        <div class="video-share">
                            <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                            <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class=" textstyle element">
                    <iframe width="100%" src="https://www.youtube.com/embed/GKoRghO2i5c?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <div class="video-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                    <!--                <div class="video-disc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ducimus minima officiis eligendi laborum eius, delectus beatae sit assumenda pariatur.</div>-->
                    <div class="video-date">
                        <span>19 февраля 2016 12:06</span>
                        <div class="video-share">
                            <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                            <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class=" textstyle element">
                    <iframe width="100%" src="https://www.youtube.com/embed/FL4dqEttK64?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="video-info">
                    <div class="video-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
                    <div class="video-disc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sunt quidem amet natus maiores. Quam, at! Debitis optio cumque magnam ex asperiores vero, ab porro repellat.</div>
                    <div class="video-date">
                        <span>19 февраля 2016 12:06</span>
                        <div class="video-share">
                            <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                            <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


    </div>         
</div>
@stop