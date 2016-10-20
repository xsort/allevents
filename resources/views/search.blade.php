@extends('body')
@section('centerbox')

<div class="layout-page ">
    <div class="layout-content" >
        <div class="container-fluid">
            <div class="col-md-9">
                <span class="s-result">Поиск по запросу "{{ $searchword }}"</span>
                <div class="container-fluid">

                                    <div class="row">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs" id="search_panel">

                                                <li class="active">
                                                    <a data-toggle="tab" href="#main_s">
                                                        Все результаты <span class="badge-count">{{ $num_results }}</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#news_s">
                                                        Новости <span class="badge-count">{{ count($data['news']) }}</span>
                                                    </a>
                                                </li>


                                                <li>
                                                    <a data-toggle="tab" href="#report_s">
                                                        Отчеты <span class="badge-count">{{ count($data['reports']) }}</span>
                                                    </a> 
                                                </li>    

                                                <li>
                                                    <a data-toggle="tab" href="#board_s">
                                                        Афиша <span class="badge-count">{{ count($data['posters']) }}</span>
                                                    </a>
                                                </li>  

                                                <li>
                                                    <a data-toggle="tab" href="#inst_s">
                                                        Заведения <span class="badge-count">{{ count($data['products']) }}</span>
                                                    </a>
                                                </li>  
                                            </ul>

                                            <div class="tab-content">

                                                <div id="main_s" class="tab-pane fade in active">
                                                    @foreach($data as $key => $value)
                                                        @foreach($value as $v)
                                                            @include('partials.search_result', ['type' => $key, 'data' => $v])
                                                        @endforeach
                                                    @endforeach

                                                    <!--
                                                    <div class="search-item search-item-news">
                                                            
                                                            <a href="javascript:void(0)" class="item-title item-title-mobile">Ночной клуб «Drive» - в центре Кишинева!</a>
                                                            
                                                            <div class="search-item-image">
                                                                    <a href="javascript:void(0)" style="background-image:url('http://b.vimeocdn.com/ps/270/688/2706882_300.jpg');">
                                                                        <img src="http://b.vimeocdn.com/ps/270/688/2706882_300.jpg" alt="">
                                                                    </a>
                                                            </div>

                                                            <div class="search-item-desc">
                                                                <a href="javascript:void(0)" class="item-title item-title-desktop">Ночной клуб «Drive» - в центре Кишинева!</a>
                                                                <div class="item-cat">
                                                                    <a href="javascipt:void(0)">Новости</a> / 
                                                                    <a href="javascipt:void(0)">Drive Club</a>
                                                                </div>
                                                                
                                                                <table class="item-descs">
                                                                    <tr>
                                                                        <td>
                                                                            <span data-toggle="tooltip" data-placement="bottom" title="">
                                                                                ... Ну вот и закончился очередной яркий и сумасшедший сезон в <b>Drive Club</b> ! Спасибо тем,кто танцевал,пел,веселился и праздновал вместе с нами!Спасибо тем,кто работал ...
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>  

                                                                <div class="item-contact">
                                                                    <div class="item-date">
                                                                        <span>
                                                                            <i class="icon-calendar"></i> 
                                                                        </span>
                                                                        <span>
                                                                            30 июля 2016
                                                                        </span>
                                                                    </div>
                                                                    <div class="item-inst">
                                                                        <span>
                                                                            <i class="icon-home"></i> 
                                                                        </span>
                                                                        <span>
                                                                            <a href="">Drive Club</a>
                                                                        </span>
                                                                    </div>
                                                                </div> 
                                                                
                                                            </div>
                                                    </div>

                                                    <div class="search-item search-item-poster">
                                                            
                                                            <a href="javascript:void(0)" class="item-title item-title-mobile">BMW Power Club Moldova - 6 Ani</a>
                                                            
                                                            <div class="search-item-image">
                                                                    <a href="javascript:void(0)"><img src="https://i.simpalsmedia.com/afisha.md/cover/175x230/e9cfba79402b9173444115f6ff9c995c.png" alt=""></a>
                                                            </div>

                                                            <div class="search-item-desc">
                                                                <a href="javascript:void(0)" class="item-title item-title-desktop">BMW Power Club Moldova - 6 Ani</a>
                                                                <div class="item-cat">
                                                                    <a href="javascipt:void(0)">Афиша</a> / 
                                                                    <a href="javascipt:void(0)">Фестивали</a>
                                                                </div>
                                                                
                                                                <table class="item-descs">
                                                                    <tr>
                                                                        <td>
                                                                            <span data-toggle="tooltip" data-placement="bottom" title="">
                                                                                BMW Power Club Moldova, 6 Ani Fest
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                </table>

                                                                <div class="item-contact">
                                                                    <div class="item-date">
                                                                        <span>
                                                                            <i class="icon-calendar"></i> 
                                                                        </span>
                                                                        <span>
                                                                            30 июля 2016
                                                                        </span>
                                                                    </div>
                                                                    <div class="item-adres">
                                                                        <span>
                                                                            <i class="icon-location-pin"></i>
                                                                        </span> 
                                                                        <span>
                                                                            Goa Territory Chișinău, Vatra, Ghidighici 
                                                                        </span>
                                                                    </div>

                                                                    <div class="item-phone">
                                                                        <span>
                                                                            <i class="icon-phone"></i> 
                                                                        </span>
                                                                        <span>
                                                                            <a href="tel:+37398376487">(+373) 22 243 232</a>
                                                                        </span>
                                                                    </div>
                                                                </div>                                                            
                                                                
                                                            </div>
                                                    </div>

                                                    <div class="search-item search-item-inst">
                                                            
                                                            <a href="javascript:void(0)" class="item-title item-title-mobile">Drive Club</a>
                                                            
                                                            <div class="search-item-image">
                                                                    <a href="javascript:void(0)"><img src="uploaded/drive_69.jpg" alt=""></a>
                                                            </div>

                                                            <div class="search-item-desc">
                                                                <a href="javascript:void(0)" class="item-title item-title-desktop">Drive Club</a>
                                                                <div class="item-cat">
                                                                    <a href="javascipt:void(0)">Клубы</a> / 
                                                                    <a href="javascipt:void(0)">Выпускной</a> / 
                                                                    <a href="javascipt:void(0)">Свадьбы</a> 
                                                                </div>
                                                                
                                                                <table class="item-descs">
                                                                    <tr>
                                                                        <td><span data-toggle="tooltip" data-placement="bottom" title="Andy's Pizza - самый вкусный заказ еды онлайн! Быстрая доставка днем и ночью!">Andy's Pizza - самый вкусный заказ еды онлайн! Быстрая доставка днем и ночью!</span></td>
                                                                    </tr>
                                                                </table>

                                                                <div class="item-contact">
                                                                    <div class="item-adres">
                                                                        <span>
                                                                            <i class="icon-location-pin"></i>
                                                                        </span> 
                                                                        <span>
                                                                            Chișinău, bd. Grigore Vieru, 17/1 
                                                                        </span>
                                                                    </div>

                                                                    <div class="item-phone">
                                                                        <span>
                                                                            <i class="icon-phone"></i> 
                                                                        </span>
                                                                        <span>
                                                                            <a href="tel:+37398376487">(+373) 22 243 232</a>
                                                                            <a href="tel:+37398376487">(+373) 22 243 232</a> 
                                                                        </span>
                                                                    </div>
                                                                </div>                                                            
                                                                
                                                            </div>
                                                    </div>
                                                    -->

                                                </div>

                                                <div id="news_s" class="tab-pane fade">
                                                    @foreach($data['news'] as $news)
                                                        @include('partials.search_result', ['type' => 'news', 'data' => $news])
                                                    @endforeach
                                                </div>

                                                <div id="report_s" class="tab-pane fade">
                                                    @foreach($data['reports'] as $news)
                                                        @include('partials.search_result', ['type' => 'reports', 'data' => $news])
                                                    @endforeach
                                                </div>

                                                <div id="board_s" class="tab-pane fade">
                                                    @foreach($data['posters'] as $news)
                                                        @include('partials.search_result', ['type' => 'posters', 'data' => $news])
                                                    @endforeach
                                                </div>

                                                <div id="inst_s" class="tab-pane fade">
                                                    @foreach($data['products'] as $news)
                                                        @include('partials.search_result', ['type' => 'products', 'data' => $news])
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                </div>
            </div>
            @include('partials.right-banners')
        </div>
    </div>
</div>
@stop

