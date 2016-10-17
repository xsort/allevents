@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">
    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.photo')]]])

    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                @foreach($data->visible_galleries as $gallery)
                    <div class="col-md-4 col-sm-6 col-xs-12 photoWrapper">

                        <a href="{{ route('get_gallery',[$data->slug, $gallery->slug]) }}" class="md-whiteframe-5dp c-bg-center photoContainer" style="background-image:url({{isset($gallery->photos{0}) ? 'uploaded/' . $gallery->photos{0}->source : 'images/inst-menu-photo/photo.png'}})">

                            <md-tooltip md-direction="bottom" md-delay="200" class="hidden-xs">
                                      {{ $gallery->name }}
                            </md-tooltip>

                            <div class="photoCategories-{{rand(1,5)}}">

                                <div layout="row" layout-align="end stretch" flex="100">
                                    
                                    <div layout="column" layout-align="space-around stretch" flex>
                                        <h2 class="photoTitle">{{ $gallery->name }}</h2>
                                        <span class="photoDate">{{ $gallery->created_at }}</span>
                                    </div>

                                    <div layout="column" layout-align="space-around stretch" >
                                        <div><span>{{ $gallery->views }}</span> <i class="icon-user"></i></div>
                                        <div><span>{{ $gallery->photos->count() }}</span> <i class="icon-camera"></i></div>    
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>         
</div>

@stop