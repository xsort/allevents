@extends('admin.manager.body')
@section('title',       'Главная')

@section('centerbox')
<div class="page-header">
    <h1> Главная </h1>
</div>

<div class="alert alert-success">
    <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
    Здравствуйте, {{ Auth::user()->name }}!
</div>

<div class="row main-page">
    <div class="col-xs-12">
        <h3 class="header smaller lighter green"></h3>

        <div class="row">
            @foreach($user_products as $product)
                <div class="col-md-3 col-sm-3 productsWrapper">
                    <a href="{{ URL::to('admin/products/' . $product->id . '/edit/') }}" class="instItem md-whiteframe-1dp" layout-align="center center">

                        <img src="@if(isset($product->photos[0]))uploaded/{{$product->photos[0]->source}}@else/images/nophoto.png @endif" alt="">
                        <div layout="column" layout-align="space-between stretch">
                            <h3 class="instTitle">
                                <span>{{$product->name}}</span>
                                <md-tooltip md-direction="top" md-delay="500">
                                    <div>{{$product->name}}</div>
                                </md-tooltip>
                            </h3>
                            <span class="instDescrShort">{{strip_tags($product->description_short)}}</span>
                            <md-button class="md-rised" md-ink-ripple="false">Открыть</md-button>
                        </div>
                    </a>
                </div>
            @endforeach

           {{-- <div class="col-md-3 col-sm-6 col-xs-12 center">
                                      <a href="admin/products" class="btn btn-primary btn-app radius-4">
                                          <i class="ace-icon fa fa-cube bigger-230"></i>
                                          Объекты
                                      </a>
                                  </div>
                      
                                  <div class="col-md-3 col-sm-6 col-xs-12 center">
                                      <a href="admin/news" class="btn btn-success btn-app radius-4">
                                          <i class="ace-icon fa fa-newspaper-o bigger-230"></i>
                                          Новости
                                      </a>
                                  </div>
                      
                                  <div class="col-md-3 col-sm-6 col-xs-12 center">
                                      <a href="admin/content" class="btn btn-warning btn-app radius-4">
                                          <i class="ace-icon fa fa-file-text-o bigger-230"></i>
                                          Страницы
                                      </a>
                                  </div>--}}
        </div><!-- /.row -->
        <div class="space"></div>
    </div><!-- /.col-xs-12 -->
</div>

<style>
    

/*-----------------------------NEW PRODUCTS LIST---------------------------*/

.instItem { display: block; !important; width: 100%; position: relative; background-color: white; margin-right: 15px; margin-left: 15px; padding: 35px; }

.instItem img{     /*max-width: calc(100% - 70px); max-height: calc(100% - 70px); position: absolute; top: 50%; left: 50%; transform: translate3d(-50%,-50%,0);*/ max-width: 75%; margin: auto;position: absolute;top: 0;left: 0;bottom: 0;right: 0;}

.instItem > div {  transition: all 200ms linear; -webkit-transition: all 200ms linear; position: absolute; left: 0; top: 0; display: flex; width: 100%; height: 100%; background-color: rgba(193, 222, 151, 1); opacity: 0; padding:35px;}

.instItem:hover > div { opacity: 1; }

.instItem:before { content: ""; display: block; padding-top: 100%; }

.instItem .instDescrShort { transition: all 0.35s ease; margin-bottom:10px;font-size: 12px; font-weight: normal; letter-spacing: 0.5px; line-height: 15px; color: white; }

.instItem .instTitle { transition: all 0.25s ease;   border-bottom:2px solid white; padding-bottom: 10px; margin:0; color: white; text-align: center; margin-bottom: 10px; letter-spacing: 0.5px;text-transform: uppercase; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: bold;}

.instItem button { transition: all 0.45s ease;  font-weight:bold; min-height:30px; height:30px;margin:0; color: rgba(193, 222, 151, 1); border-radius: 0; background-color: white; width: 70%; margin-left: 15%; border-radius: 20px;line-height: 1px; font-size: 12px;}

.instItem button:hover { background-color: transparent !important; color: white; border:2px solid white; }

.instItem .instTitle,.instItem .instDescrShort,.instItem button{ -webkit-transform: translate3d(0,60px,0); transform: translate3d(0,60px,0); }

.instItem:hover .instTitle,.instItem:hover .instDescrShort,.instItem:hover button { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0);   }

.productsWrapper{ padding-bottom: 15px; padding-top: 15px; }

.productsWrapper a{transition: all 200ms linear; -webkit-transition: all 200ms linear; margin-right: 0; margin-left: 0; }

/*.productsWrapper a:hover { box-shadow: 0 5px 5px -3px rgba(0,0,0,.2),0 8px 10px 1px rgba(0,0,0,.14),0 3px 14px 2px rgba(0,0,0,.12); }*/



/*-----------------------------END PRODUCTS LIST---------------------------*/

</style>

@stop

@section('indexScript')
{!! HTML::script('ace/dist/js/angular.min.js') !!}
{!! HTML::script('ace/dist/js/angular-animate.min.js') !!}
{!! HTML::script('ace/dist/js/angular-aria.min.js') !!}
{!! HTML::script('ace/dist/js/angular-messages.min.js') !!}
{!! HTML::script('ace/dist/js/angular-material.min.js') !!}

  <script type="text/javascript">    
    angular.module('managerApp', ['ngMaterial']);
  </script>
@stop

@section('indexStyle')
   {!! HTML::style('ace/dist/css/angular-material.min.css') !!}
    <style>
        body{
            background-color: transparent !important;
            height: auto;
        }

    </style>
@stop