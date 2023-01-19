<table class="table cart-table">
    <tbody>
    <tr>
        <th>Products:</th>
        <td>{{ format_price(Cart::total()) }}</td>
    </tr>
    <tr>
        <th>Shipping:</th>
        <td>Free</td>
    </tr>
    <tr>
        <td><h4>Total:</h4></td>
        <td><h4>{{ format_price(Cart::total()) }}</h4></td>
    </tr>
    </tbody>
</table>
