<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') &middot; Vanilo Cloud Sandbox</title>

    <meta property="og:url"           content="https://sandbox.v-shop.cloud" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="@yield('title') &middot Vanilo Cloud Sandbox" />
    <meta property="og:description"   content="Vanilo Cloud Sandbox Shop" />
    <meta property="og:image"         content="https://sandbox.v-shop.cloud/img/logo_128.png" />

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
