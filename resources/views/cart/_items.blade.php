<div class="card">
    <div class="card-header">
        <h2>Products</h2>
    </div>

    <div class="card-body">
        <table class="table cart-table">
            <tbody>
            @foreach(Cart::getItems() as $item)
                @include('storefront::cart._item')
            @endforeach
            <tr>
                <td colspan="6">
                    <hr />
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="text-align: right;" class="color-primary">Products total:</td>
                <td class="color-primary">{{ format_price(Cart::total()) }}</td>
                <td></td>
            </tr>
            </tbody>
            <tfoot>

            </tfoot>

        </table>
    </div>
</div>
