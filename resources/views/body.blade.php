<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" > 
<head>
    <base href="{{ URL::to('/') }}"/>
    <title>Allevents</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="keywords" content="Allevents, Renovation" />
    <meta name="description" content="@yield('meta_description', trans('common.meta_description'));" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=.5, user-scalable=no">
        @yield('jsonProductSharing')
    @yield('jsonIndexMicrodata')
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    
    {!! HTML::style('css/normalize.css') !!}
    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/angular-material.min.css') !!}
    

   
</head>
<body ng-app="BlankApp"  ng-controller="bodyCtrl" layout="column" class="@yield('productClass') remove-bg  bgFilter bgFilter3" >

<!-- @yield('loadingPage') -->

	<div id="fb-root"></div>

    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>



@include('partials.sidebar')

<md-content layout-fill class="@yield('productClass')">

        
    @include('partials.modals')
    
    <!-- @include('partials.topbar') -->
    

    <div class="container wrapper" >
    @include('partials.header')
        @yield('centerbox') 
    </div>

    @include('partials.footer')
    


</md-content>


<md-button class="scroll-to-top hidden-xs md-fab" aria-label="up">
    <md-icon md-svg-icon="images/icons/arrow-top.svg"></md-icon>
</md-button>

<!-- 
    
    <script>
        ChatraID = 'ZQtbFtfpJdGwqwi6x';
        (function (d, w, c) {
            var n = d.getElementsByTagName('script')[0],
                s = d.createElement('script');
                    w[c] = w[c] || function () {
                        (w[c].q = w[c].q || []).push(arguments);
                    };
                s.async = true;
                s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//call.chatra.io/chatra.js';
                n.parentNode.insertBefore(s, n);
                })(document, window, 'Chatra');
    </script> -->

    <!-- /Chatra-->

    

{!! HTML::style('css/font-awesome.min.css') !!}
{!! HTML::style('css/simple-line-icons.css') !!}
{!! HTML::style('css/sweetalert.css') !!}
{!! HTML::style('css/magnific-popup.css') !!}

    
    @yield('linkStyleIndexPage')
    @yield('linkStyleProductPlanPage')
    @yield('linkStyleProductPage')
    @yield('styles')
    <link rel="stylesheet" href="css/main.css?ver=7">


    @yield('metaNewsSharing')
    @yield('metaProductSharing')

    @yield('styleIndexPage')
    @yield('styleTopMenuPage')
    @yield('styleProductPage')
    @yield('styleProductVideoPage')
    @yield('styleProductReservPage')
    @yield('styleProductGalleryPage')
    @yield('styleProductPhotoPage')
    @yield('styleProductPlanPage')
    @yield('styleProductMenuPage')
    @yield('styleProductPromoPage')
    @yield('styleNewslistPage')
    @yield('styleNewsshowPage')

    @yield('styleProductsPage')

    @yield('styleSearchPage')

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/angular-aria.min.js"></script>
    <script src="js/angular-messages.min.js"></script>
    <script src="js/angular-material.min.js"></script>
    <script src="js/angular-sanitize.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/salvattore.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/validate_bootstrap.js"></script>
    <script src="js/sweetalert.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/ngCart.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/components.js?ver=4"></script>
    <script src="js/controller.js?ver=4"></script>

    @yield('scripts')


    @yield('scriptIndexPage')

    @yield('scriptProductPage')
    @yield('scriptProductPlanPage')


    @yield('productPageScripts')

     <script>
    $(document).ready(function() {
      $('.galleryPhoto').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image',
          gallery:{
    enabled:true
  }
        });
      });
    </script>

   


</body>
</html>