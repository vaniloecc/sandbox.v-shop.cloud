@extends('shop::layouts.default')

@section('title', 'About Vanilo Cloud Sandbox')

@section('content')
    <h1>Info Pages</h1>

    <p>You can define simple static pages just by adding them as blade files in the
        <code>resources/views/info/</code> folder. If the file name is <code>about-us.blade.php</code>
        then it will be reachable on the <code>/info/about-us</code> path on your shop.
    </p>

    <p>The file name, and thus the path must consist of small letters "a-z", numbers "0-9" and
        hyphens "-" or underscore "_".
    </p>
@endsection
