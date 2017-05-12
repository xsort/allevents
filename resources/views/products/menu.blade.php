@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page " ng-controller="menuCtrl">

    @include('products.menu-modal')

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => $trans->product_menu_breadcrumbs]]])

    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                <div class="menu-container" ng-cloak>
                    <div class="col-md-3  menu-left-container">
                        <div class="menuLeftTitle">{{$trans->topmenu_production}} <br/> {{ $data->name }}</div>
                        <ul class="menu-left">
                            @foreach($menu_categories as $cat)
                                @if($cat->children->count()>0)
                                    <li layout="column" layout-align="start stretch"  class="hasSub">
                                        <md-button ng-href="" layout-align="space-between stretch">
                                            <span flex=80>{{ $cat->name }}</span>
                                            <i flex=20 class="icon-arrow-down"></i>
                                        </md-button>
                                        <ul>
                                            @foreach($cat->children as $subcat)
                                                @if($subcat->menu_products->count() == 0) @continue @endif
                                                <li>
                                                    <a href="{{ route('get_menu_products', ['slug' => $data->slug, 'slug-menu' => $subcat->slug]) }}" >
                                                        <span>{{ $subcat->name }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                <li>
                                    <md-button ng-href="{{ route('get_menu_products', ['slug' => $data->slug, 'slug-menu' => $cat->slug]) }}" class="left-a">
                                        {{ $cat->name }}
                                    </md-button>

                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="row">
                        <div class="masonry menuPage" data-columns>
                            @foreach($menu_products as $key => $product)
                                <div class="menuItem " layout="column" layout-align="stretch" >
                                    <div class="md-whiteframe-2dp" layout-align="start stretch" layout="column" >
                                        <a ng-href="" data-id="{{$product->id}}" class="plan-start">
                                            <div class="menuImg" layout="row" layout-align="center center">
                                                <div class="menuPriceWrapper">
                                                    <div class="menuPriceValue">
                                                        @if ($product->price > 0)
                                                        <span>{{ $product->price }}</span>
                                                        <span>{{ trans('common.lei') }}</span>
                                                    @endif
                                                    </div>
                                                    <div class="menuPrice">
                                                    </div>
                                                </div>
                                                <img src="{{ isset($product->photos{0}) ? 'uploaded/' . $product->photos{0}->source : 'images/inst-menu-photo/photo.png'}}"  width="100%" alt="{{ $product->name }}">
                                            </div>
                                            <div class="menuDescr menuDescr-{{rand(0,5)}}">
                                                <span class="menuTitle">{{$product->name}}</span>
                                                <div class="menuDescrShort"  layout="row" layout-align="start center"> <span>{!! str_limit($product->description, $limit = 120, $end = '...') !!}</span></div>
                                            </div>
                                        </a>
                                        <ngcart-addtocart id="{{$product->id}}" name="{{ $product->name }}" price="{{ $product->price }}" quantity="1" quantity-max="30" data="item" ></ngcart-addtocart>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                         </div>
                    </div>

    
                    <script type="text/ng-template" id="template/ngCart/addtocart.html">
                        <div layout="column" layout-align="start center">
                                <div class="menuOrder" layout="row" layout-align="space-around center">
                                    <md-button md-ink-ripple="false" ng-click="ngCart.addItem(id, name, price, q, data)" ng-transclude>
                                        <md-icon md-svg-src="images/icons/shopping-cart.svg"></md-icon>
                                            Добавить в корзину
                                    </md-button>
                                    <select name="quantity" id="quantity" ng-model="q" ng-options=" v for v in qtyOpt"></select>
                                </div>
                                <mark ng-show="inCart()">
                                        Добавлено. <a ng-click="ngCart.removeItemById(id)" >Удалить из корзины</a>
                                </mark>
                        </div>
                    </script>

            </div>
        </div>
    </div>
</div></div>
@stop

@section('styles')
    <link rel="stylesheet" href="css/magnific-popup.css">
@stop

@section('scripts')
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            initPopup();
        });

        function initPopup(){
            $('.galleryPhotoImage').magnificPopup({type:'image',gallery: { enabled: true }});
        }
    </script>
@stop

