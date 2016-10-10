@extends('body')

@section('centerbox')
<div class="layout-page ">
    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="text-center">
                        <h1 class="page-title rowed categoryHeadTitle">Категории</h1>
                    </div>
                    <div class="categoryContainer" layout="row" layout-wrap layout-align="start stretch" >
                    @foreach ($data->children as $subcat)
                        <div class="categoryWrapper" flex="20">
                            <a href="{{$subcat->slug}}" layout="column" layout-align="space-between stretch" class="md-whiteframe-2dp">
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