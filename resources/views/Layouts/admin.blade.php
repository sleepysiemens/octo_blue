<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Синяя смазка оптом | Admin </title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon/favicon.png')}}">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>

    @vite([
    'resources/css/admin/app.min.css',
    'resources/css/vendor.min.css',
    'resources/js/app.js',
    ])

    <script src="{{'https://kit.fontawesome.com/0a007e12dc.js'}}" crossorigin="anonymous"></script>
    @livewireStyles

</head>
<body>

<!-- BEGIN #app -->
<div id="app" class="app app-header-fixed app-sidebar-fixed ">
    <!-- BEGIN #header -->
    <div id="header" class="app-header">
        <!-- BEGIN navbar-header -->
        <div class="navbar-header">
            <a href="{{route('admin.index')}}" class="navbar-brand"><span class="navbar-logo"></span>Синяя смазка оптом</a>
            <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- END navbar-header -->
    </div>
    <!-- END #header -->

    <!-- BEGIN #sidebar -->
    <div id="sidebar" class="app-sidebar" data-bs-theme="dark">
        <!-- BEGIN scrollbar -->
        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
            <!-- BEGIN menu -->
            <div class="menu">
                <div class="menu-profile" style="background-image: url({{asset('img/gallery-11.jpg')}});">
                    <a href="{{route('admin.index')}}" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                        <div class="menu-profile-cover with-shadow"></div>
                        <div class="menu-profile-image">
                            <i class="fas fa-user-circle text-white fs-34px"></i>
                        </div>
                        <div class="menu-profile-info">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="menu-header"></div>



                <div class="menu-item @yield('blog')">
                    <a href="{{route('admin.index')}}" class="menu-link">
                        <div class="menu-icon">
                            <i class="far fa-clipboard"></i>
                        </div>
                        <div class="menu-text">Посты</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('admin.logout')}}" class="menu-link">
                        <div class="menu-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        <div class="menu-text">Выйти</div>
                    </a>
                </div>

            </div>
            <!-- END menu -->
        </div>
        <!-- END scrollbar -->
    </div>
    <div class="app-sidebar-bg" data-bs-theme="dark"></div>
    <div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
    <!-- END #sidebar -->

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        @yield('content')

    </div>
    <!-- END #content -->
</div>
<!-- END #app -->
{{--
<script src="{{asset('/admin/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.canvaswrapper.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.colorhelpers.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.saturated.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.browser.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.drawSeries.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.uiConstants.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.uiConstants.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.time.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.resize.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.pie.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.categories.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.navigate.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.touchNavigate.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.hover.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.touch.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.selection.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.symbol.js')}}"></script>
<script src="{{asset('/admin/flot/source/jquery.flot.legend.js')}}"></script>
<script src="{{asset('/admin/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/admin/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('/admin/jvectormap-content/world-mill.js')}}"></script>
<script src="{{asset('/admin/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"></script>
--}}
</body>
</html>
@livewireScripts
