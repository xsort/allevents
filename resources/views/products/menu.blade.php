@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page " >

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.menu')]]])

    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                <div class="menu-container">
                    <div class="col-md-3  menu-left-container">
                        <div class="menu-left-title">{{ trans('common.menu') }} {{ $data->name }}
                            <button type="button" class="visible-xs visible-sm menu-left-btn "><i class="fa fa-reorder "></i></button>
                        </div>

                        <ul class="menu-left">
                            @foreach($menu_categories as $cat)
                            <li @if($cat->children->count()>0) class="has-sub" @endif><a href="javascript:void(0)" class="left-a">{{ $cat->name }}<span class="fa"></span></a>
                                @if($cat->children->count()>0)
                                <ul class="sub-menu-left">
                                    @foreach($cat->children as $subcat)
                                    <li><a href="{{ route('get_menu_products', ['slug' => $data->slug, 'slug-menu' => $subcat->slug]) }}">{{ $subcat->name }}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-md-9" >
                        <div class="row" >

                        <div class="masonry menuPage" data-columns>
                            @foreach($menu_products as $key => $product)

                                <div class="menuItem " layout="column" layout-align="stretch" ng-controller="menuCtrl">
                                    <div class="md-whiteframe-2dp">
                                        <a href="javascript:void(0)" >
                                            <div class="menuImg">
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
                                                <img src="{{ isset($product->photos{0}) ? 'uploaded/thumbs/' . $product->photos{0}->source : 'images/inst-menu-photo/photo.png'}}"  width="100%" alt="{{ $product->name }}">
                                            </div>
                                            <div class="menuDescr">
                                                
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

                                <div class="menuOrder" layout="row"    layout-align="center center">
                                    <md-button md-ink-ripple="false" ng-click="ngCart.addItem(id, name, price, q, data)" ng-transclude>
                                        <md-icon md-svg-src="images/icons/shopping-cart.svg"></md-icon>
                                            Добавить в корзину
                                    </md-button>
                                        
                                    <select name="quantity" id="quantity" ng-model="q" ng-options=" v for v in qtyOpt"></select>
                                    
                                </div>
                                <mark ng-show="inCart()">
                                        Добавлено. <a ng-click="ngCart.removeItemById(id)" >Удалить из корзины</a>
                                </mark>

</script>

            </div>
        </div>
    </div>
</div></div>


<div class="modal menu-modal">
    <div class="col-sm-6">
        <div class="container-slider-for">
            <div class="modal-slider-for">
                <img src="img/menu/menu-1.jpg" alt="">
                <img src="img/menu/menu-2.jpg" alt="">
                <img src="img/menu/menu-3.jpeg" alt="">
                <img src="img/menu/menu-4.jpg" alt="">
                <img src="img/menu/menu-5.jpg" alt="">
                <img src="img/menu/menu-6.jpg" alt="">
            </div>
        </div>
        <div class="container-slider-nav ">
            <button type="button" class="modal-next "></button>
            <div class="modal-slider-nav">
                <div class="item">
                    <div class="filter"> </div>
                    <img src="img/menu/menu-1.jpg" alt="">
                </div>
                <div class="item">
                    <div class="filter"></div>
                    <img src="img/menu/menu-2.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="item">
                    <div class="filter"> </div>
                    <img src="img/menu/menu-3.jpeg" alt="">
                </div>
                <div class="item">
                    <div class="filter"></div>
                    <img src="img/menu/menu-4.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="item">
                    <div class="filter"></div>
                    <img src="img/menu/menu-5.jpg" height="300px" width="100%" alt="">
                </div>
                <div class="item">
                    <div class="filter"></div>
                    <img src="img/menu/menu-6.jpg" height="300px" width="100%" alt="">
                </div>
            </div>
            <button type="button" class="modal-prev "></button>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="menu-title">
            Lorem ipsum dolor sit.
        </div>
        <div class="menu-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptas quis quaerat unde, sapiente labore cum repellat veritatis ad laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, repellendus?
        </div>
        <div class="separator margin-t-15"></div>

        <div class="modal-quant" >
            <span class="quant-title" ng-model="price" ng-init="price='480'">Цена: @{{price}} {{ trans('common.lei') }}</span>

            <span class="quant-title">Количество:</span>

            <input class="modal-input" min="1" type="number" ng-model="value" ng-init="value='1'" value="1">

            <span class="quant-title">Сумма: @{{value*price}} {{ trans('common.lei') }}</span>
        </div>

        <button class="menu-submit">Заказать</button>
    </div>

</div>

@stop

@section('productPageScripts')

<script>
     $('.menu-toggle').click(function () {

         $('.modal-fade-third').slideToggle("fast");
         $('.menu-modal').slideToggle("fast")
         $("body").toggleClass('overflow-h');
     });

     $('.modal-fade-third').click(function () {
         $('.menu-modal').slideToggle("fast");
         $('.modal-fade-third').slideToggle("fast");
         $("body").removeClass('overflow-h');
     });

