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


@section('styleProductPhotoPage')
<style>
/*------------------------------NEW PHOTO PAGE-----------------------------*/

.photoWrapper{ position: relative; margin-bottom: 30px; }

.photoWrapper:before { display: block; content: ''; padding-top: 70% }

.photoWrapper > a { position: absolute; display: block; top: 0; left: 15px; right: 15px; bottom: 0; overflow: hidden;}

.photoWrapper > a > div { transition: all .2s linear; position: absolute; bottom: 0; left: 0; right: 0; padding: 8px 10px;}

.photoWrapper > a > div * { z-index: 2; position: relative; color: white; margin:0; line-height: 7px;}

.photoWrapper > a > div:before {     content: ''; opacity: .8; position: absolute; top: 0; left: 0; right: 0; bottom: 0; }

.photoWrapper > a .photoCategories-1:before { background: rgb(70, 204, 154);}

.photoWrapper > a .photoCategories-3:before { background: rgb(173, 151, 0);}

.photoWrapper > a .photoCategories-2:before { background: rgb(67, 156, 251);}

.photoWrapper > a .photoCategories-4:before { background: rgb(234, 146, 70);}

.photoWrapper > a .photoCategories-5:before { background: rgb(255, 0, 3); }

.photoWrapper > a > div > div > div:first-child{ text-align: right; }

.photoWrapper > a > div > div > div:first-child *,.photoWrapper > a > div > div > div:first-child {transition: all 300ms linear; -webkit-transition: all 300ms linear; letter-spacing: 1px; line-height: 20px; font-weight: 500; font-size: 20px !important;}

.photoWrapper > a > div > div > div:first-child .photoTitle {     overflow: hidden; white-space: nowrap; text-overflow: ellipsis; }

.photoWrapper > a > div > div > div:first-child .photoDate { padding: 0; font-size: 13px !important; font-weight: normal; letter-spacing: 0.5px; line-height: 24px; }

.photoWrapper > a > div > div > div:last-child { padding-left: 15px; text-align: right; border-left: 1px solid white; font-size: 16px; margin-left: 15px; }

.photoContainer { transition: all .2s linear; -webkit-transition: .2s linear }

.photoWrapper > a:hover > div { transform: translate3d(0,100%,0); }

@media ( max-width: 1199px ) {
    .photoWrapper > a > div > div > div:first-child *, .photoWrapper > a > div > div > div:first-child { font-size: 16px !important; }
    .photoWrapper > a > div > div > div:first-child .photoDate { font-size: 11px !important }
    .photoWrapper > a > div > div > div:last-child{ font-size: 15px; }
    
}

@media ( max-width: 767px ) { 
    .photoWrapper { margin-bottom: 30px; }
    .photoWrapper:last-child { margin-bottom: 0; }
    .photoWrapper > a:hover > div { transform: translate3d(0,0,0); }
}



/*------------------------------END PHOTO PAGE-----------------------------*/



</style>
@stop