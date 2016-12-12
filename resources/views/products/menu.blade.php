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
                        <div class="menuLeftTitle">{{ trans('common.menu') }} {{ $data->name }}
                            
                        </div>

                        <ul class="menu-left">

                            @foreach($menu_categories as $cat)

                            @if($cat->children->count()>0)
                            <md-menu>
                                  
                                  <li><a href="javascript:void(0)" ng-click="$mdOpenMenu($event)">{{ $cat->name }}</a></li>

                                  
                                  <md-menu-content width="4">
                                      @foreach($cat->children as $subcat)
                                        <md-menu-item>
                                          <md-button ng-href="{{ route('get_menu_products', ['slug' => $data->slug, 'slug-menu' => $subcat->slug]) }}" > 
                                            <span>{{ $subcat->name }}</span> 
                                        </md-button>
                                        </md-menu-item>
                                      @endforeach
                                  </md-menu-content>

                                

                            </md-menu>
                            

                            @else

                            <li>
                                <a href="{{ route('get_menu_products', ['slug' => $data->slug, 'slug-menu' => $cat->slug]) }} " class="left-a">{{ $cat->name }}
                                    <span class="fa"></span>
                                </a>
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
                                    <div class="md-whiteframe-2dp">
                                        <a href="javascript:void(0)" >
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
                                                <div class="menuDescrShort"  layout="row" layout-align="start center"> <span>{!!$product->description!!}</span></div>
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

.menuItem > div > a { display: block; height: 80%; position: relative; overflow: hidden;}

.menuItem > div > a:hover .menuDescr { transform: translate3d( 0,0,0); }

.menuItem > div .menuOrder { height: 20%; display: flex; padding:5px; padding-bottom: 0;}

.menuItem .menuOrder button {     margin: 0; margin-right:10px; border-radius: 0; font-size: 13px; color: rgb(120, 120, 120); text-transform: inherit; }

.menuItem .menuOrder button span { margin-left: 5px; }

.menuItem .menuOrder button md-icon { margin-top: -2px; }

.menuItem .menuOrder button:hover { background-color: white;     color: #e3605b;  }

.menuItem .menuOrder button:hover md-icon { color: #e3605b }

.menuItem .menuImg { position: relative; overflow: hidden; }

.menuItem .menuImg:before { display: block; content: ''; padding-top: 80%; }

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

.menu-left li { list-style-type: none; float: left; width: 100%; box-shadow: 0 1px 3px 0 rgba(0,0,0,.2),0 1px 1px 0 rgba(0,0,0,.14),0 2px 1px -1px rgba(0,0,0,.12);     padding: 8px 15px; text-transform: uppercase; letter-spacing: 1px; font-size: 15px; margin-bottom: 10px;}

.menu-left li a { color: rgb(131, 131, 131); }


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