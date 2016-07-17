@extends('body')

@section('centerbox')
<div class="layout-page ">
<div class="layout-breadcrumbs itemscope itemtype="http://schema.org/ItemList">
    <div class="container-fluid">
        <div class="container-breadcrumbs">
            <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                <meta itemprop="itemListOrder" content="http://schema.org/ItemListOrderDescending"/>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="url">Главная</a></li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/news" itemprop="url">Новости</a></li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">{{ str_limit($data->name, $limit = 25, $end = '...') }}</li>
            </ol>
        </div>
    </div>
</div>

<div class="layout-content" >
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">

            <div class="blog-post single-post" itemprop="publisher" itemscope itemtype="https://schema.org/NewsArticle">
            <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                <div class="blog-wrapper no-margin no-scale">
                    <div class="blog-img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                        <img  class="img-responsive" src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="">
                        <meta itemprop="url" content="http://170d3237.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}">
                        <meta itemprop="width" content="800">
                        <meta itemprop="height" content="800">
                    </div>


                    <div class="post-content">
                        <h3 itemprop="headline" class="post-title-detail">{{$data->name}}</h3>

                        <div class="post-meta">
                            <p class="date-news">
                                <span class="date">{{ date('d F, Y ', strtotime($data->created_at)) }}</span> <span class="time">{{ date('H:i', strtotime($data->created_at)) }}</span>

                                <meta itemprop="datePublished" content="{{$data->created_at}}">

                                <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

                                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                        
                                        <meta itemprop="url" content="http://170d3237.ngrok.io/images/logo/logo-big.png">
                                        <meta itemprop="width" content="160">
                                        <meta itemprop="height" content="150">
                                    </div>

                                    <meta itemprop="name" content="Allevents.md">

                                </div>

                                                          
                                
                                <meta itemprop="dateModified" content="{{$data->created_at}}">
                                <meta itemprop="author" content="Allevents.md">             

                            </p>
                        </div>

                        <p class="post-inner-content mrg-vertical-15" itemprop="description">{!!$data->description!!}</p>

                        <div class="post-bottom">


                            <div class="col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="share ">
                                        <h5 class="share-news">Поделиться с друзьями:</h5>
                                        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                                        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-xs-12">
                                <div class="tag-news-b">
                                    <h5 class="margin-b-15 tag-news">Теги :</h5>
                                    <ul class="tag">
                                    @foreach ($tags as $tag)
                                        <li><a href="/tag/{{$tag->id}}">{{$tag->name}}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>




                    <h3 class="text-left margin-t-50 com-news">Оставте комментарий</h3>
                    <div class="fb-comments" data-href="http://localhost:8080/allevents/detail-news.php" data-width="100%" data-numposts="10"></div>
                </div>

            </div>
        </div>
        @include('partials.right-banners')
    </div>
</div>
</div>
</div>

@stop


@section('metaNewsSharing')
<!-- Open Graph data -->
<meta property="og:title" content="{{$data->name}}" />
<meta property="og:site_name" content="Allevents" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://27b6bd48.ngrok.io/news/{{$data->slug}}" />
<meta property="og:image" content="http://27b6bd48.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" />
<meta property="og:description" content="{{$data->description_short}}" />

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@nytimes">
<meta name="twitter:creator" content="@SarahMaslinNir">
<meta name="twitter:title" content="{{$data->name}}">
<meta name="twitter:description" content="{{$data->description_short}}">
<meta name="twitter:image" content="http://27b6bd48.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}">

<!-- Schema.org -->
<!-- <meta itemscope itemtype="http://schema.org/Article" />
<meta itemprop="headline" content="Top 10 Most Challenging Hikes in North America" />
<meta itemprop="name" content="Allevents.md" />
<meta itemprop="description" content="Looking for a challenging hike? We spent the
past year spanning the continent for the most grueling trails. Check out the entire
ranked list, and learn about our methodology..." />
<meta itemprop="image" content="http://i.sportyfitness.com/media/tough-trail-lrg.jpg" /> -->

@stop