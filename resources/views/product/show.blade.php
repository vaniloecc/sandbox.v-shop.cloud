@extends('shop::layouts.default')

@section('title', $product->title)

@section('content')
    <h1>{{ $product->title }}</h1>
    <hr>

    <img src="{{ $product->getFirstMediaUrl('default', 'medium') ?: '/img/default/product_medium.png' }}" />

    <form action="{{ route('shop.cart.add', $product) }}" method="post">
        {{ csrf_field() }}

        <button type="submit" @if(!$product->price) disabled @endif>
            Add to card
        </button>
        <span>{{ format_price($product->price) }}</span>
    </form>

    <hr>

    <ul>
        @foreach($product->propertyValues as $value)
            <li>{{ $value->property->name }}: {{ $value->title }}</li>
        @endforeach
    </ul>

    <hr>

    <p>{!! md2html($product->description ?? '') !!}</p>

    <hr>
@endsection
