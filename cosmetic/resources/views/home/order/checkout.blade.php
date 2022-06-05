<x-nav-bar />
<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Checkout</h2>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <div class="shop">
        <div class="container">
        <form action="#" method="post">
                @csrf
            <div class="checkout">
                <div class="row">
                    <div class="col-12 col-lg-8">
                            <div class="checkout__form">
                                <div class="checkout__form__contact">
                                    <div class="checkout__form__contact__title">
                                        <h5 class="checkout-title">Contact information</h5>
                                        <p> Already have an account?<a href="#">Login</a></p>
                                    </div>


                                </div>
                                <div class="checkout__form__shipping">
                                    <h5 class="checkout-title">Shipping address</h5>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Name <span>*</span>
                                                    <input type="text" id="auth_firtsName" name="auth_firtsName"
                                                        value="{{$auth->firtsName}}">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Phone<span>*</span>
                                                    <input type="text" id="auth_phone" name="auth_phone"
                                                        value="{{$auth->phone}}">

                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Email <span>*</span>
                                                    <input type="text" id="auth_email" name="auth_email"
                                                        value="{{$auth->email}}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Address <span>*</span>
                                                    <input type="text" id="auth_address" placeholder="Steet address"
                                                        name="auth_address" value="{{$auth->address}}">

                                                </label>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Order note
                                                    <input type="text"
                                                        placeholder="Note about your order, e.g, special noe for delivery">
                                                </label>
                                            </div>
                                        </div>
                                        <label class="checkbox-label">
                                            <input type="checkbox" id="is_me" name="is_me" value="ok">
                                            TÔI là người nhận hàng
                                            <span class="checkmark"></span>
                                        </label>
                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Name <span>*</span>
                                                    <input type="text" id="firtsName" name="firtsName"
                                                        value="{{$auth->firtsName}}">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Phone<span>*</span>
                                                    <input type="text" id="phone" name="phone"
                                                        value="{{$auth->phone}}">

                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Email <span>*</span>
                                                    <input type="text" id="email" name="email"
                                                        value="{{$auth->email}}">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-validator">
                                                <label>Address <span>*</span>
                                                    <input type="text" id="address" placeholder="Steet address"
                                                        name="address" value="{{$auth->address}}">

                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12 ml-auto">
                                <div class="checkout__total">
                                    <h5 class="checkout-title">Your order</h5>
                                    
                                    <div class="checkout__total__price">
                                    @foreach($cart->items as $item)

                                        <h5>Product</h5>
                                        <table>
                                            <colgroup>
                                                <col style="width: 70%">
                                                <col style="width: 30%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td><span>{{$item->quantity}} x </span>{{$item->name}}
                                                    </td>
                                                    <td>${{$item->price}}</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        <div class="checkout__total__price__total-count">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Subtotal</td>
                                                        <td>${{$item->price * $item->quantity}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>${{$item->price * $item->quantity}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    @endforeach

                                        <div class="checkout__total__price__payment">
                                            <label class="checkbox-label" for="payment">
                                                <input id="payment" type="checkbox" name="payment">Cheque payment
                                            </label>
                                            <label class="checkbox-label" htmlfor="paypal">
                                                <input id="paypal" type="checkbox" name="paypal">PayPal
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <button class="btn -red">Place order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    
</div>
<x-footer />



<script>
$('#is_me').click(function() {
    var isChecked = $('#is_me').is(':checked');
    if (isChecked) {
        $('#firtsName').val($('#auth_firtsName').val());
        $('#email').val($('#auth_email').val());
        $('#phone').val($('#auth_phone').val());
        $('#address').val($('#auth_address').val());
    } else {
        $('#firtsName').val('');
        $('#email').val('');
        $('#phone').val('');
        $('#address').val('');
    }
});

//khi tự nhiên vào nó cx tự check
var isChecked = $('#is_me').is(':checked');
if (isChecked) {
    $('#firtsName').val($('#auth_firtsName').val());
    $('#email').val($('#auth_email').val());
    $('#phone').val($('#auth_phone').val());
    $('#address').val($('#auth_address').val());
} else {
    $('#firtsName').val('');
    $('#email').val('');
    $('#phone').val('');
    $('#address').val('');
}
</script>