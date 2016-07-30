<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ URL::to('/') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Админ панель - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    {!! HTML::style('ace/dist/css/bootstrap.min.css') !!}
    {!! HTML::style('ace/dist/css/font-awesome.min.css') !!}

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,cyrillic-ext') !!}
    {!! HTML::style('ace/dist/css/ace-fonts.min.css') !!}

    <!-- ace styles -->
    {!! HTML::style('ace/dist/css/ace.min.css', ['class'=>'ace-main-stylesheet', 'id'=>'main-ace-style']) !!}
    {!! HTML::style('ace/dist/css/ace-skins.min.css', ['class'=>'ace-main-stylesheet', 'id'=>'main-ace-style']) !!}

    <!-- custom styles -->
    {!! HTML::style('ace/assets/css/xsort.css') !!}

    {!! HTML::style('ace/assets/css/toastr.min.css') !!}
    {!! HTML::style('ace/assets/js/fancybox2/jquery.fancybox.css') !!}

    @yield('styles')

    <!--[if lte IE 9]>
    {!! HTML::style('ace/assets/css/ace-part2.css', ['class'=>'ace-main-stylesheet']) !!}
    <![endif]-->

    <!--[if lte IE 9]>
    {!! HTML::style('ace/assets/css/ace-ie.css') !!}
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    {!! HTML::script('ace/assets/js/ace-extra.js') !!}

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    {!! HTML::script('ace/assets/js/html5shiv.js') !!}
    {!! HTML::script('ace/assets/js/respond.js') !!}
    <![endif]-->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    {!! HTML::script('ace/assets/js/jquery.js') !!}
    <!-- <![endif]-->

    <!--[if IE]>
    {!! HTML::script('ace/assets/js/jquery1x.js') !!}
    <![endif]-->

    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='{{URL::to('/')}}/ace/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
    </script>

</head>

<body class="no-skin">
<!-- #section:basics/navbar.layout -->
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="{{ URL::to('/') }}" target="_blank" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    {{ URL::to('/') }}
                </small>
            </a>
            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle -->

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right hidden-xs" role="navigation">
            <ul class="nav ace-nav">
                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        {!! HTML::image('ace/assets/avatars/avatar2.png', Auth::user()->name, ['class'=>'nav-user-photo']) !!}
								<span class="user-info">
									<small>Здравствуйте,</small>
									{{ Auth::user()->name }}
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                        <li>
                            <a href="{{URL::to('admin/changepassword')}}">
                                <i class="ace-icon fa fa-cog"></i>
                                Настройки
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="logout">
                                <i class="ace-icon fa fa-power-off"></i>
                                Выход
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
    </div><!-- /.navbar-container -->
