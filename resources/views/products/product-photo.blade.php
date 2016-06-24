@extends('body')
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
                <li>Фото</li>
            </ul>
        </div>
    </div>
</div>
    <div class="layout-content" >
        <div class="container-fluid">
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-container">
                <div class="row">
                    <a href="gallery.php">
                        <figure class="categories-gallery-container">
                            <img src="images/inst-menu-photo/photo.png" width="100%" alt="">
                            
                            <figurecaption class="categories-1">
                               <div class="figurecaption-container">
                                    <div class="title-container text-right">
                                    <h2 class="category-gallery-title">Вечеринка на пляже</h2>
                                    <span class="date">12/04/16</span>
                                </div>
                                <div class="count-container">
                                    <span>22 <i class="icon-user"></i></span>
                                    <span>77 <i class="icon-camera"></i></span>
                                </div>
                               </div>
                               
                                
                            </figurecaption>
                            <div class="gallery-read-more"></div>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-container">
                <div class="row">
                    <a href="gallery.php">
                        <figure class="categories-gallery-container">
                            <img src="images/inst-menu-photo/video.png" width="100%" alt="">
                            <figurecaption class="categories-2">
                                 <div class="figurecaption-container">
                                <div class="title-container text-right">
                                    <h2 class="category-gallery-title">Вечеринка на пляже</h2>
                                    <span class="date">12/04/16</span>
                                </div>
                                <div class="count-container">
                                    <span>22 <i class="icon-user"></i></span>
                                    <span>77 <i class="icon-camera"></i></span>
                                     </div></div>

                            </figurecaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-container">
                <div class="row">
                    <a href="gallery.php">
                        <figure class="categories-gallery-container">
                            <img src="images/inst-menu-photo/plan.png" width="100%" alt="">
                            <figurecaption class="categories-3">
                                 <div class="figurecaption-container">
                                <div class="title-container text-right">
                                    <h2 class="category-gallery-title">Вечеринка на пляже</h2>
                                    <span class="date">12/04/16</span>
                                </div>
                                <div class="count-container">
                                    <span>22 <i class="icon-user"></i></span>
                                    <span>77 <i class="icon-camera"></i></span>
                                     </div></div>

                            </figurecaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-container">
                <div class="row">
                    <a href="gallery.php">
                        <figure class="categories-gallery-container">
                            <img src="images/inst-menu-photo/menu.png" width="100%" alt="">
                            <figurecaption class="categories-4">
                                 <div class="figurecaption-container">
                                <div class="title-container text-right">
                                    <h2 class="category-gallery-title">Вечеринка на пляже</h2>
                                    <span class="date">12/04/16</span>
                                </div>
                                <div class="count-container">
                                    <span>22 <i class="icon-user"></i></span>
                                    <span>77 <i class="icon-camera"></i></span>
                                     </div></div>

                            </figurecaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-container">
                <div class="row">
                    <a href="gallery.php">
                        <figure class="categories-gallery-container">
                            <img src="images/inst-menu-photo/actii.png" width="100%" alt="">
                            <figurecaption class="categories-5">
                                 <div class="figurecaption-container">
                                <div class="title-container text-right">
                                    <h2 class="category-gallery-title">Вечеринка на пляже</h2>
                                    <span class="date">12/04/16</span>
                                </div>
                                <div class="count-container">
                                    <span>22 <i class="icon-user"></i></span>
                                    <span>77 <i class="icon-camera"></i></span>
                                     </div></div>

                            </figurecaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 gallery-container">
                <div class="row">
                    <a href="gallery.php">
                        <figure class="categories-gallery-container">
                            <img src="images/inst-menu-photo/interier.png" width="100%" alt="">
                            <figurecaption class="categories-2">
                                 <div class="figurecaption-container">
                                <div class="title-container text-right">
                                    <h2 class="category-gallery-title">Вечеринка на пляже</h2>
                                    <span class="date">12/04/16</span>
                                </div>
                                <div class="count-container">
                                    <span>22 <i class="icon-user"></i></span>
                                    <span>77 <i class="icon-camera"></i></span>
                                     </div></div>

                            </figurecaption>
                        </figure>
                    </a>
                </div>
            </div>

        </div>
    </div>         
</div>

@stop