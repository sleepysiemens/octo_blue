<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
      <meta name="keywords" content="@yield('keywords')">

    {{--
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    --}}
    <!-- Bootstrap icons-->
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/0a007e12dc.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    @vite([
    'resources/css/app.css',
    ])
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-3 d-flex">
        <a class="navbar-brand fw-bolder me-0" href="{{route('main.index')}}">Синяя смазка оптом</a>
       <livewire:overlay-form/>
    </div>
</nav>
@yield('content')
<!-- Footer-->
<footer class="bg-black text-center py-5">
    <div class="container px-5">
        <div class="text-white-50 small">
            <div class="mb-2">&copy; Синяя смазка оптом {{date('Y')}}. All Rights Reserved.</div>
            <a href="#">Privacy</a>
            <span class="mx-1">&middot;</span>
            <a href="#">Terms</a>
            <span class="mx-1">&middot;</span>
            <a href="#">FAQ</a>
        </div>
    </div>
</footer>

</body>
</html>
