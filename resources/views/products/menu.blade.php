@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')


<div id="getMenu" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <md-dialog ng-cloak>
            <div class="modalContainer">
            <md-button class="modalClose md-icon-button" data-dismiss="modal" aria-label="close">
                <md-icon md-svg-src="images/icons/close.svg"></md-icon> 
            </md-button>
                
            <div 
                layout="row" layout-align="stretch"
                layout-xs="column" layout-align-xs="start stretch">
                <div flex=50>ds</div>
                <div flex=50 layout="column" layout-align="start stretch"
                flex-xs=100>
                    <span class="menuTitle">Lorem ipsum dolor.</span>
                    <span class="menuDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In eum maiores officiis laudantium consequuntur iste harum nulla, nihil recusandae, molestias distinctio assumenda iure doloremque. Recusandae alias unde omnis. At, voluptatibus.</span>
                    <span class="menuDivider"></span>
                    <ngcart-addtocartmodal id="1" name="1" price="1" quantity="1" quantity-max="30" data="item" ></ngcart-addtocartmodal>

                    <script type="text/ng-template" id="template/ngCart/addtocartmodal.html">
                        <div layout="column" layout-align="start stretch" class="menuAddtocart">

                                <div layout="column" layout-align="start start" class="menuPrice">
                                    <span class="menuPrice">
                                        Цена: 480 лей
                                    </span>
                                    <span>
                                        Количество: <select name="quantity" id="quantity" ng-model="q" ng-options=" v for v in qtyOpt"></select>
                                    </span>
                                    <span>
                                        Сумма: 480 лей
                                    </span>
                                </div>
                                
                                <div class="menuOrder" layout="column" layout-align="start stretch">
                                   
                                    <md-button ng-click="ngCart.addItem(id, name, price, q, data)" ng-transclude class="md-raised md-warn md-block redButton"> 
                                            Заказать
                                    </md-button>
                                        
                                </div>

                                <mark ng-show="inCart()">
                                        Добавлено1. <a ng-click="ngCart.removeItemById(id)" >Удалить из корзины</a>
                                </mark>
                        </div>
                    </script>

                </div>
            </div>
            </div>
        </md-dialog>
    </div>
</div>

<style type="text/css">
    #getMenu .menuTitle{ text-align: center; font-size: 24px; margin-top: 10px; margin-bottom: 10px;color: #5B5B5B; }
    #getMenu .menuDescription { font-size: 16px; margin-bottom: 15px; margin-top: 10px; letter-spacing: .7px; word-spacing: 2px; font-weight: 300; line-height: 21px; }
    #getMenu .menuDivider { background: url(../images/separator.png) no-repeat; -webkit-background-size: 100% 1px; -moz-background-size: 100% 1px; -o-background-size: 100% 1px; background-size: 100% 1px; height: 2px; width: 100%; margin-top: 15px;}

    #getMenu .menuAddtocart { margin-top: 30px; }

    #getMenu .menuAddtocart .menuPrice span{ color: #5b5b5b; font-size: 17px; line-height: 28px; }

    #getMenu .menuAddtocart .menuPrice span select { margin-left: 20px; }

    #getMenu .menuAddtocart .menuOrder{ margin:10px 0; }
</style>


<div class="layout-page " >

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.menu')]]])

    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                <div class="menu-container">
                    <div class="col-md-3  menu-left-container">
                        <div class="menuLeftTitle">{{ trans('common.menu') }} {{ $data->name }}
                            
                        </div>

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
                                <md-button ng-href="{{ route('get_menu_products', ['slug' => $data->slug, 'slug-menu' => $cat->slug]) }} " class="left-a">
                                    {{ $cat->name }}
                                   
                                </md-button>
                                
                            </li>

                            @endif

                            @endforeach

                           
                            
                        </ul>
                    </div>

                    <div class="col-md-9" >
                        <div class="row" >

                        <div class="masonry menuPage" data-columns>
                            @foreach($menu_products as $key => $product)

                                <div class="menuItem " layout="column" layout-align="stretch" ng-controller="menuCtrl">
                                    <div class="md-whiteframe-2dp" layout-align="start stretch" layout="column" ng-controller="menuCtrl">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#getMenu">
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