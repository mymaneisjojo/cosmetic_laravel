
<x-nav-bar />

<div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb/cart-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Shoping Cart</h2>
                    <div class="breadcrumb__links">
                        <a href="index-2.html">Home</a>
                        <span>Shoping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="alert alert-warning" role="alert">
        <strong>Anouce!</strong> there is no product in here!1!!!
    </div>
</div>
<div class="container">
<div class="cart__btn mb-5">
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="cart__btn__continue">
                <a href="{{route('shop.index')}}">Continue shopping</a>
            </div>
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="cart__btn__right">
                <a href="{{route('cart.clear')}}">Clear shopping cart</a>
                <a href="#">Update cart</a>
            </div>
        </div>
    </div>
</div>
</div>


<x-footer />