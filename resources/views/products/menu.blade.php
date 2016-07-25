@extends('body')
@section('bgImage','background-image: url(../images/background/main-bg.jpg)')
@section('productClass','products-page')
@section('centerbox')
<div class="layout-page ">
@include('products.top-menu')
<div class="layout-breadcrumbs">
    <div class="container-fluid">
        <div class="container-breadcrumbs">
            <ul class="breadcrumbs">
                <li><a href="">Главная</a></li>
                <li><a href="/kluby">Клубы</a></li>
                <li><a href="/{{$data->slug}}">{{$data->name}}</a></li>
                <li>Меню</li>
            </ul>
        </div>
    </div>
</div>

    <div class="layout-content" >
<div class="container-fluid">
    <div class="row">


        <div class="menu-container">
            <div class="col-md-3  menu-left-container">
                <div class="menu-left-title">Меню нашего ресторана
                    <button type="button" class="visible-xs visible-sm menu-left-btn "><i class="fa fa-reorder "></i></button>
                </div>
                <ul class="menu-left">
                    <li class="has-sub"><a href="javascript:void(0)" class="left-a">Холодные закуски<span class="fa"></span></a>
                        <ul class="sub-menu-left">
                            <li><a href="#">Закуска "Рафаэлки"</a></li>
                            <li><a href="#">Тарталетки "Казанова"</a></li>
                            <li><a href="#">Бутерброды</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="javascript:void(0)" class="left-a">Горячие закуски<span class="fa"></span></a>
                        <ul class="sub-menu-left">
                            <li><a href="#" >Закуска "Рафаэлки"</a></li>
                            <li><a href="#" class="active">Тарталетки "Казанова"</a></li>
                            <li><a href="#">Бутерброды </a></li>
                        </ul>
                    </li>
                    <li><a href="#">Супы</a></li>
                    <li><a href="#">Блюда из рыбы</a></li>
                    <li><a href="#">Морепродукты</a></li>
                    <li><a href="javascript:void(0)">Блюда из мяса и птицы</a></li>
                    <li><a href="javascript:void(0)">Сыры и десерты</a></li>
                    <li><a href="javascript:void(0)">Кофе и чай</a></li>
                    <li><a href="javascript:void(0)">Безалкогольные напитки</a></li>
                    <li><a href="javascript:void(0)">Ночь и завтрак</a></li>
                    <li class="has-sub"><a href="javascript:void(0)">Блюда на заказ<span class="fa"></span></a>
                     <ul class="sub-menu-left">
                            <li><a href="#">Закуска "Рафаэлки"</a></li>
                            <li><a href="#">Тарталетки "Казанова"</a></li>
                            <li><a href="#">Бутерброды на праздничный стол</a></li>
                        </ul></li>
                    <li><a href="javascript:void(0)">Обеденная формула</a></li>
                    <li><a href="javascript:void(0)">Закуски и блюда дня</a></li>
                    <li><a href="javascript:void(0)">Вино и бар</a></li>
                    <li><a href="javascript:void(0)">Табак</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-1">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>

                    </figure>
                </a>
                <div class="menu-order">
                    <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                    <div class="pull-right">
                        <a href="javascript:void(0)" class="low"><span>-</span></a>
                        <input class="menu-input" type="text" value="1">
                        <a href="javascript:void(0)" class="hight"><span>+</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-2">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-3">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-1">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-5">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-3">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>

                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-4">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-2">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>

                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-4">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-3">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-1">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-5">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <a href="javascript:void(0)" class="low"><span>-</span></a>
                        <input class="menu-input" type="text" value="1">
                        <a href="javascript:void(0)" class="hight"><span>+</span></a>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-3">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>

                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-4">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <figure class="menu-item menu-item-2">
                    <a href="javascript:void(0)" class="menu-toggle">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                </figure>

                <div class="menu-order">
                    <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                    <div class="pull-right">
                        <a href="javascript:void(0)" class="low"><span>-</span></a>
                        <input class="menu-input" type="text" value="1">
                        <a href="javascript:void(0)" class="hight"><span>+</span></a>
                    </div>
                </div>
                </figure>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="javascript:void(0)" class="menu-toggle">
                    <figure class="menu-item menu-item-4">
                        <img src="http://salat-s-foto.ru/wp-content/uploads/2016/01/%D0%A1%D0%B0%D0%BB%D0%B0%D1%82-%D0%A6%D0%B5%D0%B7%D0%B0%D1%80%D1%8C-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9.jpg" height="180px;" width="100%" alt="">
                        <div class="price-white"></div>
                        <div class="price-red"></div>
                        <div class="price-price">
                            <span>480</span>
                            <span>лей</span>
                        </div>
                        <figurecaption class="menu">

                            <div class="menu-title">Lorem ipsum dolor sit amet.</div>
                            <div class="menu-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error facere non repellat, perspiciatis repellendus dolor eum nisi cum.</div>
                        </figurecaption>
                    </figure>
                    <div class="menu-order">
                        <a href="javascript:void(0)" class="order"><span>Добавить в корзину</span></a>
                        <div class="pull-right">
                            <a href="javascript:void(0)" class="low"><span>-</span></a>
                            <input class="menu-input" type="text" value="1">
                            <a href="javascript:void(0)" class="hight"><span>+</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="menu-items ">
                <a href="layout/pages/menu-page-2.php">Следущая страница</a>
            </div>

            <div class="col-lg-12 margin-t-30 club-pagin">
               
            </div>
        </div>
        <!--
        <div class="pagination-container text-center pagination-container text-center margin-b-30">
            <ul class="pagination-list">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true"><span class="fa fa-angle-left"></span></span>
                    </a>
                </li>

                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>

                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true"><span class="fa fa-angle-right"></span></span>
                    </a>
                </li>
            </ul>
        </div>
-->
    </div>
</div>
    </div>         
</div>

@stop