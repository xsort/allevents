@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">
    @include('products.top-menu')

    @include('partials.breadcrumbs', ['breadcrumbs' => [['title' => trans('common.reservation')]]])

    <div class="layout-content" >
        <div class="container-fluid">
            <div class="section">
                <div class="col-md-3">
                    <div class="row">
                        <a href="{{ route('get_menu', $data->slug) }}"><img src="images/plan-menu-img1.png" alt="" class="form-plan-label"></a>
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