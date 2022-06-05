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
                                                    <input type="text" id="auth_name" name="auth_name"
                                                        value="{{$auth->name}}">
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
                                    @foreach($cartservice->items as $item)

                                        <h5>Service</h5>
                                        <table>
                                            <colgroup>
                                                <col style="width: 70%">
                                                <col style="width: 30%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td><span></span>{{$item->summary}}
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        <div class="checkout__total__price__total-count">
                                           
                                        </div>
                                        <div class="checkout__total__price__payment">
                                            <label class="checkbox-label" for="payment">
                                                <input id="payment" type="checkbox" name="payment">Cheque payment
                                            </label>
                                            <label class="checkbox-label" htmlfor="paypal">
                                                <input id="paypal" type="checkbox" name="paypal">PayPal
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
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
    <div class="instagram-two">
        <div class="instagram-two-slider slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 1524px; transform: translate3d(0px, 0px, 0px);"><a
                        class="slider-item slick-slide slick-current slick-active" href="https://www.instagram.com/"
                        data-slick-index="0" aria-hidden="false" style="width: 254px;" tabindex="0"><img
                            src="assets/images/instagram/InstagramTwo/1.png" alt="Instagram image"></a><a
                        class="slider-item slick-slide slick-active" href="https://www.instagram.com/"
                        data-slick-index="1" aria-hidden="false" style="width: 254px;" tabindex="0"><img
                            src="assets/images/instagram/InstagramTwo/2.png" alt="Instagram image"></a><a
                        class="slider-item slick-slide slick-active" href="https://www.instagram.com/"
                        data-slick-index="2" aria-hidden="false" style="width: 254px;" tabindex="0"><img
                            src="assets/images/instagram/InstagramTwo/3.png" alt="Instagram image"></a><a
                        class="slider-item slick-slide slick-active" href="https://www.instagram.com/"
                        data-slick-index="3" aria-hidden="false" style="width: 254px;" tabindex="0"><img
                            src="assets/images/instagram/InstagramTwo/4.png" alt="Instagram image"></a><a
                        class="slider-item slick-slide slick-active" href="https://www.instagram.com/"
                        data-slick-index="4" aria-hidden="false" style="width: 254px;" tabindex="0"><img
                            src="assets/images/instagram/InstagramTwo/5.png" alt="Instagram image"></a><a
                        class="slider-item slick-slide slick-active" href="https://www.instagram.com/"
                        data-slick-index="5" aria-hidden="false" style="width: 254px;" tabindex="0"><img
                            src="assets/images/instagram/InstagramTwo/6.png" alt="Instagram image"></a></div>
            </div>
        </div>
    </div>

</div>
<x-footer />



<script>
$('#is_me').click(function() {
    var isChecked = $('#is_me').is(':checked');
    if (isChecked) {
        $('#name').val($('#auth_name').val());
        $('#email').val($('#auth_email').val());
        $('#phone').val($('#auth_phone').val());
        $('#address').val($('#auth_address').val());
    } else {
        $('#name').val('');
        $('#email').val('');
        $('#phone').val('');
        $('#address').val('');
    }
});
var isChecked = $('#is_me').is(':checked');
if (isChecked) {
    $('#name').val($('#auth_name').val());
    $('#email').val($('#auth_email').val());
    $('#phone').val($('#auth_phone').val());
    $('#address').val($('#auth_address').val());
} else {
    $('#name').val('');
    $('#email').val('');
    $('#phone').val('');
    $('#address').val('');
}
</script>