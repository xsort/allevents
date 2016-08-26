@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">

    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.plan')]]])

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
    <div class="container-slider-for">
        <div class="plan-slider-for">
            @foreach($data->hallplan as $photo)
                <!-- <img src="resize.php?width=1110&height=600&cropratio=1110:600&image=/uploaded/{{ $photo->source }}" alt="{{ $data->name }}"> -->
                <div class="c-bg-center" style="background-image:url(uploaded/{{ $photo->source }});"></div>
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
                <!-- <img src="resize.php?width=233&height=160&cropratio=233:160&image=/uploaded/thumbs/{{ $photo->source }}" height="300px" width="100%" alt="{{ $data->name }}"> -->
                <div class="c-bg-center" style="background-image:url(uploaded/{{ $photo->source }});height:100%;"></div>
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

