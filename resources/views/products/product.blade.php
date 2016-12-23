@extends('body')
@if (isset($data->background))
    @section('bgImage', 'uploaded/' . $data->background->source)
@endif
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page instPage">
    
    <div class="container-fluid">
        <div class="instHeadImageContainer">
            <div class="button club-main-prev control-slider prev-arrow md-whiteframe-1dp"></div>
            <div class="club-main-gallery" >
                @foreach ($data->photos as $key => $photo)
                @if ($key == 0) @continue; @endif
                    <a href="/uploaded/{{$photo->source}}" data-lightbox="instTopImage" class="instHeadPhoto" layout-align="center center">
                      <img src="/uploaded/{{$photo->source}}" alt="">
                    </a>
                @endforeach
            </div>
            <div class="button club-main-next control-slider next-arrow md-whiteframe-1dp"></div>
        </div>
    </div>
    

    @include('products.top-menu')

    <div class="layout-content">

        <div class="container-fluid">

          <div class="instVideoContainer md-whiteframe-2dp">
            <div class="instVideo" id="ytplayer"></div>
          </div>

            <div class="col-lg-12 instMenu md-whiteframe-2dp">
                <div class="row">
                    

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">

                            <a href="{{$data->slug}}/photo" class="instMenuItem filterBlock-0 c-bg-center" style="background-image: url(images/inst-menu-photo/photo.png);">

                                <div class="c-bg-center" layout="column" layout-align="space-between stretch">
                                    <h3 class="instMenuTitle" layout="column" layout-align="end center" >Фото</h3>
                                    <span class="instMenuDescrShort">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <md-button>Подробнее</md-button>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">

                            <a href="{{$data->slug}}/video" class="instMenuItem filterBlock-1 c-bg-center" style="background-image: url(images/inst-menu-photo/video.png);" >

                                <div class="c-bg-center" layout="column" layout-align="space-between stretch">
                                    <h3 class="instMenuTitle" layout="column" layout-align="end center" >Видео</h3>
                                    <span class="instMenuDescrShort">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <md-button>Подробнее</md-button>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">

                            <a href="{{$data->slug}}/plan" class="instMenuItem filterBlock-2 c-bg-center" style="background-image: url(images/inst-menu-photo/plan.png);">

                                <div class="instMenuBlock-2 c-bg-center" layout="column" layout-align="space-between stretch" >
                                    <h3 class="instMenuTitle" layout="column" layout-align="end center" >План зала</h3>
                                    <span class="instMenuDescrShort">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <md-button>Подробнее</md-button>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">

                            <a href="{{$data->slug}}/menu" class="instMenuItem filterBlock-3 c-bg-center" style="background-image: url(images/inst-menu-photo/menu.png);">

                                <div class="c-bg-center" layout="column" layout-align="space-between stretch">
                                    <h3 class="instMenuTitle" layout="column" layout-align="end center" >Меню</h3>
                                    <span class="instMenuDescrShort">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <md-button>Подробнее</md-button>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">

                            <a href="{{$data->slug}}/promo" class="instMenuItem filterBlock-4 c-bg-center" style="background-image: url(images/inst-menu-photo/actii.png);">

                                <div class=" c-bg-center" layout="column" layout-align="space-between stretch" >
                                    <h3 class="instMenuTitle" layout="column" layout-align="end center" >Акции</h3>
                                    <span class="instMenuDescrShort">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <md-button>Подробнее</md-button>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">

                            <a href="{{$data->slug}}/interier" class="instMenuItem filterBlock-5 c-bg-center" style="background-image: url(images/inst-menu-photo/interier.png);">
                                <div class=" c-bg-center" layout="column" layout-align="space-between stretch">
                                    <h3 class="instMenuTitle" layout="column" layout-align="end center" >Интерьер</h3>
                                    <span class="instMenuDescrShort">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                                    <md-button>Подробнее</md-button>
                                </div>
                            </a>

                        </div>
                    </div>               

                </div>
            </div>

            <div class="col-lg-12 text-center">
                <div class="galleryTitle"><h1 class=" rowed">{{$data->name}}</h1></div>
            </div>



            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12  instDescription">
                {!!$data->description!!}
            </div>

            <div class="col-lg-12 text-center">
                <div class="galleryTitle"><h2 class=" rowed">Контакты</h2></div>
            </div>

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 margin-t-25 instContactsContainer">
            @foreach($data->contacts as $contact)
                <div class="col-sm-6 " >
                    
                    <div class="row instContacts" layout="row" layout-align="center">
                        <div class="col-sm-3 text-right" layout="row" layout-align="end center">
                           
                                <span class="instContactsName">{{$contact->name}}</span>
                           
                        </div>
                        <div class="col-sm-6 col-sm-offset-1">
                        <div class="row">
                            <span class="instContactsContent md-whiteframe-1dp"> {{$contact->pivot->name}}</span>
                            </div>
                        </div>

                    </div>
                </div>
 @endforeach
               
                    
            </div>

            <div class="col-lg-12 instSocialShare text-center ">
                    <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                    <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter" data-counter=""></div>
            </div>
            
@if(isset($data->map) && ($data->map!=''))

            <div class="col-lg-12 instMap md-whiteframe-2dp">
                <div class="row">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox={{$data->map->Y}}%2C{{$data->map->X}}%2C{{$data->map->Y}}%2C{{$data->map->X}}&amp;layer=mapnik&amp;marker={{$data->map->X}}%2C{{$data->map->Y}}"></iframe>

                </div>
            </div>
@endif


            <div class="col-lg-12 hidden-sm  hidden-xs instBanner">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="row">

                          <div class="col-md-7">
                            <div class="banner inst-pub-big" style="background:url(img/public/third-pub.png)"></div>
                          </div>

                          <div class="col-md-5">
                            <div class="banner instBannerSmall bannersRight md-whiteframe-1dp" layout="column" layout-align="space-between stretch">
                              <span>Рекламное место свободно</span>
                              <span>для информации обращаться на email <a href="mailto:info@allevents.md" class="bannerEmail">info@allevents.md</a></span>
                            </div>
                          </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="banner instBannerSmall bannersRight md-whiteframe-1dp" layout="column" layout-align="space-between stretch">
                              <span>Рекламное место свободно</span>
                              <span>для информации обращаться на email <a href="mailto:info@allevents.md" class="bannerEmail">info@allevents.md</a></span>
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="banner inst-pub-big" style="background:url(img/public/third-pub.png)"></div>
                          </div>
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
          height: '100%',
          playerVars : {
                autoplay : 0
            },
          videoId: '{{$data->video}}'
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
<meta property="og:url" content="http://27b6bd48.ngrok.io/{{$data->slug}}" />
<meta property="og:image" content="http://27b6bd48.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" />
<meta property="og:description" content="{{$data->description_short}}" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@Allevents.md" />
<meta name="twitter:creator" content="@Allevents.md" />
<meta name="twitter:title" content="{{$data->name}}" />
<meta name="twitter:description" content="{{$data->description_short}}" /
<meta name="twitter:image" content="http://27b6bd48.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" / >
@stop

@section('jsonProductSharing')
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Restaurant",
  "image": "http://27b6bd48.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}",
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