<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;700;900&amp;display=swap" />
    <link rel="shortcut icon" type="image/png" href="./assets/images/fav.png" />
   
    <link rel="stylesheet" href="{{url('public/assets')}}/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="{{url('public/assets')}}/css/slick.min.css" />
    <link rel="stylesheet" href="{{url('public/assets')}}/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{url('public/assets')}}/css/brands.min.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/regular.min.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/solid.min.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/all.min.css">
    <link rel="stylesheet" href="{{url('public/assets')}}/css/jquery.modal.min.css" />
    <link rel="stylesheet" href="{{url('public/assets')}}/css/bootstrap-drawer.min.css" />
    <link rel="stylesheet" href="{{url('public/assets')}}/css/style.css" />
    @yield('css')

<body>
    <div class="header-one">
        <div class="top-nav -style-1">
            <div class="container">
                <div class="top-nav__wrapper">
                    <div class="top-nav-social">
                        <div class="social-icons -white">
                            <ul>
                                <li><a href="https://www.facebook.com/" style="'color: undefined'"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com" style="'color: undefined'"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com/" style="'color: undefined'"><i
                                            class="fab fa-instagram"> </i></a></li>
                                <li><a href="https://www.youtube.com/" style="'color: undefined'"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="top-nav-promo">Free shipping on international orders of $120+</p>
                    <div class="top-nav-selections">
                        <div class="top-nav-selections__item">
                            <select class="customed-select -borderless -white" name="cur">
                                <option value="USD">USD</option>
                                <option value="JPY">JPY</option>
                                <option value="VND">VND</option>
                            </select>
                        </div>
                        <div class="top-nav-selections__item">
                            <select class="customed-select -borderless -white" name="lang">
                                <option value="EN">ENG</option>
                                <option value="JP">JAP</option>
                                <option value="VI">VIE</option>
                            </select>
                        </div>

                        <ul class="nav navbar-top-links navbar-right">
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    @if(Auth::check())
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i></a>
                                    </li>
                                    <!-- Auth::customer()->firtsName -->
                                    <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                            </li>
                            <li class="divider"></li>


                            <li><a href="{{route('home.logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                @endif
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                        </ul>
                        <!-- /.dropdown-user -->

                    </div>
                </div>
            </div>
        </div>
        <div class="menu -style-1">
            <div class="container">
                <div class="menu__wrapper">
                    <a class="menu-logo" href="index.html"><img src="{{url('public/assets')}}/images/logo.png"
                            alt="Logo" /></a>
                    <div class="navigator ">
                        <ul>
                            <li class="relative"><a href="home.html">Home<span class="dropable-icon"></span></a>
                                <!-- <ul class="dropdown-menu">
                                        <li><a href="">Beauty Salon</a></li>
                                        <li><a href="homepage2.html">Makeup Salon</a></li>
                                        <li><a href="homepage3.html">Natural Shop</a></li>
                                        <li><a href="homepage4.html">Spa Shop</a></li>
                                        <li><a href="homepage5.html">Mask Shop</a></li>
                                        <li><a href="homepage6.html">Skincare Shop</a></li>
                                    </ul> -->
                            </li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="shop-fullwidth-4col.html">Shop<span class="dropable-icon"><i
                                            class="fas fa-angle-down"></i></span></a>
                                <ul class="dropdown-menu -wide">
                                    <ul class="dropdown-menu__col">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                        <li><a href="cart.html">Shopping cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wish list</a></li>
                                    </ul>
                                    <ul class="dropdown-menu__col -banner">
                                        <a href="shop-fullwidth-4col.html"><img
                                                src="{{url('public/assets')}}/images/header/dropdown-menu-banner.png"
                                                alt="New product banner" /></a>
                                    </ul>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="menu-functions ">
                        <a class="menu-icon -search" href="#"><img
                                src="{{url('public/assets')}}/images/header/search-icon.png" alt="Search icon" /></a>
                        <div class="search-box">
                            <form>
                                <input type="text" placeholder="What are you looking for?" name="search" />
                                <button><img src="{{url('public/assets')}}/images/header/search-icon.png"
                                        alt="Search icon" /></button>
                            </form>
                        </div>
                        <a class="menu-icon -wishlist" href="/wishlist.html"><img
                                src="{{url('public/assets')}}/images/header/wishlist-icon.png"
                                alt="Wishlist icon" /></a>
                        <div class="menu-cart">
                            <a class="menu-icon -cart" href="#"><img
                                    src="{{url('public/assets')}}/images/header/cart-icon.png"
                                    alt="Wishlist icon" /><span class="cart__quantity">0</span></a>
                            <h5>Cart:<span>$100</span></h5>
                        </div>
                        <a class="menu-icon -navbar" href="#">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('main')

    <div class="footer-one">
        <div class="container">
            <div class="footer-one__header">
                <div class="footer-one__header__logo">
                    <a href="/homepages/homepage1"><img src="{{url('public/assets')}}/images/logo.png" alt="Logo" /></a>
                </div>
                <div class="footer-one__header__newsletter"><span>Subscribe Newletter:</span>
                    <div class="footer-one-newsletter">
                        <div class="subscribe-form">
                            <div class="mc-form">
                                <input type="text" placeholder="Enter your email" />
                                <button class="btn "><i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-one__header__social">
                    <div class="social-icons -border">
                        <ul>
                            <li><a href="https://www.facebook.com/" style="'color: undefined'"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com" style="'color: undefined'"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/" style="'color: undefined'"><i class="fab fa-instagram">
                                    </i></a></li>
                            <li><a href="https://www.youtube.com/" style="'color: undefined'"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-one__body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer__section -info">
                            <h5 class="footer-title">Contact info</h5>
                            <p>Address:<span>2168 S Archer Ave, Chicago, IL 60616, US</span></p>
                            <p>Phone:<span>+1 312-808-1999</span></p>
                            <p>Email:<span>Beatycosmetics@gmail.com</span></p>
                            <p>Opentime:<span>8.00am - 11.00.pm</span></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer__section -links">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h5 class="footer-title">Account</h5>
                                    <ul>
                                        <li><a href="{{route('home.logout')}}">My account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart">Cart</a></li>
                                        <li><a href="fullwidth-4col">Shop</a></li>
                                        <li><a href="checkout">Checkout</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h5 class="footer-title">Infomation</h5>
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="contact.html">Careers</a></li>
                                        <li><a href="contact.html">Delivery Information</a></li>
                                        <li><a href="contact.html">Privacy Policy</a></li>
                                        <li><a href="contact.html">Terms &amp; Condition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="footer__section -payment">
                            <h5 class="footer-title">Payment methods</h5>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit gravida facilisis.</p>
                            <div class="payment-methods"><img src="{{url('public/assets')}}/images/footer/payment.png"
                                    alt="Payment methods" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-one__footer">
            <div class="container">
                <div class="footer-one__footer__wrapper">
                    <p>© Copyright 2020 Beauty</p>
                    <ul>
                        <li><a href="contact.html">Privacy Policy</a></li>
                        <li><a href="contact.html">Terms &amp; Condition</a></li>
                        <li><a href="contact.html">Site map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="drawer drawer-right slide" id="cart-drawer" tabindex="-1" role="dialog"
        aria-labelledby="drawer-demo-title" aria-hidden="true">
        <div class="drawer-content drawer-content-scrollable" role="document">
            <div class="drawer-body">
                <div class="cart-sidebar">
                    <div class="cart-items__wrapper">
                        <h2>Shopping cart</h2>
                        <div class="cart-item">
                            <div class="cart-item__image"><img src="{{url('public/assets')}}/images/product/1.png"
                                    alt="Product image" /></div>
                            <div class="cart-item__info"><a href="/product-detail.html">The expert mascaraa</a>
                                <h5>$35.00</h5>
                                <p>Quantity:<span> 1</span></p>
                            </div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="cart-item">
                            <div class="cart-item__image"><img src="{{url('public/assets')}}/images/product/3.png"
                                    alt="Product image" /></div>
                            <div class="cart-item__info"><a href="/product-detail.html">Velvet Melon High Intensity</a>
                                <h5>$38.00</h5>
                                <p>Quantity:<span> 1</span></p>
                            </div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="cart-items__total">
                            <div class="cart-items__total__price">
                                <h5>Total</h5><span>$73.00</span>
                            </div>
                            <div class="cart-items__total__buttons"><a class="btn -dark" href="cart.html">View
                                    cart</a><a class="btn -red" href="checkout.html">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="drawer drawer-right slide" id="mobile-menu-drawer" tabindex="-1" role="dialog"
        aria-labelledby="drawer-demo-title" aria-hidden="true">
        <div class="drawer-content drawer-content-scrollable" role="document">
            <div class="drawer-body">
                <div class="cart-sidebar">
                    <div class="cart-items__wrapper">
                        <div class="navigation-sidebar">
                            <div class="search-box">
                                <form>
                                    <input type="text" placeholder="What are you looking for?" />
                                    <button><img src="{{url('public/assets')}}/images/header/search-icon.png"
                                            alt="Search icon" /></button>
                                </form>
                            </div>
                            <div class="navigator-mobile">
                                <ul>
                                    <li class="relative"><a class="dropdown-menu-controller" href="#">Home<span
                                                class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="homepages/homepage1.html">Beauty Salon</a></li>
                                            <li><a href="homepages/homepage2.html">Makeup Salon</a></li>
                                            <li><a href="homepages/homepage3.html">Natural Shop</a></li>
                                            <li><a href="homepages/homepage4.html">Spa Shop</a></li>
                                            <li><a href="homepages/homepage5.html">Mask Shop</a></li>
                                            <li><a href="homepages/homepage6.html">Skincare Shop</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a class="dropdown-menu-controller" href="#">Shop<span class="dropable-icon"><i
                                                    class="fas fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <ul class="dropdown-menu__col">
                                                <li><a href="shop-fullwidth-4col.html">Shop Fullwidth 4 Columns</a></li>
                                                <li><a href="shop-fullwidth-5col.html">Shop Fullwidth 5 Columns</a></li>
                                                <li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left
                                                        Sidebar</a></li>
                                                <li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right
                                                        Sidebar</a></li>
                                            </ul>
                                            <ul class="dropdown-menu__col">
                                                <li><a href="shop-grid-4col.html">Shop grid 4 Columns</a></li>
                                                <li><a href="shop-grid-3col.html">Shop Grid 3 Columns</a></li>
                                                <li><a href="shop-grid-sidebar.html">Shop Grid Sideber</a></li>
                                                <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                                            </ul>
                                            <ul class="dropdown-menu__col">
                                                <li><a href="#">Product Detail</a></li>
                                                <li><a href="cart.html">Shopping cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wish list</a></li>
                                            </ul>
                                            <ul class="dropdown-menu__col -banner">
                                                <a href="shop-fullwidth-4col.html"><img
                                                        src="{{url('public/assets')}}/images/header/dropdown-menu-banner.png"
                                                        alt="New product banner.html" /></a>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="navigation-sidebar__footer">
                                <select class="customed-select -borderless" name="currency">
                                    <option value="usd">USD</option>
                                    <option value="vnd">VND</option>
                                    <option value="yen">YEN</option>
                                </select>
                                <select class="customed-select -borderless" name="currency">
                                    <option value="en">EN</option>
                                    <option value="vi">VI</option>
                                    <option value="jp">JP</option>
                                </select>
                            </div>
                            <div class="social-icons ">
                                <ul>
                                    <li><a href="https://www.facebook.com/" style="'color: undefined'"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com" style="'color: undefined'"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com/" style="'color: undefined'"><i
                                                class="fab fa-instagram"> </i></a></li>
                                    <li><a href="https://www.youtube.com/" style="'color: undefined'"><i
                                                class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="quick-view-modal">
        <div class="product-quickview">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="product-detail__slide-one">
                        <div class="slider-wrapper">
                            <div class="slider-item"><img src="{{url('public/assets')}}/images/product/1.png"
                                    alt="Product image" /></div>
                            <div class="slider-item"><img src="{{url('public/assets')}}/images/product/2.png"
                                    alt="Product image" /></div>
                            <div class="slider-item"><img src="{{url('public/assets')}}/images/product/3.png"
                                    alt="Product image" /></div>
                            <div class="slider-item"><img src="{{url('public/assets')}}/images/product/4.png"
                                    alt="Product image" /></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="product-detail__content">
                        <div class="product-detail__content__header">
                            <h5>eyes</h5>
                            <h2>The expert mascaraa</h2>
                        </div>
                        <div class="product-detail__content__header__comment-block">
                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <p>03 review</p><a href="#">Write a reviews</a>
                        </div>
                        <h3>$35.00</h3>
                        <div class="divider"></div>
                        <div class="product-detail__content__footer">
                            <ul>
                                <li>Brand:gucci
                                </li>
                                <li>Product code: PM 01
                                </li>
                                <li>Reward point: 30
                                </li>
                                <li>Availability: In Stock</li>
                            </ul>
                            <div class="product-detail__colors"><span>Color:</span>
                                <div class="product-detail__colors__item" style="background-color: #8B0000"></div>
                                <div class="product-detail__colors__item" style="background-color: #4169E1"></div>
                            </div>
                            <div class="product-detail__controller">
                                <div class="quantity-controller -border -round">
                                    <div class="quantity-controller__btn -descrease">-</div>
                                    <div class="quantity-controller__number">2</div>
                                    <div class="quantity-controller__btn -increase">+</div>
                                </div>
                                <div class="add-to-cart -dark"><a class="btn -round -red" href="#"><i
                                            class="fas fa-shopping-bag"></i></a>
                                    <h5>Add to cart</h5>
                                </div>
                                <div class="product-detail__controler__actions"></div><a class="btn -round -white"
                                    href="#"><i class="fas fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--build:js assets/js/main.min.js-->
    <script src="{{url('public/assets')}}/js/jquery-3.5.1.min.js"></script>
    <script src="{{url('public/assets')}}/js/parallax.min.js"></script>
    <script src="{{url('public/assets')}}/js/slick.min.js"></script>
    <script src="{{url('public/assets')}}/js/all.min.js"></script>
    <script src="{{url('public/assets')}}/js/fontawesome.min.js"></script>
    <script src="{{url('public/assets')}}/js/solid.min.js"></script>
    <script src="{{url('public/assets')}}/js/regular.min.js"></script>
    <script src="{{url('public/assets')}}/js/brands.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.validate.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.modal.min.js"></script>
    <script src="{{url('public/assets')}}/js/bootstrap-drawer.min.js"></script>
    <script src="{{url('public/assets')}}/js/jquery.countdown.min.js"></script>
    <script src="{{url('public/assets')}}/js/main.min.js"></script>
    @yield('js')
</body>

</html>