@section('scriptProductPlanPage')

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script>
    $(document).ready(function() {
        initPlanSliderFor();
        initPlanSliderNav();
    });

    function initPlanSliderFor() {
        $('.plan-slider-for').slick(
            {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.plan-slider-nav'
            }
        )
    }

    function initPlanSliderNav() {
        $('.plan-slider-nav').slick(
            {
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.plan-slider-for',
                dots: false,
                focusOnSelect: true,
                nextArrow: '.plan-next',
                prevArrow: '.plan-prev',
                centerMode: true,
                responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,

                    }
                }, {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,

                    }
                }, {
                    breakpoint: 976,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]
            }
        )
    }

    $('.plan-start').click(function() {

        //TODO SHOW LOADING

        $.get('get-shop-product/' + $(this).data('id'),
                {
                    _token: '{{  csrf_token() }}'
                },
                function (response) {
                    if (response.success !== true) {
                        if (response.data !== undefined) {
                            $.each(response.data, function (k, v) {
                                toastr.error(v);
                            });
                        } else {
                            toastr.error("ERROR: " + response);
                        }
                        return false;
                    }
                    //success response
                    responseHandler(response.data);
                }
        );
    });

    function responseHandler(data){
        //applying angular scope
        $scope = $('#getMenu').scope();
        $scope.menu_id          = data.id;
        $scope.menu_name        = data.name;
        $scope.menu_description = data.description;
        $scope.menu_price       = data.price;
        $scope.$apply();

        //removing previously slides
        $('.plan-slider-for').slick('slickRemove', 0, false, true);
        $('.plan-slider-nav').slick('slickRemove', 0, false, true);

        //append slider images
        data.photos.forEach(function(item, i, arr) {
            var photo = '/uploaded/' + item;
            var style = "background-image:url('" + photo + "'";
            var $a = $('<a></a>');
            $a.addClass('sliderForItem c-bg-center galleryPhotoImage');
            $a.attr('href',  photo);
            $a.attr('style', style);
            $('.plan-slider-for').slick('slickAdd', $a);

            var $div = $('<div></div>');
            $div.addClass('sliderNavItem c-bg-center');
            $div.attr('style', style);
            $('.plan-slider-nav').slick('slickAdd', $div);
        });

        $('#getMenu').modal('show');

        $('#getMenu').on('shown.bs.modal', function (e) {
            $('.plan-slider-for').slick('setPosition');
            $('.plan-slider-nav').slick('setPosition');
            initPopup();

            //TODO REMOVE LOADING
        });
    }

</script>
@stop

@section('styleProductPlanPage')
<style>
    .modal-backdrop{ z-index: 999;}
    .modal { z-index: 1000;}

.next-arrow, .prev-arrow { z-index: 6; position: absolute; }

.next-arrow { background: url(../images/slider-notice/arrow-right.png); right: 0; }

.prev-arrow { background: url(../images/slider-notice/arrow-left.png); left: 0;}

.plan-next { left: 0px; }

.plan-prev { right: 0px; }

.control-slider { display: block; height: 100px; background-repeat: no-repeat; width: 35px; position: absolute; cursor: pointer; -webkit-transition: all 0.2s;transition: all 0.2s; border: none; } 

.plan-prev,.plan-next { top: 50%; transform: translate3d(0,-50%,0); background-color: white; background-size:45%; background-position: center; opacity: 0;}

.plan-prev,.plan-next { background-size:40%; background-position: center; width: 46px; position: absolute; top: 50%; transform: translate3d(0,-50%,0); background-color: rgba(255, 255, 255, 1); }




    /*----------------------------NEW INSTANS PAGE-----------------------------*/

.plan-slider-for .sliderForItem{ position: relative; display: block; }

.plan-slider-for .sliderForItem:before{ display: block; content: ''; padding-top: 62%;  }

.plan-slider-for { width: 100%; }

.container-slider-for a { position: absolute; right: 45px;top: 45px; width: 180px; height: auto; }

.container-slider-for a img { width: 100%; min-height: 1px; }

.plan-slider-nav { margin-bottom: 0px; }

.plan-slider-nav .sliderNavItem { width: 100%; position: relative; margin-left: 4px; margin-right: 4px; cursor: pointer; }

.plan-slider-nav .sliderNavItem:before { display: block; content: ''; padding-top: 83%;  background: rgba(18, 51, 62, 0.1);}


