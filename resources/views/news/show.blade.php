@extends('body')

@section('centerbox')

<div class="layout-page ">

    <div class="layout-breadcrumbs " itemscope itemtype="http://schema.org/ItemList">
        <div class="container-fluid">
     
                <div class="container-breadcrumbs md-whiteframe-1dp">
                    <ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <meta itemprop="itemListOrder" content="http://schema.org/ItemListOrderDescending"/>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="url">Allevents</a></li>
                        @foreach($data->types as $type)
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="{{ route($type->slug) }}" itemprop="url">{{ $type->name }}</a></li>
                        @endforeach
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">{{ str_limit($data->name, $limit = 25, $end = '...') }}</li>
                    </ol>
                </div>
    
        </div>
    </div>

    <div class="layout-content" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">

                    <div class="blogPost" itemprop="publisher" itemscope itemtype="https://schema.org/NewsArticle">

                        <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>

                        <div class="blogImg" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="">
                            <meta itemprop="url" content="http://170d3237.ngrok.io/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}">
                            <meta itemprop="width" content="800">
                            <meta itemprop="height" content="800">
                        </div>


                        <div class="blogContent">

                            <h3 itemprop="headline" class="blogTitle">{{$data->name}}</h3>
                                
                            <p class="blogDate">
                                <a href="{{ route('get_slug', $type->slug) }}"><span class="news_type">{{ $type->name }}</span></a> <span class="date">{{ date('d', strtotime($data->created_at)) }} {{ ucfirst(Date::parse($data->created_at)->format('M')) }} , {{ date('Y', strtotime($data->created_at)) }}</span>

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
                                
                            <div class="blogText" itemprop="description">{!!$data->description!!}</div>

                        </div>

                        <div class="blogShare">

                                <div class="col-sm-6 col-xs-12">
                                    <div class="row">
                                            <div class="blogShare">
                                                <h5 class="blogShareTitle">{{$trans->news_detail_share}}</h5>
                                                <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                                                <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                                                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus" data-counter=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="blogTags">
                                            <h5 class="blogTagsTitle">{{$trans->news_detail_tags}}</h5>
                                            <ul>
                                            @foreach ($data->tags as $tag)
                                                <li><a href="{{ route('get-tag', $tag->slug) }}">{{$tag->name}}</a></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                        </div>
                                    </div>

                        </div>
                    </div>

                    <h3 class="blogComment">{{$trans->news_detail_comment}}</h3>

                    <div class="fb-comments" data-href="http://localhost:8080/allevents/detail-news.php" data-width="100%" data-numposts="10"></div>

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


@section('styleNewsshowPage')

<style>
    
/*----------------------------DETAIL NEWS----------------------------------*/

.blogPost { color: rgb(91, 91, 91); }

.blogPost .blogImg { width: 100%; text-align: center;}

.blogPost .blogImg img{ max-width: 100%; }

.blogPost .blogContent { margin-top: 30px; margin-bottom: 30px; }

.blogPost .blogContent .blogTitle { text-transform: uppercase; color: #3e3e3e; font-size: 22px; margin:0px; margin-bottom: 10px; letter-spacing: 0.7px; line-height: 1.5; }

.blogPost .blogContent .blogDate { float: left; width: 100%; margin-top: 5px; margin-bottom: 15px; }

.blogPost .blogContent .blogDate > a { margin-right: 15px; padding-bottom: 3px; color: rgb(91, 91, 91)}

.blogPost .blogContent .blogDate > a:hover{ border-bottom: 1px solid }

.blogPost .blogContent .blogDate > a .news_type { text-transform: uppercase; letter-spacing: .5px;}

.blogPost .blogContent .blogText { letter-spacing: 0.5px; line-height: 24px; width: 100%;}

.blogPost .blogContent .blogText img{ max-width: 100%; height: auto !important; margin-bottom: 10px; margin-top: 10px; }

.blogPost .blogContent .blogText p{ word-wrap: break-word; }

.blogPost .blogShare { display: block; float: left; width: 100%;}

.blogComment { float: left; width: 100%; margin-bottom: 20px; margin-top: 30px; }

.blogTags .blogTagsTitle, .blogShare .blogShareTitle { margin-bottom: 20px; font-size: 15px; text-transform: uppercase; letter-spacing: 1px; display: block; width: 100%; float: left; color: #3e3e3e;}

.blogTags ul{ padding: 0; margin:0; float: left}

.blogTags ul li { float: left;list-style-type: none; margin-bottom: 10px; margin-right: 10px;}

.blogTags ul li a { border: 1px solid #e9e9e9; padding: 5px 15px; font-size: 12px; line-height: 2.8; font-weight: normal; -webkit-transition: all 0.4s ease-in-out; -moz-transition: all 0.4s ease-in-out; -o-transition: all 0.4s ease-in-out; transition: all 0.4s ease-in-out; -webkit-transition: all 0.3s ease;     color: #3e3e3e; }

.blogTags ul li a:hover { background-color: #3e3e3e; color: #ececec; }

@media(max-width: 767px){
    .blogPost .blogShare{ margin-bottom: 20px; }
    .blogPost .blogContent .blogTitle{ font-size: 20px; }
}
/*------------------------------END DETAIL NEWS----------------------------*/

</style>
@stop