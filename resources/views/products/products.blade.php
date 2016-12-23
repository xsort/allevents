@extends('body')
@section('centerbox')
<div class="layout-page ">
<div class="layout-content" >

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="text-center newsListTitle">
                <h1 class="page-title rowed">{{ $category->name }}</h1>
            </div>

            @forelse ($data as $product)
            <div class="col-md-3 col-sm-6 productsWrapper">
                    <a href="{{$product->slug}}" class="instItem md-whiteframe-1dp" layout-align="center center">
                    
                    <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                    <div layout="column" layout-align="space-between stretch">
                        <h3 class="instTitle">
                            <span>{{$product->name}}</span>
                            <md-tooltip md-direction="top" md-delay="500">
                                <div>{{$product->name}}</div>
                            </md-tooltip>
                        </h3>
                        <span class="instDescrShort">{{ str_limit($product->description_short, $limit = 120, $end = '...') }}</span>
                        <md-button class="md-rised" md-ink-ripple="false">Посмотреть</md-button>
                    </div>
                </a>
            </div>

            @empty
                <p align="center">Объекты пока не добавлены в этот раздел</p>
            @endforelse
     

        </div>

        <!-- @include('partials.right-banners') -->

    </div>
</div>
</div>
</div>
@stop


@section('styleProductsPage')


<style>
    

/*-----------------------------NEW PRODUCTS LIST---------------------------*/

.instItem { display: block; !important; width: 100%; position: relative; background-color: white; margin-right: 15px; margin-left: 15px; padding: 35px; }

.instItem img{     max-width: calc(100% - 70px); max-height: calc(100% - 70px); position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-50%,0);}

.instItem > div {  transition: all 200ms linear; -webkit-transition: all 200ms linear; position: absolute; left: 0; top: 0; display: flex; width: 100%; height: 100%; background-color: rgba(193, 222, 151, 1); opacity: 0; padding:35px;}

.instItem:hover > div { opacity: 1; }

.instItem:before { content: ""; display: block; padding-top: 100%; }

.instItem .instDescrShort { transition: all 0.35s ease; margin-bottom:10px;font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 15px; color: white; }

.instItem .instTitle { transition: all 0.25s ease;   border-bottom:2px solid white; padding-bottom: 10px; margin:0; color: white; text-align: center; margin-bottom: 10px; letter-spacing: 0.5px;text-transform: uppercase; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: bold;}

.instItem button { transition: all 0.45s ease;  font-weight:bold; min-height:30px; height:30px;margin:0; color: rgba(193, 222, 151, 1); border-radius: 0; background-color: white; width: 70%; margin-left: 15%; border-radius: 20px;line-height: 1px; font-size: 12px;}

.instItem button:hover { background-color: transparent !important; color: white; border:2px solid white; }

.instItem .instTitle,.instItem .instDescrShort,.instItem button{ -webkit-transform: translate3d(0,60px,0); transform: translate3d(0,60px,0); }

.instItem:hover .instTitle,.instItem:hover .instDescrShort,.instItem:hover button { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);   }

.productsWrapper{ padding-bottom: 15px; padding-top: 15px; }

.productsWrapper a{transition: all 200ms linear; -webkit-transition: all 200ms linear; margin-right: 0; margin-left: 0; }

/*.productsWrapper a:hover { box-shadow: 0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12); }*/



/*-----------------------------END PRODUCTS LIST---------------------------*/

</style>

@stop