<tr>
    <td width="55"><img
            src="{{ $item->product->getFirstMediaUrl('default', 'cart') ?: asset('/img/default/cart_thumbnail.png') }}"
            />
    </td>
    <td>
        <a href="{{ route('shop.product.show', $item->product) }}">
            {{ $item->product->getName() }}
        </a>
    </td>
    <td>{{ format_price($item->price) }}</td>
    <td width="155">
        {!! Form::open([
                'route' => ['shop.cart.update', $item],
                'method' => 'PUT',
                'style' => 'display: inline-block',
                'id' => 'cart-qty-form--' . $item->id
            ])
        !!}
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button"
                            data-itemid="{{ $item->id }}" data-role="cart-qty-changer"
                            data-direction="-">-
                    </button>
                </div>
                <input type="text" name="qty" value="{{ $item->quantity }}" class="form-control"
                       id="cart-qty-input--{{ $item->id }}"/>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"
                            data-itemid="{{ $item->id }}" data-role="cart-qty-changer"
                            data-direction="+">+
                    </button>
                </div>
            </div>
        {!! Form::close() !!}
    </td>
    <td>{{ format_price($item->total) }}</td>
    <td>
        {!! Form::open([
                'route' => ['shop.cart.delete', $item],
                'method' => 'DELETE',
                'style' => 'display: inline-block'
            ])
        !!}
            <button class="btn btn-link btn-sm"><span class="color-danger">❌</span></button>
        {!! Form::close() !!}
    </td>
</tr>

