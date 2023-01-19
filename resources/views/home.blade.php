@extends('shop::layouts.default')

@section('title', 'Vanilo Cloud Sandbox')

@section('content')
    <h1>Vanilo Cloud Sandbox</h1>

    <p>Welcome to your shop. This is a dead simple skeleton that demonstrates the very basics
        of building shops and sites with Vanilo Cloud.
    </p>

    <p>Read how to <a href="{{ route('info', 'about') }}">define simple static pages</a>.</p>

    @foreach($products as $product)
        <h2><a href="{{ route('shop.product.show', $product) }}">{{ $product->name }}</a></h2>
        <img src="{{ $product->getFirstMediaUrl('default', 'medium') ?: asset('/img/default/product_medium.jpg') }}">
        <hr>
    @endforeach

@endsection
