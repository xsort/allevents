

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

@section('styleSearchPage')

<style>
    
 
/*----------------------SEARCH-------------------------------*/

.nav-tabs>li.active>a,
.nav-tabs>li.active>a:hover,
.nav-tabs>li.active>a:focus {
    color: #e3605b;
    border-color: #ddd;
    border: 1px solid transparent;
    border-bottom-color: #ddd;
}

.badge-count {
    color: #333;
    margin-left: 5px;
}

.nav-tabs>li>a:hover {
    border-color: transparent;
    border-bottom-color: #ddd;
}

.nav>li>a:hover,
.nav>li>a:focus {
    text-decoration: none;
    background-color: transparent;
}

#search_panel>li>a {
    padding: 10px 10px;
    color: rgb(91, 91, 91);
    margin-right: 20px;
    text-transform: uppercase;
    font-size: 13px;
}

#search_panel>li>a {
    padding-left: 0;
    padding-right: 0;
}

.tab-content>.tab-pane {
    margin-top: 30px;
}

.search-item {
    margin-bottom: 30px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
}

.search-item .search-item-image {
    float: left;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    display: block;
}

.search-item .search-item-image a {
    width: 133px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
    height: 100%;
    min-height: 133px;
}

.search-item .search-item-image img {
    height: auto;
    display: block;
    max-height: 100%;
    max-width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    overflow: auto;
    margin: auto;
}

.search-item.search-item-news .search-item-image a,
.search-item.search-item-report .search-item-image a {
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.search-item.search-item-news .search-item-image a img,
.search-item.search-item-report .search-item-image a img {
    display: none;
}

.search-item .search-item-desc {
    padding-left: 20px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    /* display: table-cell; */
    /* width: 80%; */
    display: block;
    position: relative;
    width: 100%;
}

.search-item .search-item-desc > * {
    float: left;
}

.search-item .search-item-desc .item-title,
.item-title.item-title-mobile {
    font-size: 18px;
    text-transform: uppercase;
    color: #e3605b;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
    width: 100%;
    padding-bottom: 4px;
}

.search-item .search-item-desc .item-read-more {
}

.search-item .search-item-desc .item-title:hover {
    color: #b5605b;
}

.search-item .search-item-desc .item-cat {
    width: 100%;
    text-transform: uppercase;
    font-size: 11px;
}

.search-item .search-item-desc .item-cat a {
    color: #333;
    -webkit-transition: all 0.1s ease;
    -moz-transition: all 0.1s ease;
    -o-transition: all 0.1s ease;
    transition: all 0.1s ease;
    margin-right: 4px;
    margin-left: 4px;
}

.search-item .search-item-desc .item-cat a:first-child {
    margin-left: 0;
    letter-spacing: 0.2px;
}

.search-item .search-item-desc .item-cat a:hover {
    color: black;
}

.search-item .search-item-desc .item-title a:hover {
    color: #b5605b;
}

.search-item .search-item-desc .item-descs {
    width: 100%;
    text-transform: uppercase;
    font-size: 13px;
    margin-top: 15px;
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    table-layout: fixed;
    margin-top: 15px;
    border-collapse: collapse;
    border-spacing: 0;
    border: 0;
}

.search-item .search-item-desc .item-descs td {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
}

.search-item.search-item-news .search-item-desc .item-descs,
.search-item.search-item-report .search-item-desc .item-descs {
    white-space: normal;
    overflow: auto;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
}

.search-item.search-item-news .search-item-desc .item-descs td,
.search-item.search-item-report .search-item-desc .item-descs td {
    white-space: normal;
}

.search-item.search-item-news .search-item-desc .item-descs td span {
    height: 40px;
    display: block;
    position: relative;
}

.search-item .search-item-desc .item-contact {
    text-transform: uppercase;
    font-size: 13px;
    width: 100%;
    margin-top: 15px;
}

.search-item .search-item-desc .item-contact div {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 5px;
}

.search-item .search-item-desc .item-contact div:first-child {
    margin-top: 0;
}

.search-item .search-item-desc .item-contact div i {
    margin-right: 7px;
}

.search-item .search-item-desc .item-contact .item-inst a {
    color: #333;
}

.search-item .search-item-desc .item-contact .item-phone {
    color: #e26c6c;
}

.search-item .search-item-desc .item-contact .item-phone i {
    color: black;
}

.search-item .search-item-desc .item-contact .item-phone a {
    color: #e26c6c;
    margin-left: 14px;
    position: relative;
}

.search-item .search-item-desc .item-contact .item-phone a:after {
    content: '/';
    position: absolute;
    right: -11px;
    cursor: default;
    pointer-events: none;
}

.search-item .search-item-desc .item-contact .item-phone a:first-child {
    margin-left: 0px;
}

.search-item .search-item-desc .item-contact .item-phone a:last-child {
    margin-right: 0px;
}

.search-item .search-item-desc .item-contact .item-phone a:last-child:after {
    content: '';
}

.s-result {
    text-transform: uppercase;
    font-size: 20px;
    margin-bottom: 20px;
    float: left;
    width: 100%;
    margin-top: 10px;
}

.tooltip-inner {
    max-width: 320px;
    width: 320px;
}

.search-item .item-title.item-title-mobile {
    display: none;
    margin-bottom: 15px;
    text-align: center;
}

@media(max-width: 600px) {
    .search-item {
        display: block;
        float: left;
        width: 100%;
        border-bottom: 1px dashed #333;
        padding-bottom: 30px;
    }

    .search-item:last-child {
        border-bottom: none;
    }

    .search-item .search-item-image {
        width: 100%;
    }

    .search-item .search-item-image a {
        width: 100%;
        height: auto;
    }

    .search-item .search-item-image img {
        height: auto;
        max-width: 100%;
        position: relative;
        max-height: 300px;
    }

    .search-item .search-item-desc {
        float: left;
        padding-left: 0;
        margin-top: 20px;
    }

    .search-item .item-title.item-title-mobile {
        display: block;
    }
a
    .search-item .item-title.item-title-desktop {
        display: none;
    }

    .search-item .search-item-desc .item-descs td {
        white-space: normal;
    }

    .search-item .search-item-desc .item-contact .item-phone {
        margin-top: 8px;
    }

    .search-item.search-item-news .search-item-image a,
    .search-item.search-item-report .search-item-image a {
        background-image: none !important;
    }

    .search-item.search-item-news .search-item-image a img,
    .search-item.search-item-report .search-item-image a img {
        display: block;
    }
}
</style>

@stop