</div>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar responsive">
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <a class="btn btn-success" href="#">
                    <i class="ace-icon fa fa-signal"></i>
                </a>

                <a class="btn btn-info" href="#">
                    <i class="ace-icon fa fa-pencil"></i>
                </a>

                <!-- #section:basics/sidebar.layout.shortcuts -->
                <a class="btn btn-warning" href="#">
                    <i class="ace-icon fa fa-users"></i>
                </a>

                <a class="btn btn-danger" href="#">
                    <i class="ace-icon fa fa-cogs"></i>
                </a>

                <!-- /section:basics/sidebar.layout.shortcuts -->
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        @include('admin.menu')

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
    </div>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="page-content">
            <!-- SETTINGS BEGINS -->
            <div id="ace-settings-container" class="ace-settings-container hidden-xs hide">
                <div id="ace-settings-btn" class="btn btn-app btn-xs btn-warning ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-150"></i>
                </div>

                <div id="ace-settings-box" class="ace-settings-box clearfix">
                    <div class="pull-left width-50">
                        <!-- #section:settings.skins -->
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select class="hide" id="skin-colorpicker">
                                    <option value="#438EB9" data-skin="no-skin">#438EB9</option>
                                    <option value="#222A2D" data-skin="skin-1">#222A2D</option>
                                    <option value="#C6487E" data-skin="skin-2">#C6487E</option>
                                    <option value="#D0D0D0" data-skin="skin-3">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <!-- /section:settings.skins -->

                        <!-- #section:settings.navbar -->
                        <div class="ace-settings-item">
                            <input type="checkbox" id="ace-settings-navbar" class="ace ace-checkbox-2">
                            <label for="ace-settings-navbar" class="lbl"> Fixed Navbar</label>
                        </div>

                        <!-- /section:settings.navbar -->

                        <!-- #section:settings.sidebar -->
                        <div class="ace-settings-item">
                            <input type="checkbox" id="ace-settings-sidebar" class="ace ace-checkbox-2">
                            <label for="ace-settings-sidebar" class="lbl"> Fixed Sidebar</label>
                        </div>

                        <!-- /section:settings.sidebar -->

                        <!-- #section:settings.breadcrumbs -->
                        <div class="ace-settings-item">
                            <input type="checkbox" id="ace-settings-breadcrumbs" class="ace ace-checkbox-2">
                            <label for="ace-settings-breadcrumbs" class="lbl"> Fixed Breadcrumbs</label>
                        </div>

                        <!-- /section:settings.breadcrumbs -->

                        <!-- #section:settings.container -->
                        <div class="ace-settings-item">
                            <input type="checkbox" id="ace-settings-add-container" class="ace ace-checkbox-2">
                            <label for="ace-settings-add-container" class="lbl">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>

                        <!-- /section:settings.container -->
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <!-- #section:basics/sidebar.options -->
                        <div class="ace-settings-item">
                            <input type="checkbox" id="ace-settings-hover" class="ace ace-checkbox-2">
                            <label for="ace-settings-hover" class="lbl"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" id="ace-settings-compact" class="ace ace-checkbox-2">
                            <label for="ace-settings-compact" class="lbl"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" id="ace-settings-highlight" class="ace ace-checkbox-2">
                            <label for="ace-settings-highlight" class="lbl"> Alt. Active Item</label>
                        </div>

                        <!-- /section:basics/sidebar.options -->
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div>
            <!-- SETTINGS ENDS -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="main">
                        @yield('centerbox')
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div><!-- /.main-content -->
    <div class="footer">
        <div class="footer-inner">
            <!-- #section:basics/footer -->
            <div class="footer-content">
						<span class="bigger-120">
							<a href="http://xsort.ru" target="_blank"><span class="blue bolder">Xsort</span></a>
							Web Studio &copy; 2008-{{ Date::now()->format('Y') }}
						</span>
            </div>
            <!-- /section:basics/footer -->
        </div>
    </div>
    <a class="btn-scroll-up btn btn-sm btn-inverse" id="btn-scroll-up" href="#">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

{!! HTML::script('ace/dist/js/bootstrap.min.js') !!}

<!-- ace scripts -->
{!! HTML::script('ace/assets/js/ace/elements.scroller.js') !!}
{!! HTML::script('ace/assets/js/ace/elements.typeahead.js') !!}
{!! HTML::script('ace/assets/js/ace/elements.wizard.js') !!}
{!! HTML::script('ace/assets/js/ace/elements.aside.js') !!}
{!! HTML::script('ace/assets/js/ace/ace.js') !!}
{!! HTML::script('ace/assets/js/ace/ace.ajax-content.js') !!}
{!! HTML::script('ace/assets/js/ace/ace.sidebar.js') !!}
{!! HTML::script('ace/assets/js/ace/ace.sidebar-scroll-1.js') !!}
{!! HTML::script('ace/assets/js/ace/ace.submenu-hover.js') !!}
{!! HTML::script('ace/assets/js/ace/ace.settings.js') !!}
{!! HTML::script('ace/assets/js/ace/ace.settings-skin.js') !!}
{!! HTML::script('ace/assets/js/toastr.min.js') !!}
{!! HTML::script('ace/assets/js/fancybox2/jquery.fancybox.pack.js') !!}

<!--
 <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script type="text/javascript">
        var x = 0;
        var y = 0;
        if (x==0) x = 47.02615918;
        if (y==0) y = 28.83406047;
        
       
        ymaps.ready(function () {
            var myMap = new ymaps.Map('YMapsID', {
                    center: [x, y],
                    zoom: 14,
                    type: 'yandex#publicMap',
                    behaviors: ['default', 'scrollZoom']
                });

            myMap.controls
                .add('mapTools')
                .add('zoomControl')
                .add('typeSelector', { top: 5, right: 5 })
                .add(new ymaps.control.SearchControl({ noPlacemark: true }), { top: 5, left: 200 });

            new LocationTool(myMap);
        });
        
        function DoneClick(){
            var str = $("#markerPosition").val();
            var arr = str.split(',');
            var x_coord = arr[0].trim();
            var y_coord = arr[1].trim();
            $("input[name=x_coord]").val(x_coord);
            $("input[name=y_coord]").val(y_coord);
            tb_remove();
        }
        
    </script>
    <style type="text/css">
        #YMapsID {
            width: 600px;
            height: 350px;
        }
        .hero-unit p {
            line-height: 20px;
        }
        .cross-control {
            background: url(center.gif) no-repeat;
            position: absolute;
            width: 16px;
            height: 16px;
        }
    </style>
    -->

@yield('scripts')

</body>
</html>
