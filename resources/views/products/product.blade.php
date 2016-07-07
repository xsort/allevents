@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page ">
    
    <div class="container-fluid">
        <div class="club-head-image">
            <div class="button club-main-prev"><span class="fa fa-angle-left"></span> </div>
            <div class="club-main-gallery">
                @foreach ($data->photos as $key => $photo)
                @if ($key == 0) @continue; @endif
                <div class="club-main-photo" style="background:url('uploaded/{{$photo->source}}')"></div>
                @endforeach
            </div>
            <div class="button club-main-next"><span class="fa fa-angle-right"></span></div>
        </div>
    </div>

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
                <h1 class="inst-title text-center rowed">{{$data->name}}</h1>
            </div>



            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 margin-t-30 inst-description-text">
                {!!$data->description!!}
            </div>

            <div class="col-lg-12 inst-description margin-t-50 text-center">
                <h2 class="inst-title text-center rowed">Контакты</h2>
            </div>

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 margin-t-25 inst-contacts ">

                <div class="col-sm-6 ">

                    <div class="row inst-tel">

                        <div class="col-sm-3 text-right">
                            <div class="row">
                                <span>
                                    <b class="text-uppercase">Телефон</b>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-1">
                            <a href="tel:+37360192969" ><span >0601 91 111</span></a><br>
                        </div>

                    </div>

                    <div class="row inst-email  margin-t-30">
                    
                        <div class="col-sm-3 text-right">
                            <div class="row">
                                <b class="text-uppercase">E-mail</b>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-1">
                            <a href="mailto:alexzc@mail.ru" ><span>alexzc@mail.ru</span></a>
                        </div>

                    </div>

                </div>

                <div class="col-sm-6">
                
                    <div class="row inst-adres margin-xs-t-30">
                        <div class="col-sm-3 text-right">
                            <div class="row">
                                <b class="text-uppercase">Адрес</b>  
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-1">
                            <span >Bulevardul Grigore Vieru 22/9</span>
                        </div>
                    </div>
                    

                    <div class="row inst-adres margin-t-30">
                        <div class="col-sm-3 text-right">
                            <div class="row">
                                <b class="text-uppercase">График</b>
                            </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-1">
                            <time >Пн.-Пт.: с 9:30 до 18:00</time>
                        </div>
                    </div>

                </div>
                    
            </div>

            <div class="col-lg-12 inst-social text-center margin-t-50">
                    <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                    <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter" data-counter=""></div>
            </div>
            
            <div class="col-lg-12 margin-t-40 inst-map">
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
        <div> 
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


@section('metaProductSharing')
<!-- Open Graph data -->
<meta property="og:title" content="{{$data->name}}" />
<meta name="google-site-verification" content="QruLMs9kDD29q-ycCBLohXLrKZiVoczPXuTS4Goif6A" />
<meta property="og:site_name" content="Allevents.md" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://170d3237.ngrok.io/{{$data->slug}}" />
<meta property="og:image" content="http://170d3237.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" />
<meta property="og:description" content="{{$data->description_short}}" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@Allevents.md" />
<meta name="twitter:creator" content="@Allevents.md" />
<meta name="twitter:title" content="{{$data->name}}" />
<meta name="twitter:description" content="{{$data->description_short}}" /
<meta name="twitter:image" content="http://170d3237.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" / >
@stop

@section('jsonProductSharing')
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Restaurant",
  "image": "http://170d3237.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}",
  "@id": "http://davessteakhouse.example.com",
  "name": "{{$data->name}}",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "148 W 51st St",
    "addressLocality": "New York",
    "addressRegion": "NY",
    "postalCode": "10019",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 40.761293,
    "longitude": -73.982294
  },
  "url": "http://www.example.com/restaurant-locations/manhattan",
  "telephone": "+12122459600",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday"
      ],
      "opens": "11:30",
      "closes": "22:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "11:30",
      "closes": "23:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "16:00",
      "closes": "23:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Sunday",
      "opens": "16:00",
      "closes": "22:00"
    }
  ],


  "potentialAction": {
    "@type": "ReserveAction",
    "target": {
      "@type": "EntryPoint",
      "urlTemplate": "https://www.example.com/reserve?merchantId=20373",
      "inLanguage": "en-US",
      "actionPlatform": [
        "http://schema.org/DesktopWebPlatform",
        "http://schema.org/IOSPlatform",
        "http://schema.org/AndroidPlatform"
      ]
    },
    "result": {
      "@type": "FoodEstablishmentReservation",
      "name": "Reserve table"
    }
  },

  "menu": "http://www.example.com/menu",
  "acceptsReservations": "True"
}
</script>
@stop