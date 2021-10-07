<!doctype html>
<html lang="ru" data-theme="hunting">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css', '/build') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">

    {{-- Meta --}}
    <title>@env('local') [LOCAL] @endenv()@yield('seo_title') - SKELETON</title>
    <meta name="description" content="@yield('seo_description')">
    <link rel="canonical" href="{{ request()->url() }}"/>

    {{-- Favicon --}}
    @php($faviconVersion = 1.0)
    <link href="{{ asset("favicon.svg?v=$faviconVersion") }}" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("favicon.svg?v=$faviconVersion") }}">
    <link rel="icon" sizes="32x32" href="{{ asset("favicon.svg?v=$faviconVersion") }}">
    <link rel="icon" sizes="16x16" href="{{ asset("favicon.svg?v=$faviconVersion") }}">

    @stack('styles')
</head>
<body>

<div class="container mx-auto bg-white shadow-xl">
    @include('public.partials.header')

    @yield('breadcrumbs')
    <main class="main">
        @yield('content')
    </main>

    @include('public.partials.footer')
</div>

<!-- Scripts -->
{{--<script src="{{ mix('js/manifest.js', 'build') }}"></script>
<script src="{{ mix('js/vendor.js', 'build') }}"></script>--}}
<script src="{{ mix('js/app.js', 'build') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

@stack('scripts')

@production
    {{-- Metrics code --}}
@endproduction

</body>
</html>
