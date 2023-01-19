<h2>Billing Address</h2>

{!! Form::hidden('billpayer[address][country_id]', setting('appshell.default.country')) !!}

@if ($errors->has('billpayer.address.country_id'))
    <div class="alert alert-warning">
        {{ $errors->first('billpayer.address.country_id') }}
    </div>
@endif

<div class="form-group">
    <label class="col-form-label ">Address</label>
    {{ Form::text('billpayer[address][address]', null, [
            'class' => 'form-control' . ($errors->has('billpayer.address.address') ? ' is-invalid' : '')
        ])
    }}
    @if ($errors->has('billpayer.address.address'))
        <div class="invalid-feedback">{{ $errors->first('billpayer.address.address') }}</div>
    @endif
</div>

<div class="form-group">

    <label class="col-form-label">Zip code</label>
    {{ Form::text('billpayer[address][postalcode]', null, [
            'class' => 'form-control' . ($errors->has('billpayer.address.postalcode') ? ' is-invalid' : '')
        ])
    }}
    @if ($errors->has('billpayer.address.postalcode'))
        <div class="invalid-feedback">{{ $errors->first('billpayer.address.postalcode') }}</div>
    @endif

    <label class="col-form-label">City</label>
    {{ Form::text('billpayer[address][city]', null, [
            'class' => 'form-control' . ($errors->has('billpayer.address.city') ? ' is-invalid' : '')
        ])
    }}
    @if ($errors->has('billpayer.address.city'))
        <div class="invalid-feedback">{{ $errors->first('billpayer.address.city') }}</div>
    @endif

</div>

