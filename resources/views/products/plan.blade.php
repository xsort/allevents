@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.plan')]]])

    <div class="layout-content" >
        <div id="loading" class="page">
            <div id="loading-center">
                <div id="loading-center-absolute" class="page">
                    <div class="object page-l one" id="object_four"></div>
                    <div class="object page-l one" id="object_three"></div>
                    <div class="object page-l one" id="object_two"></div>
                    <div class="object page-l one" id="object_one"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="container-slider-for  md-whiteframe-1dp hidden-xs">
                <div class="plan-slider-for">
                    @foreach($data->hallplan as $photo)
                        <div class="sliderForItem c-bg-center" style="background-image:url(uploaded/{{ $photo->source }});"></div>
                    @endforeach
                </div>
                <a href="{{ route('get_menu', $data->slug) }}"><img src="images/plan-menu-img.png" alt="" ></a>
            </div>
<div class="row">
            <div class="container-slider-nav " layout="row" ng-cloak>
                <div class="col-md-1 hidden-sm hidden-xs" >
                    <button type="button" class="plan-next control-slider prev-arrow md-whiteframe-1dp"></button>
                </div>
                <div class="col-md-10 col-xs-12">
                    <div class="row">
                        <div class="plan-slider-nav">
                            @foreach($data->hallplan as $photo)
                                <div class="sliderNavItem c-bg-center" style="background-image:url(uploaded/{{ $photo->source }});"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-1 hidden-sm hidden-xs">
                    <button type="button" class="plan-prev control-slider next-arrow md-whiteframe-1dp"></button>
                </div>
            </div>
        </div></div>
    </div>         
</div>

@stop

