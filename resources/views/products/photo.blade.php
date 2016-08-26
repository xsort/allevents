@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">
    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.photo')]]])

    <div class="layout-content" >
        <div class="container-fluid">
            @foreach($data->visible_galleries as $gallery)
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-container">
                <div class="row">
                    <a href="{{ route('get_gallery',[$data->slug, $gallery->slug]) }}">
                        <figure class="categories-gallery-container c-bg-center" style="background-image:url({{isset($gallery->photos{0}) ? 'uploaded/' . $gallery->photos{0}->source : 'images/inst-menu-photo/photo.png'}})">

                            <figurecaption class="categories-{{rand(1,5)}}">
                               <div class="figurecaption-container">
                                    <div class="title-container text-right">
                                    <h2 class="category-gallery-title">{{ $gallery->name }}</h2>
                                    <span class="date">{{ $gallery->created_date }}</span>
                                </div>
                                <div class="count-container">
                                    <span>{{ $gallery->views }} <i class="icon-user"></i></span>
                                    <span>{{ $gallery->photos->count() }} <i class="icon-camera"></i></span>
                                </div>
                               </div>

                            </figurecaption>
                            <div class="gallery-read-more"></div>
                        </figure>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>         
</div>

@stop