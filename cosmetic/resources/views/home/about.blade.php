<x-nav-bar />
<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>About us</h2>
            <ul>
                <li>Home</li>
                <li class="active">About us</li>
            </ul>
        </div>
    </div>
    <div class="about">
        <div class="introduction-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="introduction-one-image">
                            <div class="introduction-one-image__detail">
                                <img src="{{url('public/uploads')}}/{{$data['image']}}" width="400" alt="background" />

                            </div>
                            <div class="introduction-one-image__background">
                                <div class="background__item">
                                    <div class="wrapper" ref="{bg1}"><img data-depth="0.5"
                                            src="{{url('public')}}/assets/images/introduction/IntroductionOne/bg1.png"
                                            alt="background" /></div>
                                </div>
                                <div class="background__item">
                                    <div class="wrapper" ref="{bg2}"><img data-depth="0.3" data-invert-x=""
                                            data-invert-y=""
                                            src="{{url('public')}}/assets/images/introduction/IntroductionOne/bg2.png"
                                            alt="background" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="introduction-one-content">
                            <h5>ABOUT<span> ELIAH</span></h5>
                            <div class="section-title " style="margin-bottom: 1.875em">
                                <h2>{{$data['name']}} </h2><img
                                    src="{{url('public')}}/assets/images/introduction/IntroductionOne/content-deco.png"
                                    alt="Decoration" />
                            </div>
                            <p>{!! $data['description'] !!}</p><a class="btn -white" href="#">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial">
            <div class="section-title -center" style="margin-bottom: 3.125rem">
                <h5>TESTIMONIAL</h5>
                <h2>What People Say?</h2><img
                    src="{{url('public')}}/assets/images/introduction/IntroductionOne/content-deco.png"
                    alt="Decoration" />
            </div>
            <div class="container">
                <div class="testimonial-slider">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="slide-nav">
                                <div class="slide-nav__wrapper">
                                    <div class="slide-nav__item" key="0"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/1.png"
                                            alt="Customer avatar" /></div>
                                    <div class="slide-nav__item" key="1"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/2.png"
                                            alt="Customer avatar" /></div>
                                    <div class="slide-nav__item" key="2"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/3.png"
                                            alt="Customer avatar" /></div>
                                    <div class="slide-nav__item" key="3"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/4.png"
                                            alt="Customer avatar" /></div>
                                    <div class="slide-nav__item" key="4"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/5.png"
                                            alt="Customer avatar" /></div>
                                    <div class="slide-nav__item" key="5"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/6.png"
                                            alt="Customer avatar" /></div>
                                    <div class="slide-nav__item" key="6"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/7.png"
                                            alt="Customer avatar" /></div>
                                    <div class="slide-nav__item" key="7"><img
                                            src="{{url('public')}}/assets/images/testimonial/TestimonialOne/8.png"
                                            alt="Customer avatar" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="slide-for">
                                <div class="slide-for__wrapper">
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Alexander Ball</h3>
                                                <h5>New York</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Izabel Watt</h3>
                                                <h5>Michigan</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Rachel Regan</h3>
                                                <h5>Sydney</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Malika Kenny</h3>
                                                <h5>Ha Noi</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Javier Bender</h3>
                                                <h5>Tokyo</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Paul Brookes</h3>
                                                <h5>Berlin</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Bilaal Gunn</h3>
                                                <h5>Denver</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                    <div class="slide-for__item">
                                        <div class="slide-for__item__header">
                                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                                            <div class="customer__info">
                                                <h3>Musab O'Sullivan</h3>
                                                <h5>Paris</h5>
                                            </div>
                                            <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i></div>
                                        </div>
                                        <p class="slide-for__item__content">I love my lash tint! I don't have extremely
                                            blonde lashes, but I do like that they can be even darker than they are. It
                                            makes my eyes stand out more and I love the way it looks! Now, I just need
                                            to add on a
                                            bit of mascara for length and I am set.</p>
                                    </div>
                                </div>
                                <div class="testimonial-one__slider-control"><a class="prev" href="#"><i
                                            class="fa fa-angle-left"> </i> Prev</a><a class="next" href="#">Next <i
                                            class="fa fa-angle-right"> </i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="introduction-nine">
            <div class="introduction-nine__logos">
                <div class="container">
                    <div class="introduction-nine__logos-slide">
                        <div class="slide__item"><img
                                src="{{url('public')}}/assets/images/introduction/IntroductionNine/1.png"
                                alt="Brand item" /></div>
                        <div class="slide__item"><img
                                src="{{url('public')}}/assets/images/introduction/IntroductionNine/2.png"
                                alt="Brand item" /></div>
                        <div class="slide__item"><img
                                src="{{url('public')}}/assets/images/introduction/IntroductionNine/3.png"
                                alt="Brand item" /></div>
                        <div class="slide__item"><img
                                src="{{url('public')}}/assets/images/introduction/IntroductionNine/4.png"
                                alt="Brand item" /></div>
                        <div class="slide__item"><img
                                src="{{url('public')}}/assets/images/introduction/IntroductionNine/5.png"
                                alt="Brand item" /></div>
                        <div class="slide__item"><img
                                src="{{url('public')}}/assets/images/introduction/IntroductionNine/6.png"
                                alt="Brand item" /></div>
                        <div class="slide__item"><img
                                src="{{url('public')}}/assets/images/introduction/IntroductionNine/7.png"
                                alt="Brand item" /></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="introduction-nine__content">
                    <h3>New items are <br />released weekly.</h3><a class="btn -white" href="#">ALL NEW ITEMS</a>
                </div>
            </div>
        </div>
        <div class="mb-100">
            <div class="benefits">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="benefits__item">
                                <div class="benefits__item__icon"><img
                                        src="{{url('public')}}/assets/images/benefits/1.png" alt="Free Shipping" />
                                </div>
                                <div class="benefits__item__content">
                                    <h5>Free Shipping</h5>
                                    <p>Free shipping on all order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="benefits__item">
                                <div class="benefits__item__icon"><img
                                        src="{{url('public')}}/assets/images/benefits/2.png" alt="Valuable Gifts" />
                                </div>
                                <div class="benefits__item__content">
                                    <h5>Valuable Gifts</h5>
                                    <p>Free gift after every 10 order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="benefits__item">
                                <div class="benefits__item__icon"><img
                                        src="{{url('public')}}/assets/images/benefits/3.png" alt="All Day Support" />
                                </div>
                                <div class="benefits__item__content">
                                    <h5>All Day Support</h5>
                                    <p>Call us: +01 234 567 89</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="benefits__item">
                                <div class="benefits__item__icon"><img
                                        src="{{url('public')}}/assets/images/benefits/4.png" alt="Seasonal Sale" />
                                </div>
                                <div class="benefits__item__content">
                                    <h5>Seasonal Sale</h5>
                                    <p>Discounts up to 50% on all</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-two">
        <div class="instagram-two-slider">
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public')}}/assets/images/instagram/InstagramTwo/1.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public')}}/assets/images/instagram/InstagramTwo/2.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public')}}/assets/images/instagram/InstagramTwo/3.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public')}}/assets/images/instagram/InstagramTwo/4.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public')}}/assets/images/instagram/InstagramTwo/5.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public')}}/assets/images/instagram/InstagramTwo/6.png" alt="Instagram image" /></a>
        </div>
    </div>

</div>

<x-footer />