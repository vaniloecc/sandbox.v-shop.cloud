<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') &middot; %%shop_name%%</title>

    <meta property="og:url"           content="%%shop_url%%" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="@yield('title') &middot %%shop_name%%" />
    <meta property="og:description"   content="%%shop_name%% Shop" />
    <meta property="og:image"         content="%%shop_url%%/img/logo_128.png" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
</head>
<body>
    @include('flash::message')

    @yield('content')

    @yield('scripts')
</body>
</html>
