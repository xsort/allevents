@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page ">
    @include('partials.product-top-gallery')
    @include('partials.product-up-menu')

    <div class="layout-content" >

        <div class="container-fluid">
            <div class="inst-video" id="ytplayer">
               <!--  <iframe width="100%" height="550" src="https://www.youtube.com/embed/HuAxVfZasUk?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe> -->
            </div>

            <div class="col-lg-12 inst-square-menu margin-t-25">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <a href="{{$data->slug}}/photo">
                                <div class="menu block-1">
                                    <div class="main-menu-image" style="background: url(images/inst-menu-photo/photo.png);"></div>
                                    <div class="main-menu-filter"></div>
                                    <h3 class="main-menu-title"><span>Фото</span></h3>
                                    <div class="divider-title"></div>
                                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <a href="{{$data->slug}}/photo" class="main-menu-button"><span>Подробнее</span></a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <a href="{{$data->slug}}/video">
                                <div class="menu block-2 xs-margin-menu">
                                    <div class="main-menu-image" style="background: url(images/inst-menu-photo/video.png);"></div>
                                    <div class="main-menu-filter"></div>
                                    <h3 class="main-menu-title"><span>Видео</span></h3>
                                    <div class="divider-title"></div>
                                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <a href="{{$data->slug}}/video" class="main-menu-button"><span>Подробнее</span></a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <a href="{{$data->slug}}/plan">
                                <div class="menu block-3 xs-margin-menu">
                                    <div class="main-menu-image" style="background: url(images/inst-menu-photo/plan.png);"></div>
                                    <div class="main-menu-filter"></div>
                                    <h3 class="main-menu-title"><span>План зала</span></h3>
                                    <div class="divider-title"></div>
                                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <a href="{{$data->slug}}/plan" class="main-menu-button"><span>Подробнее</span></a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <a href="{{$data->slug}}/menu">
                                <div class="menu block-4 xs-margin-menu">
                                    <div class="main-menu-image" style="background: url(images/inst-menu-photo/menu.png);"></div>
                                    <div class="main-menu-filter"></div>
                                    <h3 class="main-menu-title"><span>Меню</span></h3>
                                    <div class="divider-title"></div>
                                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <a href="{{$data->slug}}/menu" class="main-menu-button"><span>Подробнее</span></a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <a href="{{$data->slug}}/promo">
                                <div class="menu block-5 xs-margin-menu">
                                    <div class="main-menu-image" style="background: url(images/inst-menu-photo/actii.png);"></div>
                                    <div class="main-menu-filter"></div>
                                    <h3 class="main-menu-title"><span>Акции</span></h3>
                                    <div class="divider-title"></div>
                                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <a href="{{$data->slug}}/promo" class="main-menu-button"><span>Подробнее</span></a>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <a href="{{$data->slug}}/interier">
                                <div class="menu block-6 xs-margin-menu">
                                    <div class="main-menu-image" style="background: url(images/inst-menu-photo/interier.png);"></div>
                                    <div class="main-menu-filter"></div>
                                    <h3 class="main-menu-title"><span>Интерьер</span></h3>
                                    <div class="divider-title"></div>
                                    <span class="main-menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <a href="{{$data->slug}}/interier" class="main-menu-button"><span>Подробнее</span></a>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12 inst-description margin-t-50 text-center">
                <h2 class="inst-title text-center rowed">{{$data->name}}</h2>
            </div>

            <div class="col-lg-8 col-lg-offset-2 margin-t-25 text-center inst-description-text">
                {{$data->description}}
            </div>
            


            <div class="col-lg-12 inst-social text-center margin-t-25">
                    <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                    <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter" data-counter=""></div>
            </div>
            
            <div class="col-lg-12 margin-t-50 inst-map">
                <div class="row">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=28.85437846183777%2C47.039721515551776%2C28.86635184288025%2C47.044196031419304&amp;layer=mapnik&amp;marker=47.04195882039511%2C28.86036515235901"></iframe>
                    <br/>
                </div>
            </div>

            <div class="col-lg-12  inst-pub hidden-xs">
                <div class="row">
                    <div class="col-md-6 margin-t-25">
                        <div class="row">
                            <div class="banner inst-pub-big" style="background:url(img/public/third-pub.png)"></div>
                            <div class="banner inst-pub-small pull-right" style="background:url(img/public/ad.jpg)"></div>
                        </div>
                    </div>
                    <div class="col-md-6 margin-t-25">
                        <div class="row">
                            <div class="banner inst-pub-small" style="background:url(img/public/ad.jpg)"></div>
                            <div class="banner inst-pub-big pull-right" style="background:url(img/public/third-pub.png)"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>         
</div>

<script>
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('ytplayer', {
          width: '100%',
          playerVars : {
                autoplay : 0
            },
          videoId: 'F0xoBUDUYyo'
        });
      }
</script>
@stop

@section('productPageScripts')
<script src="js/jquery.viewportchecker.min.js"></script>

    <script>
        $(window).load(
        function(){
           $('#ytplayer').viewportChecker({ 
           offset : 500,
           callbackFunction: function(){
                setTimeout(function(){
                    player.playVideo();
                    player.mute();            
                })
          }
          });
        }
      );
    </script>
@stop
