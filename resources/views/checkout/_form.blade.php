<form id="checkout" class="form" action="{{ route('shop.checkout.submit') }}" method="post">
    @csrf

    @include('shop::checkout._base_data')

    @include('shop::checkout._billpayer', ['billpayer' => $checkout->getBillPayer()])

    <div class="mb-4">
        <input type="hidden" name="ship_to_billing_address" value="0" />
        <div class="form-check">
            <input class="form-check-input" id="chk_ship_to_billing_address" type="checkbox" name="ship_to_billing_address" value="1" v-model="shipToBillingAddress">
            <label class="form-check-label" for="chk_ship_to_billing_address">Ship to the billing address</label>
        </div>
    </div>

    @include('shop::checkout._shipping_address', ['address' => $checkout->getShippingAddress()])

    <hr>

    <div class="form-group">

        <label class="">Notes for the Shop</label>
        {{ Form::textarea('notes', null, [
                'class' => 'form-control' . ($errors->has('notes') ? ' is-invalid' : ''),
                'rows' => 3
            ])
        }}
        @if ($errors->has('notes'))
            <div class="invalid-feedback">{{ $errors->first('notes') }}</div>
        @endif
    </div>

    <hr>

    <div>
        <button class="btn btn-lg btn-primary">Submit order</button>
    </div>

</form>
