@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.plan')]]])

    <div class="layout-content" >
        <div class="container-fluid">
    <div class="container-slider-for">
        <div class="plan-slider-for">
            @foreach($data->hallplan as $photo)
                <img src="uploaded/{{ $photo->source }}" alt="{{ $data->name }}">
            @endforeach
        </div>
        <a href="{{ route('get_menu', $data->slug) }}" class="menu-label"><img src="images/plan-menu-img.png" alt="" ></a>
    </div>
    <div class="container-slider-nav ">


        <button type="button" class="plan-next "></button>
        <div class="plan-slider-nav">
            @foreach($data->hallplan as $photo)
            <div class="item">
                <div class="filter"> </div>
                <img src="uploaded/thumbs/{{ $photo->source }}" height="300px" width="100%" alt="{{ $data->name }}">
            </div>
            @endforeach
        </div>
        <button type="button" class="plan-prev "></button>
    </div>
    <!--
    <div class="container-fluid section margin-b-40 margin-t-10">
        <div class="row text-center">
            <button type="button" class="other-plan-photo">
                Посмотреть другие фото зала
            </button>
        </div>
    </div>
    -->
    <div class="separator-light"></div>
    
    <div class="section margin-t-80">
        <div class="col-md-3">
            <div class="row">
                <img src="images/plan-menu-img1.png" alt="" class="form-plan-label">
            </div>
        </div>

        <div class="col-md-8 col-md-offset-1">
            <div class="row">
                <div class="plan-input">
                   <form action="">
                    <input type="text" placeholder="Ваше имя" required>
                    <input type="text"  placeholder="Ваш телефон" required>

                    <textarea name="" id="" placeholder="Пример: Хочу зарезервировать стол №1 на 01.01.2017. Нас будет 6 персон "></textarea>

                    <button type="submit" class="enter ">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>         
</div>

@stop