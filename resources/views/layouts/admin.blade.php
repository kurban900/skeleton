<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ asset("coreui/css/free.min.css") }}">
    <link rel="stylesheet" href="{{ asset('coreui/css/style.css') }}">
    <link href="{{ asset('build/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/choices/choices.min.css') }}" rel="stylesheet"/>

    <title>[{{ strtoupper(app()->environment()) }}] @yield('title') - Админ панель</title>
</head>
<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <a href="{{ route('home') }}">
        <div class="c-sidebar-brand d-lg-down-none py-3">
            <h5>SKELETON</h5>
        </div>
    </a>

    <ul class="c-sidebar-nav ps">
        {{-- Main --}}
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.home') }}">
                <i class="c-sidebar-nav-icon cil-speedometer"></i>
                Главная
            </a>
        </li>

        {{-- Logs --}}
        @developer
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('admin.logs') }}">
                    <i class="c-sidebar-nav-icon cil-short-text"></i>
                    Логи
                </a>
            </li>
        @enddeveloper

        {{-- Catalogs --}}
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon cil-list"></i>
                Каталог
            </a>
            <div class="c-sidebar-nav-dropdown-items">
                <a href="#" class="c-sidebar-nav-link">Создать</a>
                <a href="#" class="c-sidebar-nav-link">Список</a>
            </div>
        </li>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
<div class="c-wrapper c-fixed-components" id="pjax-container">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <div class="c-subheader px-3">
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.home') }}">Главная</a>
                </li>
                @yield('breadcrumbs')
                {{-- <li class="breadcrumb-item active">@yield('title')</li>--}}
            </ol>
        </div>
    </header>

    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    @include('admin.partials.flashes')
                    <h4 class="h3 mb-3">@yield('title')</h4>
                    @yield('content')
                </div>
            </div>
        </main>
        <footer class="c-footer mt-5">
            <div class="ml-auto">Powered by CoreUI</div>
        </footer>
    </div>
</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('coreui/js/coreui.bundle.min.js') }}"></script>
{{--<script src="{{ asset('vendor/choices/choices.min.js') }}"></script>--}}

@stack('scripts')

</body>
</html>
