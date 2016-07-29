@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page ">

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.video')]]])

<div class="layout-content" >

<div class="container-fluid">
    <div class="row">
        <div class="masonry video-page" data-columns>
            @foreach($data->visible_videos as $video)
            <div class="item" itemscope itemtype="http://schema.org/VideoObject">
                <div class=" textstyle element">
                    <iframe width="100%"  src="{{ $video->source }}" frameborder="0" allowfullscreen></iframe>
                    <link itemprop="embedUrl" href="{{ $video->source }}" />
                    <div class="video-info">
                        <div class="video-title" itemprop="name">{{ $video->name }}</div>
                        <div class="video-disc" itemprop="description">{!!  $video->description  !!}</div>
                        <div class="video-date">
                            <span class="date">{{ $video->created_at }}</span>
                            <div class="video-share">
                                <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                                <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                            </div>
                        </div>
                    </div>

                </div>
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