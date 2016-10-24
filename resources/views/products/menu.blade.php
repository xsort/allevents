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
                                        <ngcart-addtocart id="{{$key+2}}" name="{{ $product->name }}" price="{{ $product->price }}" quantity="1" quantity-max="30" data="item" ></ngcart-addtocart>
                                        
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