@extends('storefront::layouts.default')

@section('title', 'Order Details')

@section('content')
    <h1>Order Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>Billing Data</h2>
        </div>

        <div class="card-body">
            @unless ($checkout)
                <div class="alert alert-warning">
                    <p>Hey, nothing to check out here!</p>
                </div>
            @endunless

            @if ($checkout)
                @include('storefront::checkout._form')
            @endif
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Order Summary</h2>
        </div>
        <div class="card-body">
            @include('storefront::cart._summary_table')
        </div>
    </div>
@endsection

@section('scripts')
    @if ($checkout)
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            new Vue({
                el: '#checkout',
                data: {
                    isOrganization: {{ old('billpayer.is_organization') ?: 0 }},
                    shipToBillingAddress: {{ old('ship_to_billing_address') ?? 1 }}
                }
            });
        });
    </script>
    @endif
@stop

