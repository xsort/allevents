@extends('body')
@section('centerbox')

<div class="layout-page ">



<div class="layout-content" >

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">

            <div class="text-center margin-b-50 margin-t-15">
                <h1 class="page-title rowed">Клубы</h1>
            </div>

            @foreach ($data as $product)
            <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                    <span class="logo-club">
                        <img src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}" alt="">
                    </span>
                        <h3 class="main-title"><span>{{$product->name}}</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">{{$product->description_short}}</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            @endforeach
           

           <!-- <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-krysha-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-art-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-rust-club.jpg" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
             <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-decadance-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
           <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-krysha-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-art-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-rust-club.jpg" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
             <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-decadance-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
           <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-krysha-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-art-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-rust-club.jpg" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
             <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-decadance-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
           <div class="col-md-4 col-sm-6 club-wrapper">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-krysha-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div>
            <div class="col-md-4 col-sm-6 club-wrapper ">
                    <a href="club.php" class="category">
                        <img src="img/public/logo-art-club.png" alt="">
                        <h3 class="main-title"><span>Decadance</span></h3>
                        <div class="menu-divider-title"></div>
                        <span class="menu-descripton">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum iste architecto, nam fugit quam vero eos, commodi eveniet deleniti ut iusto?</span>
                        <div class="menu-button"><span>Посмотреть</span></div>
                    </a>
            </div> -->
            
            <!-- <div class="club-items">
                <a href="layout/pages/club-page-2.php">Следущая страница</a>
            </div> -->


            <!-- <div class="col-lg-12 margin-t-30 club-pagin">
                @include('partials.pagination')
            </div> -->

        </div>

        @include('partials.right-banners')

    </div>
</div>
</div>
</div>
@stop