@extends('body')
@section('centerbox')
<div class="layout-page ">
<<<<<<< HEAD



=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
<div class="layout-content" >

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="text-center newsListTitle">
                <h1 class="page-title rowed">{{ $category->name }}</h1>
            </div>

            @forelse ($data as $product)
<<<<<<< HEAD
            <div class="col-md-3 col-sm-4 productsWrapper">
                    <a href="{{ route('get_slug', $product->slug) }}" class="instItem md-whiteframe-1dp" layout-align="center center" ng-cloak>
                    
                    <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                    <div layout="column" layout-align="space-between stretch" >
=======
            <div class="col-md-3 col-sm-6 productsWrapper">
                    <a href="{{$product->slug}}" class="instItem md-whiteframe-1dp" layout-align="center center">
                    
                    <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                    <div layout="column" layout-align="space-between stretch">
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
                        <h3 class="instTitle">
                            <span>{{$product->name}}</span>
                            <md-tooltip md-direction="top" md-delay="500">
                                <div>{{$product->name}}</div>
                            </md-tooltip>
                        </h3>
                        <span class="instDescrShort">{{ str_limit($product->description_short, $limit = 120, $end = '...') }}</span>
<<<<<<< HEAD
                        <md-button class="md-rised" md-ink-ripple="false">{{$trans->products_object_button}}</md-button>
=======
                        <md-button class="md-rised" md-ink-ripple="false">Посмотреть</md-button>
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c
                    </div>
                </a>
            </div>

            @empty
                <p align="center">Объекты пока не добавлены в этот раздел</p>
            @endforelse
     

        </div>

        <!-- @include('partials.right-banners') -->

    </div>
</div>
</div>
</div>
@stop


@section('styleProductsPage')


<style>
    

/*-----------------------------NEW PRODUCTS LIST---------------------------*/

.instItem { display: block; !important; width: 100%; position: relative; background-color: white; margin-right: 15px; margin-left: 15px; padding: 35px; }

<<<<<<< HEAD
.instItem img{     /*max-width: calc(100% - 70px); max-height: calc(100% - 70px); position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-50%,0);*/ max-width: 75%; margin: auto;position: absolute;top: 0;left: 0;bottom: 0;right: 0;}

.instItem > div { transition: all 0.2s ease;  position: absolute; left: 0; top: 0; display: flex; width: 100%; height: 100%;  opacity: 1; padding:30px; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);}

.instItem > div:before {  background-image: url('/images/bg-filter/filter3.png');content: ''; position: absolute; left: 0; right: 0; top: 0; bottom: 0; opacity: 0;}

.instItem:hover > div { background-color: rgba(193, 222, 151, 1); }

.instItem:hover > div:before{ opacity: .2; }

.instItem:before { content: ""; display: block; padding-top: 100%; }

.instItem .instDescrShort { transition: all 0.30s ease; margin-bottom:10px;font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 15px; color: white; opacity: 0; max-height: 90px; overflow: hidden; ;}

.instItem .instTitle { transition: all 0.25s ease;   border-bottom:2px solid white; padding-bottom: 10px; margin:0; color: white; text-align: center; margin-bottom: 10px; letter-spacing: 0.5px;text-transform: uppercase; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: bold;  opacity: 0}

.instItem button { transition: all 0.35s ease;  font-weight:bold; min-height:30px; height:30px;margin:0; color: rgba(193, 222, 151, 1); border-radius: 0; background-color: white; width: 70%; margin-left: 15%; line-height: 1px; font-size: 12px; opacity: 0; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.07), 0 1px 1px 0 rgba(0, 0, 0, 0.02), 0 2px 1px -1px rgba(0, 0, 0, 0.11);}
=======
.instItem img{     max-width: calc(100% - 70px); max-height: calc(100% - 70px); position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-50%,0);}

.instItem > div {  transition: all 200ms linear; -webkit-transition: all 200ms linear; position: absolute; left: 0; top: 0; display: flex; width: 100%; height: 100%; background-color: rgba(193, 222, 151, 1); opacity: 0; padding:35px;}

.instItem:hover > div { opacity: 1; }

.instItem:before { content: ""; display: block; padding-top: 100%; }

.instItem .instDescrShort { transition: all 0.35s ease; margin-bottom:10px;font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 15px; color: white; }

.instItem .instTitle { transition: all 0.25s ease;   border-bottom:2px solid white; padding-bottom: 10px; margin:0; color: white; text-align: center; margin-bottom: 10px; letter-spacing: 0.5px;text-transform: uppercase; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: bold;}

.instItem button { transition: all 0.45s ease;  font-weight:bold; min-height:30px; height:30px;margin:0; color: rgba(193, 222, 151, 1); border-radius: 0; background-color: white; width: 70%; margin-left: 15%; border-radius: 20px;line-height: 1px; font-size: 12px;}
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c

.instItem button:hover { background-color: transparent !important; color: white; border:2px solid white; }

.instItem .instTitle,.instItem .instDescrShort,.instItem button{ -webkit-transform: translate3d(0,60px,0); transform: translate3d(0,60px,0); }

<<<<<<< HEAD
.instItem:hover .instTitle,.instItem:hover .instDescrShort,.instItem:hover button { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);  opacity: 1; }
=======
.instItem:hover .instTitle,.instItem:hover .instDescrShort,.instItem:hover button { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);   }
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c

.productsWrapper{ padding-bottom: 15px; padding-top: 15px; }

.productsWrapper a{transition: all 200ms linear; -webkit-transition: all 200ms linear; margin-right: 0; margin-left: 0; }

/*.productsWrapper a:hover { box-shadow: 0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12); }*/

<<<<<<< HEAD
@media(max-width: 1199px) and (min-width: 992px){
    .instItem > div{
        padding: 15px;
    }
    .instItem .instTitle{
        font-size: 16px;
    }
    .instItem .instDescrShort{
        font-size: 10px;
    }
    .instItem button{
        font-size: 10px;
        min-height: 20px;
        height: 25px;
    }
}

@media(max-width: 991px) and (min-width: 768px){
       .instItem > div{
        padding: 15px;
    }
    .instItem .instTitle{
        font-size: 16px;
    }
    .instItem .instDescrShort{
        font-size: 10px;
    }
    .instItem button{
        font-size: 10px;
        min-height: 20px;
        height: 25px;
    }
}


@media(max-width: 330px){
    .instItem > div{
        padding: 15px;
    }
    .instItem .instTitle{
        font-size: 16px;
    }
    .instItem .instDescrShort{
        font-size: 10px;
    }
    .instItem button{
        font-size: 10px;
        min-height: 20px;
        height: 25px;
    }
}

=======
>>>>>>> c9f24a26260b8e1d0ff1cc6fe297c9d9974efb5c


/*-----------------------------END PRODUCTS LIST---------------------------*/

</style>

@stop