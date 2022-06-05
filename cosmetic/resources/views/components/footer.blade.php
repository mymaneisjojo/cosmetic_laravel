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
                        <li><a href="https://twitter.com" style="'color: undefined'"><i class="fab fa-twitter"></i></a>
                        </li>
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
                                    <li><a href="#">My account</a></li>
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
                        <div class="payment-methods"><img src="assets/images/footer/payment.png"
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



<script src="{{url('public/assets')}}/js/all.min.js"></script>
<script src="{{url('public/assets')}}/js/bootstrap-drawer.min.js"></script>
<script src="{{url('public/assets')}}/js/brands.min.js"></script>
<script src="{{url('public/assets')}}/js/fontawesome.min.js"></script>

<script src="{{url('public/assets')}}/js/jquery-3.5.1.min.js"></script>
<script src="{{url('public/assets')}}/js/jquery.countdown.min.js"></script>
<script src="{{url('public/assets')}}/js/jquery.modal.min.js"></script>
<script src="{{url('public/assets')}}/js/jquery.validate.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{url('public/assets')}}/js/parallax.min.js"></script>
<script src="{{url('public/assets')}}/js/regular.min.js"></script>

<script src="{{url('public/assets')}}/js/slick.min.js"></script>
<script src="{{url('public/assets')}}/js/solid.min.js"></script>
<script src="{{url('public/assets')}}/js/owl.carousel.js"></script>
<script src="{{url('public/assets')}}/js/main.min.js"></script>
<script src="{{url('public/assets')}}/js/main1.min.js"></script>
<script>

$('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });


    $('.btn-tab').click(function() {
    var tid = $(this).attr('src');
    img_change.src = tid;
    });

    //tăng giảm số lượng
    var number = 1;
    $('.btn-qty').click(function(){
        let value = $(this).val();
        number = parseInt($(this).parents('.buttons_added').find('.input-qty').val());
        if(value == '+'){
            number += 1;
        }else{
            if(number == 1)
                number = number;
            else
                number -= 1;
        }
        $(this).parents('.buttons_added').find('.input-qty').val(number);
    });

</script>
<!--endbuild-->
</body>

</html>