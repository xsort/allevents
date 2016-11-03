@extends('body')

@section('centerbox')

<style>
    
/*----------------------------NEW ALL CATEGORIES---------------------------*/

.categoryContainer { margin-top: 40px; }

.categoryWrapper { position: relative; display: block; }

.categoryWrapper:before { content: ""; display: block; padding-top: 100%; }

.categoryWrapper > a { transition: all 200ms linear; position: absolute; top: 9px; left: 9px; right: 9px; bottom: 9px; padding: 15px 8px 5px 8px; }

.categoryWrapper > a:hover { box-shadow: 0 2px 4px -1px rgba(0,0,0,.2),0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12);}

.categoryWrapper > a > div { height: 50%; text-align: center; font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 16px; color: #777;}

.categoryWrapper > a > .categoryTitle{ margin-top: 2px; }

.categoryWrapper > a > div > img { max-height: 95%; max-width: 80%; -webkit-filter: invert(20%); filter: invert(20%); }


@media ( max-width: 406px) { 
    .categoryWrapper.flex-20 {     -webkit-flex: 1 1 100%; flex: 1 1 100%; max-width: 100%; }

    .categoryWrapper > a { padding: 15px 15px 5px 15px; top:25px; left: 25px; right: 25px; bottom: 25px; }

    .categoryWrapper > a > div {     letter-spacing: 0.7px; line-height: 20px; font-size: 14px; }
}

@media( min-width: 407px ) and (max-width: 589px) { 
    .categoryWrapper.flex-20 {     -webkit-flex: 1 1 50%; flex: 1 1 50%; max-width: 50%; }

    .categoryWrapper > a { padding: 15px 12px 5px 12px }
 }

@media (min-width:590px)  and (max-width: 767px) { 
    .categoryWrapper.flex-20 {     -webkit-flex: 1 1 33%; flex: 1 1 33%; max-width: 33%; }
}

@media (min-width: 768px) and (max-width:991px) { 
    .categoryWrapper.flex-20 {     -webkit-flex: 1 1 25%; flex: 1 1 25%; max-width: 25%; }

    .categoryWrapper > a { top: 10px; left: 10px; right: 10px; bottom: 10px }
}

@media ( max-width: 991px ) { 
    .categoryHeadTitle { margin-top: 40px; }
}

@media (min-width: 992px) and (max-width:1199px) { 
    .categoryWrapper.flex-20 {     -webkit-flex: 1 1 25%; flex: 1 1 25%; max-width: 25%; }
}


/*------------------------END NEW ALL CATEGORIES---------------------------*/
</style>

<div class="layout-page ">
    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="text-center">
                        <h1 class="page-title rowed categoryHeadTitle">Категории</h1>
                    </div>
                    <div class="categoryContainer" layout="row" layout-wrap layout-align="start stretch" >
        			@foreach ($data as $subcat)
        			    <div class="categoryWrapper" flex="20">
                            <a href="{{$subcat->slug}}" layout="column" layout-align="space-between stretch" class="md-whiteframe-1dp">
                                <div class="categoryImg" layout="row" layout-align="center center" >
                                    <img src="/uploaded/{{isset($subcat->photos{0}) ? $subcat->photos{0}->source : 'nophoto.png'}}" alt="">
                                </div>
                                <div class="categoryTitle" layout="row" layout-align="center center" >
                                    {{ $subcat->name }}
                                </div>
                            </a>
                        </div>
        			@endforeach
                    </div>
                </div>
        		@include('partials.right-banners')
            </div>
        </div>
    </div>
</div>
@stop