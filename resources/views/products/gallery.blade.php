@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass', 'products-page')

@section('centerbox')
<div class="layout-page ">
    @include('products.top-menu')
    <div class="layout-breadcrumbs">
        <div class="container-fluid">
            <div class="container-breadcrumbs md-whiteframe-1dp">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('index') }}">{{ trans('common.mainpage') }}</a></li>
                    @if (isset($data->parents{0}))
                        <li><a href="{{ route('get_slug', $data->parents{0}->slug) }}">{{ $data->parents{0}->name }}</a></li>
                    @endif
                    <li><a href="{{ route('get_slug', $data->slug) }}">{{ $data->name }}</a></li>
                    <li><a href="{{ route('get_galleries', $data->slug) }}">{{ trans('common.photo') }}</a></li>
                    <li>{{ $gallery->name }}</li>
                </ul>
            </div>
        </div>
    </div>


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
        <div class="col-lg-12 galleryContainer text-center ">
            <span>{{ $gallery->created_at }}</span>

            <div class="galleryTitle"><h2 class=" rowed">{{ $gallery->name }}</h2></div>

            
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 galleryDescription">
                {!! $gallery->description !!}
            </div>
            
        </div>

        <div class="row">
            <div class="galleryPhotoWrapper" layout="row" layout-wrap layout-align="start">
                @foreach($gallery->photos as $photo)
                <div flex="20"  class="galleryPhoto" >
                    <a href="uploaded/{{ $photo->source }}" class="c-bg-center md-whiteframe-2dp" data-lightbox="image-1"  style="background-image:url('uploaded/{{ $photo->source }}')"></a>
                </div>
                @endforeach
            </div>
        </div>


        <div class="col-xs-12 ">
            <div class="row">
                <div class="text-center">
                    <div class="galleryTitle"><h2 class=" rowed">{{ trans('common.else_photo') }}</h2></div>
                </div>
                
                    <div class="row">
                        <div class="otherCategoryWrapper"  layout="row">
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                                <button type="button" class="other-next md-whiteframe-3dp prev-arrow control-slider"></button>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-12">
                                <div class="row">
                                    <div class="other-category">
                                        @foreach($related as $gallery)
                                        <a href="{{ route('get_gallery',[$data->slug, $gallery->slug]) }}" class="c-bg-center otherCategoryItem" style="background-image:url('{{isset($gallery->photos{0}) ? 'uploaded/' . $gallery->photos{0}->source : 'images/inst-menu-photo/photo.png'}}');">
                                            <div layout="row" layout-align="center center">
                                                <span>{{ $gallery->name }}</span>
                                            </div>
                                            
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                                <button type="button" class="other-prev md-whiteframe-3dp next-arrow control-slider"></button>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
</div>
</div>

@stop

