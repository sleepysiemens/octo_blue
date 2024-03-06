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

    {{--SUMMERNOTE--}}
    <link rel="stylesheet" href="{{asset('/plugins/summernote/summernote-bs4.min.css')}}">
    {{--/SUMMERNOTE--}}

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
            ]
        });
    });
</script>

</body>
</html>
@livewireScripts
