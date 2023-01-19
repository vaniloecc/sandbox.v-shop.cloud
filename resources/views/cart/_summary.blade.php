<div class="card">
    <div class="card-header">
        <h2>Order Summary</h2>
    </div>
    <div class="card-body">
        @include('storefront::cart._summary_table')

        <hr>

        <a href="{{ route('shop.checkout.show') }}" class="btn btn-block btn-primary">Continue to Checkout</a>

        <a href="{{ route('shop.home') }}" class="btn btn-block btn-link">Back to the shop</a>
    </div>
</div>
