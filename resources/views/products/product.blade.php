@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page instPage">
    @if($data->photos->count() > 1)
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
    @endif

    @include('products.top-menu')

    <div class="layout-content" >

        <div class="container-fluid">
            @if ($data->video != '')
                <div class="instVideoContainer md-whiteframe-2dp">
                    <div class="instVideo" id="ytplayer"></div>
                </div>
            @endif

            <div class="col-lg-12 instMenu md-whiteframe-2dp">
                <div class="row">

                    @if($data->type == 0)       {{-- menu for default object type --}}
                        @include('products.tiles.default')
                    @elseif($data->type == 1)   {{-- menu for photographers --}}
                        @include('products.tiles.photographers')
                    @endif

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
                    @if($contact->pivot->name == "") @continue @endif
                    <div class="col-sm-6" >

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
            
            @if(isset($data->map) && ($data->map!='') && (($data->map->X != 0) || ($data->map->Y != 0)) )
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

@if ($data->video != '')
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
@endif

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



@section('linkStyleProductPage')
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
@stop

@section('scriptProductPage')
  <script src="js/lightbox.min.js"></script>
  <script src="js/slick.min.js"></script>

  <script>
    $(document).ready(function(){



$('.club-main-gallery').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: '.club-main-next',
    prevArrow: '.club-main-prev',
    swipeToSlide: true,
    autoplay: true,
    autoplaySpeed: 4000,
      fade: true,
  cssEase: 'linear',
});
});
  </script>
@stop



@section('styleProductPage')
<style>

.next-arrow, .prev-arrow { z-index: 6; position: absolute; }

.next-arrow { background: url(../images/slider-notice/arrow-right.png); right: 0; }

.prev-arrow { background: url(../images/slider-notice/arrow-left.png); left: 0;}

.club-main-next,.club-main-prev { background-size:40%; background-position: center; width: 45px; position: absolute; top: 50%; transform: translate3d(0,-50%,0); background-color: rgba(255, 255, 255, 0.9); }


.control-slider { display: block; height: 100px; background-repeat: no-repeat; width: 35px; position: absolute; cursor: pointer; -webkit-transition: all 0.2s;transition: all 0.2s; border: none; }

