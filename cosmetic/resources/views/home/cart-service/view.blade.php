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
    @if($errors->all())
    <div class="alert alert-warning alert-dismissibla fade show" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>

    </div>
    @foreach($errors->all() as $er)
    <li>{{$er}}</li>
    @endforeach
    @endif
    <div class="shop">
        <div class="container">
            <div class="cart">
                <div class="container">
                    <form method="post" action="{{route('cart_service.book')}}" enctype="multipart/form-data">
                    @csrf
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
                                            <th>Email</th>
                                            <th>Service</th>
                                            <th>Image</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataCartService as $item)
                                        <tr>
                                            <td>{{Auth::guard('customer')->user()->email}}<l/td>
                                            <td>{{$item->summary}}</td>
                                            <td>
                                                <div class="cart-product">
                                                    <div class="cart-product__image"><img
                                                            src="{{url('public/uploads')}}/{{$item->image}}"
                                                            alt="Product image"></div>

                                                </div>
                                            </td>
                                            <td>{{$item->date}}</td>
                                            <td><a href="{{route('cart_service.remove', ['id' => $item->id])}}"><i
                                                        class="fas fa-times"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart__table__footer">
                                <a href=""><i class="fas fa-long-arrow-alt-left"></i>Continue Booking</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
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
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                            </tr>
                                        </tbody>
                                    </table>
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

