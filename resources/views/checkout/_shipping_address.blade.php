<div id="shipping-address" v-show="!shipToBillingAddress">
    <h2>Shipping Address</h2>

    <div class="form-group">

        <label class="col-form-label">Name</label>
        {{ Form::text('shippingAddress[name]', null, [
                'class' => 'form-control' . ($errors->has('shippingAddress.name') ? ' is-invalid' : '')
            ])
        }}
        @if ($errors->has('shippingAddress.name'))
            <div class="invalid-feedback">{{ $errors->first('shippingAddress.name') }}</div>
        @endif
    </div>

    {!! Form::hidden('shippingAddress[country_id]', setting('appshell.default.country')) !!}

    @if ($errors->has('shippingAddress.country_id'))
        <div class="alert alert-warning">
            {{ $errors->first('shippingAddress.country_id') }}
        </div>
    @endif

    <div class="form-group">

        <label class="col-form-label">Address</label>
        {{ Form::text('shippingAddress[address]', null, [
                'class' => 'form-control' . ($errors->has('shippingAddress.address') ? ' is-invalid' : '')
            ])
        }}
        @if ($errors->has('shippingAddress.address'))
            <div class="invalid-feedback">{{ $errors->first('shippingAddress.address') }}</div>
        @endif
    </div>

    <div class="form-group">

        <label class="col-form-label">Zip Code</label>
        {{ Form::text('shippingAddress[postalcode]', null, [
                'class' => 'form-control' . ($errors->has('shippingAddress.postalcode') ? ' is-invalid' : '')
            ])
        }}
        @if ($errors->has('shippingAddress.postalcode'))
            <div class="invalid-feedback">{{ $errors->first('shippingAddress.postalcode') }}</div>
        @endif

        <label class="col-form-label">City</label>
        {{ Form::text('shippingAddress[city]', null, [
                'class' => 'form-control' . ($errors->has('shippingAddress.city') ? ' is-invalid' : '')
            ])
        }}
        @if ($errors->has('shippingAddress.city'))
            <div class="invalid-feedback">{{ $errors->first('shippingAddress.city') }}</div>
        @endif

    </div>
</div>
