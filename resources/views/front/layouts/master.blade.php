<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//use.fontawesome.com">
        <link rel="dns-prefetch" href="//www.googletagmanager.com">
        @include('partials.gtm-head')

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Laravel beyond CRUD</title>
        <meta name="description" content="@yield('description')">
        <link rel="canonical" href="{{ url()->current() }}"/>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,600|Jost:400,600,700&amp;display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @include('partials.favicon')

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:creator" content="@spatie_be"/>
        <meta name="twitter:site" content="@spatie_be"/>
        <meta name="twitter:title" content="@yield('title')"/>
        <meta name="twitter:description"
        content="@yield('description')"/>
        <meta name="twitter:image" content="https://laravel-beyond-crud.com/images/social-card.jpg"/>

        <meta property="og:site_name" content="Laravel beyond CRUD">
        <meta property="og:locale" content="en_US">
        <meta property="og:url" content="{{ url()->current() }}"/>
        <meta property="og:type" content="product"/>
        <meta property="og:title" content="@yield('title')"/>
        <meta property="og:description"
            content="@yield('description')"/>
        <meta property="og:image" content="https://laravel-beyond-crud.com/images/social-card.jpg"/>
        <script src="https://cdn.paddle.com/paddle/paddle.js"></script>

        <script src="/js/alpine.js" defer></script>

        @bukStyles()
        @bukScripts()
    </head>
    <body class="bg-red-150 overflow-x-hidden font-sans">
        @yield('content')

        @include('partials.gtm-body')
    </body>
</html>