</script>

@stop



@section('styleProductMenuPage')

<style>
    
/*----------------------------NEW INST MENU--------------------------------*/


.menuItem{ position: relative; margin-bottom: 30px; }

.menuItem > div { padding-bottom: 5px; }

.menuItem > div > a { display: block; height: 80%; }

.menuItem > div .menuOrder { height: 20%; display: flex; padding:5px; padding-bottom: 0;}

.menuItem .menuOrder button {     margin: 0; margin-right:10px; border-radius: 0; font-size: 13px; color: rgb(120, 120, 120); text-transform: inherit; }

.menuItem .menuOrder button span { margin-left: 5px; }

.menuItem .menuOrder button md-icon { margin-top: -2px; }

.menuItem .menuOrder button:hover { background-color: white;     color: #e3605b;  }

.menuItem .menuOrder button:hover md-icon { color: #e3605b }

.menuItem .menuImg { position: relative; overflow: hidden;     height: 200px;}

.menuItem .menuImg .menuPriceWrapper {  box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.137255) 0px 5px 8px 0px, rgba(0, 0, 0, 0.117647) 0px 1px 14px 0px; position: absolute; right: 0; top: 0; overflow: hidden; width: 70px; height: 65px }

.menuItem .menuImg .menuPriceWrapper .menuPriceValue { position: absolute; top: 2px; right: 4px; z-index: 7; color: white; width: 40px; text-align: right; }

.menuItem .menuImg .menuPriceWrapper .menuPriceValue span { width: 100%; }

.menuItem .menuImg .menuPriceWrapper .menuPriceValue span:first-child{ font-size: 17px; font-weight: bold; }

.menuItem .menuImg .menuPriceWrapper .menuPriceValue span:last-child{ font-size: 12px; margin-top: -7px; display: block; }

.menuItem .menuImg .menuPrice { box-shadow: inset 0px -1px 20px 0px grey; position: relative; width: 99px; display: block; height: 65px; margin-left: 6px; z-index: 2; margin-top: -26px; background-color: #f94545; transform: rotate(43deg); }

.menuItem .menuImg .menuPrice:before { position: absolute; position: absolute; content: ''; background-color: rgba(255, 255, 255, 0.95); height: 50px; width: 100%; top: 100%; left: 0; }

.menuItem mark{ background: white; font-size: 13px; text-align: center; width: 100%; display: block; color: rgb(120, 120, 120); }

.menuItem mark a {     cursor: pointer; font-size: 13px; color: #e3605b; margin: 0 5px; }


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

/* menu restaurant */ 

.menu-order {
    width: 100%;
    margin-bottom: 30px;
    height: 40px;
    border: 1px solid #b5b5b5;
    margin-top: -1px;
}

.menu-input,
.modal-input {
    width: 27px;
    margin-left: 1px;
    font-weight: bold;
    color: #f94545;
    float: left;
    margin-top: 6px;
    text-align: center;
    margin-right: 5px;
}

.menu-list {
    width: 25%;
    float: left;
    height: 10px;
}

.menu-left-title {
    font-weight: bold;
    text-align: center;
    width: 100%;
    display: block;
    margin-bottom: 15px;
    margin-top: 15px;
    font-size: 25px;
    line-height: 29px;
}

@media(max-width:991px) {
    .menu-left-container {
        margin-bottom: 40px;
    }
}

.menu-left-container ul {
    padding: 0;
}

.menu-left-container ul li {
    list-style-type: none;
}

.menu-left-container a {
    width: 100%;
    display: block;
    padding: 10px 20px;
    font-size: 17px;
    color: #666666;
    border: 1px solid #b5b5b5;
    margin-top: 10px;
    float: left;
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
    color: #5b5b5b;
}

.menu-left-container a span {
    float: right;
}

.menu-left-container li > a {
    cursor: pointer;
}

.menu-left-container li > ul li a.active {
    background: #f6705a;
    color: white;
}

.menu-left-container a span:before {
    float: right;
    margin-top: 4px;
    content: "\f105";
}

.menu-left-container li.active > a span:before {
    float: right;
    margin-top: 4px;
    content: "\f107";
}

.menu-left-container li ul li a {
    width: 95%;
    float: right;
    padding: 4px 20px;
}

.menu-left-container .sub-menu-left {
    display: none;
}

.menu-left-container li.active > a {
    background: #f6705a;
    color: white !important;
}

.menu-left-container a:hover {
    color: black;
}

.layout-inst-menu {
    margin-left: -15px !important;
    margin-top: 1px;
    margin-bottom: 25px;
    float: left;
        z-index: 1;
    position: relative;
}

.layout-inst-menu + .layout-breadcrumbs {
    margin-top: 45px;
}

@media(max-width:991px) {
    .page-on-scroll .layout-inst-menu {
        top: 39px !important;
    }
    .menu-left {
        display: none;
    }
}

@media(min-width:992px) {
    .menu-left {
        display: block !important;
    }
}


/* end of menu restaurant */


</style>

@stop