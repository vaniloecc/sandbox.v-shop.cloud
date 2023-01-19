@extends('storefront::layouts.default')

@section('title', 'We have received your order')

@section('content')
    <h1>Thank you, {{ $order->getBillpayer()->firstname }}</h1>

    <div class="alert alert-success">
        Your order has been registered with number
        <strong>{{ $order->getNumber() }}</strong>
    </div>

    <h3>Next steps</h3>

    <ol>
        <li>Step 1 ...</li>
        <li>Step 2 ...</li>
    </ol>
@endsection
