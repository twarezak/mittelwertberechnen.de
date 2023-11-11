<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="{{ canonical_url() }}">

    <meta property="og:locale" content="pl_PL"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('title') - {{ $siteTitle }}"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:url" content="{{ $currentUrl }}"/>
    <meta property="og:site_name" content="{{ $siteTitle }}"/>
    <link rel="icon" type="image/png" href="{{ asset('img/average.png') }}">
    @if ($appEnv === 'prod')
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9047305524185109"
            crossorigin="anonymous"></script>
    @endif
</head>

<body class="font-sans">
@include('header')


<header class="bg-white">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-center">
            @yield('title')
        </h1>
        @include('ads.ad-title')
    </div>
</header>
<main>
    <div class="max-w-7xl mx-auto mt-10 md:mt-18 p-3  py-6 sm:px-6 lg:px-8 shadow-2xl mb-16">
        @yield('content')
    </div>
</main>
@include('footer')
</body>
</html>
