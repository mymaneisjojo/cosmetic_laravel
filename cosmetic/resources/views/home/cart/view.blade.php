<x-nav-bar />
<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Cart</h2>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
    <div class="shop">
        <div class="container">
            <div class="cart">
                <div class="container">
                    <div class="cart__table">
                        <div class="cart__table__wrapper">
                            <table>
                                <colgroup>
                                    <col style="width: 40%">
                                    <col style="width: 17%">
                                    <col style="width: 17%">
                                    <col style="width: 17%">
                                    <col style="width: 9%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Color</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart->items as $item)
                                    <tr>
                                        <td>
                                            <div class="cart-product">
                                                <div class="cart-product__image"><img
                                                        src="{{url('public/uploads')}}/{{$item->image}}"
                                                        alt="Product image"></div>
                                                <div class="cart-product__content">
                                                    <h5></h5><a href="product-detail.html">{{$item->name}}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$item->color_name}}</td>

                                        <td>{{$item->price}}</td>
                                        <td>
                                            <form action="{{route('cart.update', $item->id)}}">

                                               
                                            <div class="buttons_added">
                                            <input class="btn-qty minus is-form" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" type="number" value="{{$item->quantity}}" name="quantity">
                                            <input class="btn-qty plus is-form" type="button" value="+">
                                        </div>


                                                <button type="submit" style="margin-left: 30px">Up</button>
                                            </form>

                                        </td>
                                        <td>{{$item->price * $item->quantity}}</td>
                                        <td><a
                                                href="{{route('cart.remove', ['id' => $item->id,'color_id' => $item->color_id])}}"><i
                                                    class="fas fa-times"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart__table__footer"><a href="{{route('shop.index')}}"><i
                                    class="fas fa-long-arrow-alt-left"></i>Continue Shopping</a><a
                                href="{{route('cart.clear')}}"><i class="fas fa-trash"></i>Clear Shopping Cart</a></div>
                    </div>
                    <div class="cart__total">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="cart__total__discount">
                                    <p>Enter coupon code. It will be applied at checkout.</p>
                                    <div class="input-validator">
                                        <form action="">
                                            <input type="text" name="discountCode" placeholder="Your code here">
                                            <button class="btn -dark">Apply
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="cart__total__content">
                                    <h3>Cart</h3>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>{{$cart->totalQuantity}}</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td class="final-price">${{$cart->totalPrice}}</td>
                                            </tr>
                                        </tbody>
                                    </table><a class="btn -dark" href="{{route('order.checkout')}}">Proceed to
                                        checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-two">
        <div class="instagram-two-slider slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 1524px; transform: translate3d(0px, 0px, 0px);"><a
                        class="slider-item slick-slide slick-current slick-active" href="https://www.instagram.com/"
                        data-slick-index="0" aria-hidden="false" style="width: 254px;" tabindex="0"><img
                            src="{{url('public/assets')}}/images/instagram/InstagramTwo/1.png"
                            alt="Instagram image"></a><a class="slider-item slick-slide slick-active"
                        href="https://www.instagram.com/" data-slick-index="1" aria-hidden="false" style="width: 254px;"
                        tabindex="0"><img src="{{url('public/assets')}}/images/instagram/InstagramTwo/2.png"
                            alt="Instagram image"></a><a class="slider-item slick-slide slick-active"
                        href="https://www.instagram.com/" data-slick-index="2" aria-hidden="false" style="width: 254px;"
                        tabindex="0"><img src="{{url('public/assets')}}/images/instagram/InstagramTwo/3.png"
                            alt="Instagram image"></a><a class="slider-item slick-slide slick-active"
                        href="https://www.instagram.com/" data-slick-index="3" aria-hidden="false" style="width: 254px;"
                        tabindex="0"><img src="{{url('public/assets')}}/images/instagram/InstagramTwo/4.png"
                            alt="Instagram image"></a><a class="slider-item slick-slide slick-active"
                        href="https://www.instagram.com/" data-slick-index="4" aria-hidden="false" style="width: 254px;"
                        tabindex="0"><img src="{{url('public/assets')}}/images/instagram/InstagramTwo/5.png"
                            alt="Instagram image"></a><a class="slider-item slick-slide slick-active"
                        href="https://www.instagram.com/" data-slick-index="5" aria-hidden="false" style="width: 254px;"
                        tabindex="0"><img src="{{url('public/assets')}}/images/instagram/InstagramTwo/6.png"
                            alt="Instagram image"></a></div>
            </div>
        </div>
    </div>


</div>

<x-footer />