.container-slider-nav { position: relative; }

.container-slider-nav .next-arrow,.container-slider-nav .prev-arrow { opacity: 1 }

.plan-slider-nav:before{ content: ''; position: absolute; right: -1px; top:0; height: 100%; width: 15px; background-color: white; z-index: 2}



@media(max-width: 991px){
    .container-slider-nav .next-arrow,.container-slider-nav .prev-arrow {  }
    .plan-slider-for .sliderForItem:before{ padding-top: 65%;  }
}

@media(max-width: 600px){
    .plan-prev, .plan-next{transform: translate3d(0,0,0); top: 0; bottom: 0; height: 100%;}
}
/*----------------------------NEW INSTANS PAGE-----------------------------*/

</style>

<style type="text/css">
    #getMenu .menuTitle{ text-align: center; font-size: 24px; margin-top: 10px; margin-bottom: 10px;color: #5B5B5B; }
    #getMenu .menuDescription { font-size: 16px; margin-bottom: 15px; margin-top: 10px; letter-spacing: .7px; word-spacing: 2px; font-weight: 300; line-height: 21px; }
    #getMenu .menuDivider { background: url(../images/separator.png) no-repeat; -webkit-background-size: 100% 1px; -moz-background-size: 100% 1px; -o-background-size: 100% 1px; background-size: 100% 1px; height: 2px; width: 100%; margin-top: 15px;}

    #getMenu .menuAddtocart { margin-top: 30px; }

    #getMenu .menuAddtocart .menuPrice span{ color: #5b5b5b; font-size: 17px; line-height: 28px; }

    #getMenu .menuAddtocart .menuPrice span select { margin-left: 20px; }

    #getMenu .menuAddtocart .menuOrder{ margin:10px 0; }

    #getMenu .menuAddtocart mark { background: white; font-size: 13px; text-align: center; color: rgb(120, 120, 120);}

    #getMenu .menuAddtocart mark a{ text-transform: uppercase; color: black; font-size: 13px; letter-spacing: .2px; cursor: pointer;color: #e3605b;}
</style>
@stop

