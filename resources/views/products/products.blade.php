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