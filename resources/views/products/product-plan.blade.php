@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">
@include('partials.product-up-menu')
<div class="layout-breadcrumbs">
    <div class="container-fluid">
        <div class="container-breadcrumbs">
            <ul class="breadcrumbs">
                <li><a href="">Главная</a></li>
                <li><a href="/kluby">Клубы</a></li>
                <li><a href="/{{$data->slug}}">{{$data->name}}</a></li>
                <li>План зала</li>
            </ul>
        </div>
    </div>
</div>

    <div class="layout-content" >
        <div class="container-fluid">
    <div class="container-slider-for">
        <div class="plan-slider-for">
            <img src="img/club-page/inst-plan.png" alt="">
            <img src="img/club-page/inst-plan-1.jpg" alt="">
            <img src="img/club-page/inst-plan-2.jpg" alt="">
            <img src="img/club-page/inst-plan-3.jpg" alt="">
            <img src="img/club-page/inst-plan-4.jpg" alt="">
        </div>
        <a href="/{{$data->slug}}/menu" class="menu-label"><img src="images/plan-menu-img.png" alt="" ></a>
    </div>
    <div class="container-slider-nav ">


        <button type="button" class="plan-next "></button>
        <div class="plan-slider-nav">
            <div class="item">
                <div class="filter"> </div>
                <img src="img/club-page/inst-plan.png" height="300px" width="100%" alt="">

            </div>
            <div class="item">
                <div class="filter"> </div>
                <img src="img/club-page/inst-plan-1.jpg" alt="">

            </div>
            <div class="item">
                <div class="filter"></div>
                <img src="img/club-page/inst-plan-2.jpg" height="300px" width="100%" alt="">

            </div>
            <div class="item">
                <div class="filter"> </div>
                <img src="img/club-page/inst-plan-3.jpg" alt="">

            </div>
            <div class="item">
                <div class="filter"></div>
                <img src="img/club-page/inst-plan-4.jpg" height="300px" width="100%" alt="">

            </div>
        </div>
        <button type="button" class="plan-prev "></button>
    </div>
    <div class="container-fluid section margin-b-40 margin-t-10">
        <div class="row text-center">
            <button type="button" class="other-plan-photo">
                Посмотреть другие фото зала
            </button>
        </div>
    </div>
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