@extends('body')

@section('centerbox')
<div class="layout-page ">
<div class="layout-content" >
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <div class="text-center">
                <h1 class="page-title rowed">Категории</h1>
            </div>
            <div class="category-container">
			@foreach ($data->children as $subcat)
			    <a href="{{$subcat->slug}}" class="category-section">
                    <div class="category-img">
                        <img src="/uploaded/{{isset($subcat->photos{0}) ? $subcat->photos{0}->source : 'nophoto.png'}}" alt="">
                    </div>
                    <div class="category-title">
                        {{ $subcat->name }}
                    </div>
                </a>
			@endforeach
            </div>
        </div>
		@include('partials.right-banners')
    </div>
</div>
</div>
</div>
@stop