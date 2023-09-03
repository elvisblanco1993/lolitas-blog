<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg">

        @if (request()->routeIs('articles.view'))
            <meta property="og:url"          content="{{ url()->current() }}" />
            <meta property="og:type"         content="article" />
            <meta property="og:title"        content="{{ $article->title }}" />
            <meta property="og:description"  content="{{Str::limit(strip_tags($article->body), 50)}}" />
            <meta property="og:image"        content="{{ url('/storage/photos/' . $article->image) }}" />
        @endif

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @if (!request()->routeIs('login') && !request()->routeIs('register'))
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-YPNM3VTECR"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-YPNM3VTECR');
            </script>

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6691661138979501" crossorigin="anonymous"></script>
        @endif
    </head>
    <body class="bg-white ">
        <div class="font-sans  text-gray-900  antialiased relative min-h-screen">
            {{ $slot }}
        </div>
        @include('layouts.footer')
        @stack('modals')
        @livewireScripts
    </body>
</html>
