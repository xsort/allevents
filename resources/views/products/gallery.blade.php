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
<<<<<<< HEAD
                    <a href="uploaded/{{ $photo->source }}" class="c-bg-center md-whiteframe-2dp galleryPhotoImage"   style="background-image:url('uploaded/{{ $photo->source }}')">  
                    </a>
=======
                    <a href="uploaded/{{ $photo->source }}" class="c-bg-center md-whiteframe-2dp" data-lightbox="image-1"  style="background-image:url('uploaded/{{ $photo->source }}')"></a>
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
                </div>
                @endforeach
            </div>
        </div>


        <div class="col-xs-12 ">
            <div class="row">
                <div class="text-center">
<<<<<<< HEAD
                    <div class="galleryTitle"><h2 class=" rowed">{{$trans->gallery_other_galleries}}</h2></div>
=======
                    <div class="galleryTitle"><h2 class=" rowed">{{ trans('common.else_photo') }}</h2></div>
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
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

@section('styleProductGalleryPage')

<style>
    


/*----------------------------NEW GALLERY PAGE-----------------------------*/


.galleryContainer { margin-bottom: 30px; }

.galleryContainer > span { margin-bottom: 25px; display: inline-block; margin-top: 20px; font-size: 19px; letter-spacing: 0.5px; line-height: 24px; color: #777;}

.galleryTitle { display: block; margin-bottom: 25px;}

.galleryTitle * {     display: inline-block; line-height: 1.3; font-weight: 500; color: #777; font-size: 30px; margin:0; position: relative; max-width: 50%; }

.galleryPhotoWrapper { float: left; display: flex; width: 100%; margin-bottom: 60px; }

.galleryPhotoWrapper .galleryPhoto {position: relative; display: block; }

.galleryPhotoWrapper .galleryPhoto:before { content: ''; display: block; padding-top: 100%;}

.galleryPhotoWrapper .galleryPhoto a { transition: all 200ms linear; position: absolute; left: 15px; right: 15px; top: 15px; bottom: 15px; }

/*.galleryPhotoWrapper .galleryPhoto a:hover {     box-shadow: 0 3px 5px -1px rgba(0,0,0,.2),0 5px 8px 0 rgba(0,0,0,.14),0 1px 14px 0 rgba(0,0,0,.12); }*/

.galleryDescription * {     padding: 0; font-size: 14px; letter-spacing: 0.5px; line-height: 25px; color: #777; }

.galleryPhoto a:hover:before { opacity: 1; }

.galleryPhoto a:before { opacity: 0; height: 100%; width: 100%; display: block; content: ""; position: absolute; top: 0px; left: 0px; transition: all 200ms linear; background-color: rgba(19, 21, 26, .3); background-image: url(../images/news-img-hover.png);    background-position: center; background-repeat: no-repeat; }

.otherCategoryWrapper { margin-top: 30px;   }

.otherCategoryWrapper .otherCategoryItem { position: relative; margin-left: 15px; margin-right: 15px;}

.otherCategoryWrapper .otherCategoryItem:before { display: block; padding-top: 75%; content: ''; }

.otherCategoryWrapper .otherCategoryItem > div { transition: all 200ms linear; -webkit-transition: all 200ms linear; position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; box-shadow: rgba(255, 255, 255, 0.498039) 0px 0px 0px 15px inset; }

.otherCategoryWrapper .otherCategoryItem > div:before { position: absolute; top: 15px; bottom: 15px; left: 15px; right: 15px; content: ''; border: 2px solid white; }

.otherCategoryWrapper .otherCategoryItem > div > span {     line-height: 37px; text-transform: uppercase; color: white; text-align: center; font-size: 27px; letter-spacing: 0.4px; text-shadow: 1px 1px 1px rgb(91,91,91),0 0 1px rgb(91, 91, 91); }

.other-category{ margin-bottom: 0; }

.other-category:before{ content: ''; position: absolute; right: -1px; top:0; height: 100%; width: 15px; background-color: white; z-index: 2 }

.other-category:after{ content: ''; position: absolute; left: 0; top:0; height: 100%; width: 15px; background-color: white; z-index: 2 }

.other-next, .other-prev { background-size:40%; background-position: center; width: 45px; position: absolute; top: 50%; transform: translate3d(0,-50%,0); background-color: rgba(255, 255, 255, 0.9); }

.other-next { left: 15px; }

.other-prev { right: 15px; } 

.other-category .otherCategoryItem:hover > div { background: #fa6059 !important }



@media ( min-width: 992px ) and ( max-width: 1199px ){
    .otherCategoryWrapper .otherCategoryItem > div { box-shadow: rgba(255, 255, 255, 0.498039) 0px 0px 0px 10px inset; }
    .otherCategoryWrapper .otherCategoryItem > div:before { left: 10px; right: 10px; top: 10px; bottom: 10px; }
    .otherCategoryWrapper .otherCategoryItem > div > span { font-size: 21px; }
    .galleryTitle * { max-width: 40%; font-size: 26px; }
    .galleryPhotoWrapper .flex-20, .layout-row>.flex-20 { max-width: 25%;  flex: 1 1 25%; }
}

@media ( min-width: 768px ) and ( max-width: 991px) { 
    .galleryPhotoWrapper .flex-20, .layout-row>.flex-20 { max-width: 33%;  flex: 1 1 33%; }
    .galleryTitle *{ max-width: 80% }
}

@media ( max-width: 767px ) { 
    .galleryPhotoWrapper .flex-20, .layout-row>.flex-20 { max-width: 50%;  flex: 1 1 50%; }
    .galleryTitle * { max-width: 100%; }
}

@media( max-width: 991px){
    .galleryContainer > span { font-size: 17px;margin-bottom: 20px;  }
    .otherCategoryWrapper .otherCategoryItem > div { box-shadow: rgba(255, 255, 255, 0.498039) 0px 0px 0px 10px inset; }
    .otherCategoryWrapper .otherCategoryItem > div:before { left: 10px; right: 10px; top: 10px; bottom: 10px; }
    .galleryTitle * { font-size: 27px; }
    .galleryTitle { margin-bottom: 20px; }
    .galleryContainer{ margin-bottom: 25px; }
    .galleryPhotoWrapper { margin-bottom: 40px; }
    .otherCategoryWrapper { margin-top: 25px; }
}

@media ( max-width: 430px) { 
    .galleryPhotoWrapper .flex-20, .layout-row>.flex-20 { max-width: 100%;  flex: 1 1 100%; }
}
/*----------------------------END GALLERY PAGE-----------------------------*/



</style>
@stop

<<<<<<< HEAD
@section('styles')
=======
@section('linkStyleProductGalleryPage')
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
@stop

<<<<<<< HEAD
@section('scripts')
    <script src="js/lightbox.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.galleryPhotoImage').magnificPopup({type:'image',gallery: { enabled: true }});
        });
    </script>

  <script>
    $(document).ready(function(){
        $('.other-category').slick({
            slidesToShow: 3,
            slidesToScroll: 1,

            dots: false,
            centerMode: false,
            autoplay: true,
            autoplaySpeed: 3000,
            nextArrow: '.other-next',
            prevArrow: '.other-prev',
            responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,

                }
            },  {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]
        });
    });
  </script>

=======
@section('scriptProductGalleryPage')
  <script src="js/lightbox.min.js"></script>
 <script src="js/slick.min.js"></script>

  <script>
      $(document).ready(function(){
$('.other-category').slick({
    slidesToShow: 3,
    slidesToScroll: 1,

    dots: false,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 3000,
    nextArrow: '.other-next',
    prevArrow: '.other-prev',
    responsive: [{
        breakpoint: 1199,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,

        }
    },  {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 550,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});
});
  </script>
}
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
@stop