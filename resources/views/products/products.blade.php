@extends('body')
@section('centerbox')

<div class="layout-page ">



<div class="layout-content" >

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="text-center margin-b-50 margin-t-15">
                <h1 class="page-title rowed">Клубы</h1>
            </div>

            @foreach ($data as $product)
            <div class="col-md-3 col-sm-6 productsWrapper">
                    <a href="{{$product->slug}}" class="instItem md-whiteframe-2dp" layout-align="center center">
                    
                    <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                    <div layout="column" layout-align="space-between stretch">
                        <h3 class="instTitle">
                            <span>{{$product->name}}</span>
                            <md-tooltip md-direction="top" md-delay="500">
                                <div class="font-uppercase">{{$product->name}}</div>
                            </md-tooltip>
                        </h3>
                        <span class="instDescrShort">{{ str_limit($product->description_short, $limit = 120, $end = '...') }}</span>
                        <md-button class="md-rised" md-ink-ripple="false">Посмотреть</md-button>
                    </div>
                </a>
            </div>
            @endforeach
     

        </div>

        <!-- @include('partials.right-banners') -->

    </div>
</div>
</div>
</div>
@stop