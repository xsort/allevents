<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" > 
<head>
    <base href="{{ URL::to('/') }}"/>
    <title>Allevents</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="keywords" content="Construction, Renovation" />
    <meta name="description" content="@yield('meta_description', trans('common.meta_description'));" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=.5, user-scalable=no">
   
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/angular-material.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link rel="stylesheet" href="css/main.css?ver=4">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    @yield('metaNewsSharing')
    @yield('metaProductSharing')
  <style>
        .products-page header .headerWrapper {
            background-image: url('../images/background/main-bg.jpg') ;
        }
    </style>

   
</head>

<body ng-app="BlankApp"  ng-controller="bodyCtrl" layout="column" class="remove-bg @yield('productClass') bgFilter3" style="background-image: url('../images/background/main-bg.jpg');">

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

<div class="content">
        
    @include('partials.modals')
    
    <!-- @include('partials.topbar') -->
    @include('partials.header')

    <div class="container wrapper" ng-cloak>
    
        @yield('centerbox') 
    </div>

    @include('partials.footer')
    

</div>

<div class="scroll-to-top hidden-xs">
    <span class="fa fa-angle-up"></span>
</div>

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


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/angular-aria.min.js"></script>
    <script src="js/angular-messages.min.js"></script>
    <script src="js/angular-material.min.js"></script>
    <script src="js/ngCart.js"></script>
    <script src="js/angular-masonry.min.js"></script>
    
    <script src="js/formValidation.min.js"></script>
    <script src="js/validate_bootstrap.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.jscroll.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/salvattore.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/plugins-scroll.js"></script>
    <script src="js/sliders.js" ></script>
    <script src="js/components.js?ver=4"></script>
    <script src="js/controller.js?ver=4"></script>

    @yield('jsonProductSharing')
    @yield('jsonIndexMicrodata')
    @yield('productPageScripts')



</body>
</html>