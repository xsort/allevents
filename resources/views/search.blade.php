@extends('body')
@section('centerbox')

<div class="layout-page ">
    <div class="layout-content" >
        <div class="container-fluid">
            <div class="col-md-12">
             <div class="col-lg-12 inst-description margin-t-50 text-center">
                <h2 class="inst-title inst-title-search text-center rowed">Новости</h2>
            </div>

            <div class="col-lg-12 inst-description margin-t-50 text-center">
                <h2 class="inst-title inst-title-search text-center rowed">Афиша</h2>
            </div>
            
            <div class="col-lg-12 inst-description margin-t-50 text-center margin-b-50">
                <h2 class="inst-title inst-title-search text-center rowed">Заведения</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 club-wrapper">
                    <a href="" class="category">
                    <span class="logo-club">
                        <img src="http://laravel.local/uploaded/mojito-terasarestaurant_61.png" alt="">
                    </span>
                        <h3 class="main-title"><span>Mojito</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">cssdasdasdasdasd</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 club-wrapper">
                    <a href="" class="category">
                    <span class="logo-club">
                        <img src="http://laravel.local/uploaded/mojito-terasarestaurant_61.png" alt="">
                    </span>
                        <h3 class="main-title"><span>Mojito</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">cssdasdasdasdasd</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 club-wrapper">
                    <a href="" class="category">
                    <span class="logo-club">
                        <img src="http://laravel.local/uploaded/mojito-terasarestaurant_61.png" alt="">
                    </span>
                        <h3 class="main-title"><span>Mojito</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">cssdasdasdasdasd</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 club-wrapper">
                    <a href="" class="category">
                    <span class="logo-club">
                        <img src="http://laravel.local/uploaded/mojito-terasarestaurant_61.png" alt="">
                    </span>
                        <h3 class="main-title"><span>Mojito</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">cssdasdasdasdasd</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 inst-description margin-t-50 text-center margin-b-50">
                <h2 class="inst-title inst-title-search text-center rowed">Отчеты</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                            <div class="news-slider">

            <div id="report-slider">

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="report-next prev-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

                <div class="col-lg-10 col-md-10 col-xs-12" id="report">


                    <!-- @foreach ($tags as $tag)
                    <a href="{{$tag->slug}}" class="item">
                        <div class="filter"></div>
                        <img src="uploaded/thumbs/{{isset($category->photos{0}) ? $category->photos{0}->source : 'nophoto.png'}}" alt="">
                        <span>{{$tag->name}}</span>
                    </a>
                    @endforeach -->
                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/concert.png" alt="">
                        <span>Концерты</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/sport.png" alt="">
                        <span>Спорт</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/theatre.png" alt="">
                        <span>Театры</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/cinema.jpg" alt="">
                        <span>Кинотеатры</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/sport.png" alt="">
                        <span>Развлечения</span>
                    </a>

                    <a href="javascript:void(0)" class="item">
                        <div class="filter"></div>
                        <img src="images/reports-notice/festival.jpg" alt="">
                        <span>Фестивали и выставки</span>
                    </a>
                    
                </div>

                <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                    <div class="row">
                        <button type="button" class="report-prev next-arrow control-slider hidden-xs"></button>
                    </div>
                </div>

            </div>
        </div>
                </div>
            </div>

            <div class="col-lg-12 inst-description margin-t-50 text-center">
                <h2 class="inst-title inst-title-search text-center rowed">Акции</h2>
            </div>

            </div>
            <!-- @include('partials.right-banners') -->
        </div>
    </div>
</div>
@stop

