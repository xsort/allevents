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
            <div class="col-md-3 col-sm-6 club-wrapper">
                    <a href="{{$product->slug}}" class="category">
                    <span class="logo-club">
                        <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                    </span>
                        <h3 class="main-title"><span>{{$product->name}}</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">{{$product->description_short}}</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
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