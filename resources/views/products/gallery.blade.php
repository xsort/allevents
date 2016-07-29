@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass', 'products-page')

@section('centerbox')
<div class="layout-page ">
    @include('products.top-menu')
    <div class="layout-breadcrumbs">
        <div class="container-fluid">
            <div class="container-breadcrumbs">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('index') }}">{{ trans('common.mainpage') }}</a></li>
                    @if (isset($data->parents{0}))
                        <li><a href="{{ route('get_slug', $data->parents{0}->slug) }}">{{ $data->parents{0}->name }}</a></li>
                    @endif
                    <li><a href="{{ route('get_slug', $data->slug) }}">{{ $data->name }}</a></li>
                    <li><a href="{{ route('get_galleries', $data->slug) }}">{{ trans('common.photo') }}</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-lg-12 inst-description margin-b-40 text-center ">
            <div class="gallery-date"><!--25 февраля 2015 (вторник)-->{{ $gallery->created_at }}</div>
            <h2 class="inst-title text-center rowed">{{ $gallery->name }}</h2>
            <div class="col-lg-8 col-lg-offset-2 margin-t-25 text-center inst-description-text">
                {!! $gallery->description !!}
            </div>
        </div>

        <div class="photo-container">
            @foreach($gallery->photos as $photo)
            <a href="uploaded/{{ $photo->source }}" data-lightbox="image-1" title="{{ $gallery->name }}">
                <div class="gallery-item bg-img-center" style="background:url('uploaded/thumbs/{{ $photo->source }}')"></div>
            </a>
            @endforeach
        </div>


        <div class="col-xs-12 padding-b-50">
            <div class="row">
                <div class="text-center">
                    <h2 class="c-block-title font-pink rowed">{{ trans('common.else_photo') }}</h2>
                </div>
                <div class="container-fluid margin-t-30 ">
                    <div class="row">
                        <div class="container-slider-nav ">
                            <button type="button" class="other-next "></button>
                            <div class="other-category">
                                @foreach($related as $gallery)
                                <a href="{{ route('get_gallery',[$data->slug, $gallery->slug]) }}" class="item">
                                    <div class="filter"> </div>
                                    <img src="{{isset($gallery->photos{0}) ? 'uploaded/thumbs/' . $gallery->photos{0}->source : 'images/inst-menu-photo/photo.png'}}" height="300px" width="100%" alt="{{ $gallery->name }}">
                                    <span>{{ $gallery->name }}</span>
                                </a>
                                @endforeach
                            </div>
                            <button type="button" class="other-prev "></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

