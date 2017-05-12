@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')

<div class="layout-page ">

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => $trans->product_video_breadcrumbs]]])

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
 
    <div class="row" ng-cloak>
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

@section('styleProductVideoPage')

<style>
/*------------------------------NEW VIDEO PAGE-----------------------------*/

.videoItem { margin-bottom: 35px; }

.videoItem .videoPlayer { position: relative; }

.videoItem .videoPlayer:before { display:block; content: ''; padding-top: 55%}

.videoItem .videoPlayer iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100% }

.videoItem .videoTitle {    margin-top: 20px; padding-left: 20px; padding-right: 20px; position: relative; transition: all 300ms linear; -webkit-transition: all 300ms linear; overflow: hidden; letter-spacing: 1px; line-height: 1.5;font-weight: 500; color: #3e3e3e; font-size: 20px; }

.videoItem .videoDiscription { padding: 0 20px; margin-top: 10px; }

.videoItem .videoDiscription * {      font-size: 13px !important; margin: 0; font-weight: normal; letter-spacing: 0.5px; line-height: 24px; color: #777; }

.videoItem .videoShareWrapper { padding: 0 20px; margin-top: 10px; margin-bottom: 20px;}

.videoItem .videoDate { font-size: 13px; color: #616060; }

@media  ( max-width: 991px) { 
    .videoItem .videoTitle { margin-top: 15px;  font-size:16px; padding-left: 15px; padding-right: 15px; }
    .videoItem .videoDiscription,.videoItem .videoShareWrapper { padding: 0 15px; margin-top: 5px; }
    .videoItem .videoDiscription * { font-size: 11px !important; }
    .videoItem .videoShareWrapper { margin-bottom: 15px; }
    .videoItem .videoDate { font-size: 11px; }
}

/*------------------------------END VIDEO PAGE-----------------------------*/

@media screen and (max-width:767px) {
    .masonry[data-columns]::before { content: '1 .col-xs-12'; }
}

@media screen and (min-width:768px) and (max-width:991px) {
    .masonry[data-columns]::before { content: '2 .col-xs-6'; }
}

@media screen and (min-width:992px) and (max-width:1199px) {
    .masonry[data-columns]::before { content: '2 .col-xs-6'; }
}

@media screen and (min-width:1200px) {
    .masonry[data-columns]::before { content: '2 .col-xs-6'; }
}


</style>

@stop