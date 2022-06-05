<x-nav-bar />
<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Shop</h2>
            <ul>
                <li>Home</li>
                <li>Shop</li>
                <li class="active">Product Detail</li>
            </ul>
        </div>
    </div>
    <div class="product-detail">
        <div class="container">
            <div class="row" style="margin-top: 100px;">
                <div class="col-12 col-md-6">
                    <img src="{{url('public/uploads')}}/{{$product->image}}" style="width: 555px; height:730px" alt=""
                        id="img_change" class="tab-item">

                    <div class="row mt-5">
                        <div class="col-3 col-md-3">
                            <img src="{{url('public/uploads')}}/{{$product->image}}" style="width: 122px; height:120px"
                                alt="" class="btn-tab">
                        </div>
                        @foreach($image as $img)
                        <div class="col-3 col-md-3">
                            <img src="{{url('public/uploads')}}/{{$img->name}}" style="width: 122px; height:120px"
                                alt="" class="btn-tab">
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="product-detail__content">
                        <div class="product-detail__content">
                            <div class="product-detail__content__header">
                                <h5>{{$product->cat->name}}</h5>
                                <h2>{{$product->name}}</h2>
                            </div>
                            <div class="product-detail__content__header__comment-block">
                                <div class="rate" style="color:chocolate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                </div>
                                <p>03 review</p><a href="#">Write a reviews</a>
                            </div>
                            <?php $sale = $product->sale_price > 0 ? $product->sale_price : $product->price ?>
                            <h3>${{$sale}}</h3>
                            <div class="divider"></div>
                            <div class="product-detail__content__footer">
                                <ul>
                                    <li>Brand:{{$product->bra->name}}
                                    </li>

                                    <li>Reward point: 30
                                    </li>
                                    <li>Availability: In Stock</li>
                                </ul>

                                <form id="add-to-cart" action="{{route('cart.add', $product->id)}}">
                                    <label for="exampleInputEmail1">Color: </label>
                                    @foreach($colors as $color)

                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="color" value="{{$color->id}}" oninvalid="alert('Vui long chon mau sac');" required="required">
                                            {{$color->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                    <div class="product-detail__controller">
                                       

                                        <div class="buttons_added">
                                            <input class="btn-qty minus is-form" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1" name="quantity">
                                            <input class="btn-qty plus is-form" type="button" value="+">
                                        </div>

                                        <div class="col-md-6">

                                            <div class="add-to-cart -dark">
                                                <button class="btn -round -red btn-add-to-cart"><i class="fas fa-shopping-bag"></i>
                                                </button>
                                                <h5>Add to cart</h5>
                                            </div>
                                        </div>
                                        <div class="product-detail__controler__actions"></div><a
                                            class="btn -round -white" href="#"><i class="fas fa-heart"></i></a>
                                    </div>
                                </form>

                                <div class="divider"></div>
                                <div class="product-detail__content__tab">
                                    <ul class="tab-content__header">
                                        <li class="tab-switcher active" data-tab-index="0" tabindex="0">Description</li>
                                        <li class="tab-switcher" data-tab-index="1" tabindex="0">Shipping &amp; Returns
                                        </li>
                                        <li class="tab-switcher" data-tab-index="2" tabindex="0">Reviews ( 03 )</li>
                                    </ul>
                                    <div id="allTabsContainer">
                                        <div class="tab-content__item -description" data-tab-index="0" style="">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                                lacus vel facilisis.</p>
                                        </div>
                                        <div class="tab-content__item -ship" data-tab-index="1" style="display: none;">
                                            <h5><span>Ship to</span>New york</h5>
                                            <ul>
                                                <li>Standard Shipping on order over 0kg - 5kg. <span>+10.00</span></li>
                                                <li>Heavy Goods Shipping on oder over 5kg-10kg . <span>+20.00</span>
                                                </li>
                                            </ul>
                                            <h5>Delivery &amp; returns</h5>
                                            <p>We diliver to over 100 countries around the word. For full details of the
                                                delivery options we offer, please view our Delivery information.</p>
                                        </div>
                                        <div class="tab-content__item -review" data-tab-index="2"
                                            style="display: none;">
                                            <div class="review">
                                                <div class="review__header">
                                                    <div class="review__header__avatar"><img
                                                            src="https://i1.wp.com/metro.co.uk/wp-content/uploads/2020/03/GettyImages-1211127989.jpg?quality=90&amp;strip=all&amp;zoom=1&amp;resize=644%2C416&amp;ssl=1"
                                                            alt="Reviewer avatar"></div>
                                                    <div class="review__header__info">
                                                        <h5>Lionel Messi</h5>
                                                        <p>Mar 17, 2020</p>
                                                    </div>
                                                    <div class="review__header__rate">
                                                        <div class="rate" style="color:chocolate;" ><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i class="far fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="review__content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore.</p><a class="review__report" href="#">Report as
                                                    Inappropriate</a>
                                            </div>
                                            <form>
                                                <h5>Write a review</h5>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="input-validator">
                                                            <input type="text" name="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="input-validator">
                                                            <input type="text" name="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="input-validator">
                                                            <textarea name="message" placeholder="Message"
                                                                rows="5"></textarea>
                                                        </div><span class="input-error"></span>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn -dark">Write a review
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-slide">
        <div class="container">
            <div class="section-title -center" style="margin-bottom: 1.875em">
                <h2>Beauty Products</h2><img
                    src="{{url('public/assets')}}/images/introduction/IntroductionOne/content-deco.png"
                    alt="Decoration" />
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">

                    @foreach($prodNew as $np)
                    <div class="item">
                        <div class="product">
                            <div class="image-pro">
                                <img src="{{url('public/uploads')}}/{{$np->image}}" />
                                <div class="product-overlay">
                                    <img src="{{url('public/uploads')}}/{{$np->image}}" alt="" class="product-image">
                                </div>
                                <div class="image-hover" style="background-color: rgb(255, 255, 255);height: 70px;">
                                    <div class="row" style="padding:20px 0px 10px 50px;">
                                        <div class="product-btn">
                                            <a class="item-round-cart " href="#"><i
                                                    class="fas fa-shopping-bag fa-xs"></i></a>
                                        </div>
                                        <div class="product-btn">
                                            <a class="item-round" href="#"><i class="fas fa-eye fa-xs"></i></a>
                                        </div>
                                        <div class="product-btn">
                                            <a class="item-round-love fa-xs" href="#">
                                                <i class="fas fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-content-header pt-4">
                                    <div class="row">
                                        <h5 class="pl-3">{{$np->cat->name}}</h5>
                                        <div class="rate" style="margin-left: 100px; color: chocolate;">
                                            <i class="fas fa-star" style="font-size: 10px"></i>
                                            <i class="fas fa-star" style="font-size: 10px"></i>
                                            <i class="fas fa-star" style="font-size: 10px"></i>
                                            <i class="fas fa-star" style="font-size: 10px"></i>
                                            <i class="fas fa-star" style="font-size: 10px"></i>

                                        </div>
                                    </div>
                                </div>
                                <a href="" style="text-decoration: none; color: black">{{$np->name}}</a>
                                <div class="product-content-footer">
                                    <?php $sale = $np->sale_price > 0 ? $np->sale_price : $np->price ?>
                                    <b>${{$sale}}</b>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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



