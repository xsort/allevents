@extends('body')
@section('meta_description', $data->meta->meta_description)
@section('centerbox')
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
                        <img src="/uploaded/thumbs/{{isset($subcat->photos{0}) ? $subcat->photos{0}->source : 'nophoto.png'}}" alt="">
                    </div>
                    <div class="category-title">
                        {{ $subcat->name }}
                        @if (isset($subcat->photos{0}))
                         {{$subcat->photos{0}->source }} 
                        @endif
                    </div>
                </a>
			@endforeach
            </div>
        </div>
		@include('partials.right-banners')
    </div>
</div>
@stop