@section('styleProductMenuPage')

    <style>

        /*----------------------------NEW INST MENU--------------------------------*/


        .menuItem{ position: relative; margin-bottom: 30px; display: block; }

        .menuItem > div { padding-bottom: 5px; }

        .menuItem > div > a { display: block; height: 80%; position: relative; overflow: hidden;}

        .menuItem > div > a:hover .menuDescr { transform: translate3d( 0,0,0); }

        .menuItem > div .menuOrder { height: 20%; padding:5px; padding-bottom: 0;}

        .menuItem .menuOrder button {     margin: 0; margin-right:10px; border-radius: 0; font-size: 13px; color: rgb(120, 120, 120); text-transform: inherit; }

        .menuItem .menuOrder button span { margin-left: 5px; }

        .menuItem .menuOrder button md-icon { margin-top: -2px; }

        .menuItem .menuOrder button:hover { background-color: white;     color: #e3605b;  }

        .menuItem .menuOrder button:hover md-icon { color: #e3605b }

        .menuItem .menuImg { position: relative; overflow: hidden; }

        .menuItem .menuImg:before { display: block;  padding-top: 80%; content: '';}

        .menuItem .menuImg .menuPriceWrapper {  box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.137255) 0px 5px 8px 0px, rgba(0, 0, 0, 0.117647) 0px 1px 14px 0px; position: absolute; right: 0; top: 0; overflow: hidden; width: 70px; height: 65px }

        .menuItem .menuImg .menuPriceWrapper .menuPriceValue { position: absolute; top: 2px; right: 4px; z-index: 7; color: white; width: 40px; text-align: right; }

        .menuItem .menuImg .menuPriceWrapper .menuPriceValue span { width: 100%; }

        .menuItem .menuImg .menuPriceWrapper .menuPriceValue span:first-child{ font-size: 17px; font-weight: bold; }

        .menuItem .menuImg .menuPriceWrapper .menuPriceValue span:last-child{ font-size: 12px; margin-top: -7px; display: block; }

        .menuItem .menuImg .menuPrice { box-shadow: inset 0px -1px 20px 0px grey; position: relative; width: 99px; display: block; height: 65px; margin-left: 6px; z-index: 2; margin-top: -26px; background-color: #f94545; transform: rotate(43deg); }

        .menuItem .menuImg .menuPrice:before { position: absolute; position: absolute; content: ''; background-color: rgba(255, 255, 255, 0.95); height: 50px; width: 100%; top: 100%; left: 0; }

        .menuItem mark{ background: white; font-size: 13px; text-align: center; width: 100%; display: block; color: rgb(120, 120, 120); }

        .menuItem mark a {     cursor: pointer; font-size: 13px; color: #e3605b; margin: 0 5px; }

        .menuItem .menuDescr { transition: all 200ms ease; position: absolute; left: 0; right: 0; bottom: 0; color: white; transform: translate3d( 0, 60px,0 ); }

        .menuItem .menuDescr.menuDescr-0 { background: rgba(95, 158, 160, 0.9);}

        .menuItem .menuDescr.menuDescr-1 { background: rgba(131, 197, 80, 0.9); }

        .menuItem .menuDescr.menuDescr-2 { background: rgba(184, 134, 11, 0.9); }

        .menuItem .menuDescr.menuDescr-3 { background: rgba(154, 205, 50, 0.9); }

        .menuItem .menuDescr.menuDescr-4 { background: rgba(255, 69, 0, 0.9); }

        .menuItem .menuDescr.menuDescr-5 { background: rgba(100, 149, 237, 0.9); }

        .menuItem .menuDescr .menuTitle, .menuItem .menuDescr .menuDescrShort {     padding: 8px 10px; display: block; font-size: 11px; letter-spacing: 0.5px; text-transform: uppercase;}

        .menuItem .menuDescr .menuDescrShort { height: 60px; display: flex;padding: 0px 10px 8px; }

        .menuItem .menuDescr .menuDescrShort * { font-size: 9px; margin-bottom: 0;}

        .menuLeftTitle{ text-align: center; text-transform: uppercase; letter-spacing: .5px; font-weight: bold; font-size: 21px; margin-bottom: 20px; color: rgb(91, 91, 91); }

        .menu-left { padding: 0; margin:0; }

        md-menu-content{ padding: 0; }

        .menu-left li { list-style-type: none; float: left; width: 100%; box-shadow: 0 1px 3px 0 rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12); text-transform: uppercase; letter-spacing: 1px; font-size: 15px; margin-bottom: 15px;}

        .menu-left li a { color: rgb(131, 131, 131); padding: 12px 20px; display: flex; margin: 0; line-height: 20px; text-align: left; border-radius: 0px; letter-spacing: .7px; font-size: 14px;}

        .menu-left li a.md-button .md-ripple-container{border-radius: 0px;}

        .menu-left li a:hover { color: white !important; background-color: rgba(227, 96, 91, 0.71) !important; }

        .menu-left li a:hover i { color: white }

        .menu-left li i { color: rgba(102, 102, 102, 0.87); font-size: 13px; margin-right: 5px; margin-left: 15px; line-height: 20px; }

        .menu-left li.hasSub.active > a { background: rgba(227, 96, 91, 0.78); color: white;}

        .menu-left li.hasSub.active > a i { color: white; }

        .menu-left li.hasSub ul { padding:0; width: 90%; margin-left: 5%; padding: 10px 0; display: none }

        .menu-left li.hasSub ul li:last-child{ margin-bottom: 0px; }

        .menu-left li.hasSub.active ul { display: block; }


        @media screen and (max-width:767px) {
            .masonry.menuPage[data-columns]::before { content: '1 .col-xs-12'; }
        }

        @media screen and (min-width:768px) and (max-width:991px) {
            .masonry.menuPage[data-columns]::before { content: '2 .col-sm-6'; }
        }

        @media screen and (min-width:992px) and (max-width:1199px) {
            .masonry.menuPage[data-columns]::before { content: '3 .col-md-4'; }
        }

        @media screen and (min-width:1200px) {
            .masonry.menuPage[data-columns]::before { content: '3 .col-xs-4'; }
        }


        /*----------------------------END INST MENU--------------------------------*



        </style>

@stop

@section('linkStyleProductPlanPage')
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
@stop