@extends('storefront::layouts.default')

@section('title', 'Cart')

@section('content')
    <h1>
        @if(Cart::isEmpty())
            Your cart is empty
        @else
            Your cart
        @endif
    </h1>
    @if(Cart::isEmpty())
        @include('storefront::cart._empty')
    @else
        @include('storefront::cart._items')

        @include('storefront::cart._summary')
    @endif
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll("button[data-role='cart-qty-changer']")
                .forEach(function (item) {
                    item.addEventListener('click', function (item) {
                        var itemid = this.dataset.itemid;
                        var form = document.getElementById('cart-qty-form--' + itemid);
                        var input = document.getElementById('cart-qty-input--' + itemid);
                        currentQty = parseInt(input.value);
                        qty = currentQty;
                        if ('+' == this.dataset.direction) {
                            qty = currentQty + 1;
                        } else if ('-' == this.dataset.direction) {
                            qty = currentQty - 1;
                        } else {
                            return; //do nothing if forged
                        }
                        input.value = qty;
                        form.submit();
                    })
            });
        });
    </script>
@endsection
