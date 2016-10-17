@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page ">

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.video')]]])

<div class="layout-content">

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

<div class="container-fluid" >

    <div class="row">
        <div class="masonry videoPage" data-columns>
            @foreach($data->visible_videos as $video)
            <div class="videoItem md-whiteframe-1dp" layout-align="stretch" layout="column" itemscope itemtype="http://schema.org/VideoObject">
                <div class="videoPlayer">
                    <iframe src="{{ $video->source }}" frameborder="0" allowfullscreen></iframe>
                </div>

                <span class="videoTitle" itemprop="name">{{ $video->name }}</span>

                <span class="videoDiscription" itemprop="description">{!!  $video->description  !!}</span>

                <div class="videoShareWrapper" layout="row" layout-align="space-between center" >
                    <span class="videoDate">{{ $video->created_at }}</span>
                    <div class="videoShare">
                        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                    </div>
                </div>

                <link itemprop="embedUrl" href="{{ $video->source }}" />
                <meta itemprop="uploadDate" content="{{$data->created_at}}">
                <meta itemprop="thumbnailUrl" content="https://www.example.com/thumbnail1.jpg">
            </div>
            @endforeach
        </div>
    </div>
</div>


    </div>         
</div>
@stop