.filterBlock-0:before {  background: #83c550 }
.filterBlock-0 button span { color: #83c550 }
.filterBlock-0 > div  { background-image: url(../images/main-menu/filter1.png); }

.filterBlock-1:before { background: slateblue }
.filterBlock-1 button span { color: slateblue }
.filterBlock-1 > div  { background-image: url(../images/main-menu/filter2.png); }

.filterBlock-2:before { background: cadetblue }
.filterBlock-2 button span { color: cadetblue }
.filterBlock-2 > div  { background-image: url(../images/main-menu/filter3.png); }

.filterBlock-3:before { background: orangered }
.filterBlock-3 button span { color:  orangered}
.filterBlock-3 > div  { background-image: url(../images/main-menu/filter4.png); }

.filterBlock-4:before { background: yellowgreen }
.filterBlock-4 button span { color:  yellowgreen}
.filterBlock-4 > div  { background-image: url(../images/main-menu/filter5.png); }

.filterBlock-5:before { background: rgba(184, 134, 11, 1); }
.filterBlock-5 button span { color:  rgba(184, 134, 11, 1);}
.filterBlock-5 > div  { background-image: url(../images/main-menu/filter6.png); }

.filterBlock-6:before { background: darkgoldenrod }
.filterBlock-6 button span { color:  darkgoldenrod}
.filterBlock-6 > div  { background-image: url(../images/main-menu/filter7.png); }

  /*----------------------------NEW INSTANS PAGE-----------------------------*/


.club-main-gallery { margin-bottom: 0px; }

.club-main-prev, .club-main-next {opacity: 0; }

.instHeadImageContainer:hover .club-main-prev, .instHeadImageContainer:hover .club-main-next{ opacity: 1 }

.instHeadImageContainer { margin-bottom: 25px; margin-top: 10px; position: relative;}

.instHeadImageContainer .club-main-gallery .instHeadPhoto { position: relative; }

.instHeadImageContainer .club-main-gallery .instHeadPhoto:before { padding-top: 36%; display: block; content: ''; }

.instHeadImageContainer .club-main-gallery .instHeadPhoto img { max-width:100%; max-height:100%; position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-50%,0); }

.instVideoContainer { position: relative;     margin-top: -40px; z-index: 2;}

.instVideoContainer:before { display: block; content: ''; padding-top: 50%; }

.instVideoContainer .instVideo { position: absolute; left: 0; right: 0; bottom: 0; left: 0; }

.instPage .galleryTitle { margin-top: 50px;    float: left; width: 100%; }

.instDescription { letter-spacing: .4px; color: rgb(91,91,91) }

.instSocialShare { margin-top: 50px;    float: left; width: 100%; }

.instMap { margin-top: 40px;     float: left; width: 100%;}

.instMenu { margin-top: 30px; }

.instContacts { margin-top: 10px; margin-bottom: 10px; }

.instContactsName { font-weight: bold; letter-spacing: .5px; font-size: 11px; color: rgb(91,91,91);text-transform: uppercase;}

.instContactsContent {padding: 5px 10px; letter-spacing: .5px; font-size: 13px; display: inline-block;}


.instMenuItem { position: relative; display: block;}

.instMenuItem:before {display: block; content: ''; padding-top: 80%;opacity: 0}

.instMenuItem > div { position: absolute; left: 0; right: 0; bottom: 0; top: 0; padding: 20% 25%;     background-size: 102%;}

.instMenuItem > div * { color: white; z-index: 2 }

.instMenuItem > div .instMenuTitle { transition: all 0.25s ease; border-bottom: 2px solid white; padding-bottom: 10px; margin: 0; text-align: center; margin-bottom: 10px; letter-spacing: 0.5px; font-weight: bold; min-height: 64px; font-size: 22px; }

.instMenuItem > div .instMenuDescrShort {text-align:center;opacity: 1; transition: all 0.35s ease; margin-bottom: 10px; font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 15px;}

.instMenuItem > div button { opacity: 0; transition: all 0.45s ease; font-weight: bold; min-height: 30px; height: 30px; margin: 0; color: rgba(193, 222, 151, 1); border-radius: 0; background-color: white; width: 70%; margin-left: 15%; border-radius: 20px; line-height: 1px; font-size: 12px; }

.instMenuItem > div button:hover {background-color: transparent; border:2px solid white; }

.instMenuItem > div button:hover span { color: white; }

.instMenuItem > div .instMenuTitle, .instMenuItem > div .instMenuDescrShort, .instMenuItem > div button { -webkit-transform: translate3d(0,30px,0); transform: translate3d(0,0px,0); }

.instMenuItem > div:hover .instMenuTitle, .instMenuItem > div:hover .instMenuDescrShort, .instMenuItem > div:hover button { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,-20px,0); }

.instMenuItem > div:hover button { opacity: 1 }



.instMenuItem:hover > div { background-image: none !important }

.instMenuItem:hover:before { opacity: 1 }

@media (min-width: 992px) and ( max-width: 1199px){
    .instMenuItem > div { padding: 18% 20%; }
    .instMenuItem > div .instMenuTitle { font-size: 19px; }
    .instMenuItem > div .instMenuDescrShort{ font-size: 11px; }
}

@media ( min-width: 768px) and ( max-width: 991px){
    .instMenuItem > div { padding: 13%; }
    .instMenuItem > div .instMenuTitle { font-size: 17px; margin-bottom: 5px; }
    .instMenuItem > div .instMenuDescrShort{ font-size: 10px; }
}

@media ( max-width: 767px){
    .instMenuItem > div { padding: 14%; }
    .instMenu { box-shadow: none; }
}

@media ( max-width: 991px ){
    .instVideoContainer { margin-top:0px;}
    .instHeadImageContainer { margin-bottom: 20px; margin-top: 10px; }
    .club-main-prev, .club-main-next { display: none !important }
}

@media( max-width: 767px ) {
    .instHeadImageContainer { margin-top: 20px; }
    .instMenuItem { margin-bottom: 30px;     box-shadow: 0 1px 8px 0 rgba(0,0,0,.2),0 3px 4px 0 rgba(0,0,0,.14),0 3px 3px -2px rgba(0,0,0,.12); }
}


/*----------------------------END INSTANS PAGE-----------------------------*/
</style>
@stop
