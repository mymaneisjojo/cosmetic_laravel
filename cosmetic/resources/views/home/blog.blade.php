<x-nav-bar />
<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Blog</h2>
            <ul>
                <li>Home</li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="blog-sidebar__section -search">
                            <form>
                                <input type="text" placeholder="Enter keyword" name="search" />
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-sidebar__section">
                            <h5 class="blog-sidebar__title">Follow me</h5>
                            <div class="social-icons -border -round -border--light-bg">
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

                        <div class="blog-sidebar__section -polular-post">

                            <h5 class="blog-sidebar__title">Popular post</h5>
                            @foreach ($cate as $item)
                            <div class="post-card-three">
                                <div class="post-card-three__image"><img
                                        src="{{url('public/uploads')}}/{{$item->image}}"></div>
                                <div class="post-card-three__content">
                                    <a href="{{route('blogdetails.index',$item->id)}}"> {{$item->name}}</a>
                                    <p>{{$item->created_at->format('d-m-Y')}}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="post-card-three">
                                <div class="post-card-three__image"><img
                                        src="{{url('public/assets')}}/images/blog/2.png"
                                        alt="The 8 Best Clay Masks For Acne Prone Skin" /></div>
                                <div class="post-card-three__content"><a href="/post-detail.html">The 8 Best Clay Masks
                                        For Acne Prone Skin</a>
                                    <p>2015-03-21</p>
                                </div>
                            </div>
                            <div class="post-card-three">
                                <div class="post-card-three__image"><img
                                        src="{{url('public/assets')}}/images/blog/3.png"
                                        alt="Well-ageing: Why is the skin matrisome important?" /></div>
                                <div class="post-card-three__content"><a href="/post-detail.html">Well-ageing: Why is
                                        the skin matrisome important?</a>
                                    <p>2015-03-22</p>
                                </div>
                            </div>
                            <div class="post-card-three">
                                <div class="post-card-three__image"><img
                                        src="{{url('public/assets')}}/images/blog/4.png"
                                        alt="6 Clay Masks That Combat Oily, Acne-Prone Skin" /></div>
                                <div class="post-card-three__content"><a href="/post-detail.html">6 Clay Masks That
                                        Combat Oily, Acne-Prone Skin</a>
                                    <p>2015-03-23</p>
                                </div>
                            </div> -->
                        </div>
                        <div class="blog-sidebar__section -newsletter">
                            <h5 class="blog-sidebar__title">News letter</h5>
                            <p>Subscribe to our newsletter a nd get our newest updates right on your inbox.</p>
                            <div class="subscribe-form blog-sidebar-newsletter">
                                <form class="mc-form">
                                    <input class="email" id="mc-form-email" type="email"
                                        placeholder="Enter your email" />
                                    <label for="agree">
                                        <input id="agree" type="checkbox" name="agree" />I agree to the terms &
                                        conditions
                                    </label>
                                    <button class="button">Subcribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="blog-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="post-card-featured">
                                    @foreach($data as $item)

                                    <div class="post-card-featured__image"> <img
                                            src="{{url('public/uploads')}}/{{$item->image}}"></div>
                                    <div class="post-card-featured__content">
                                        <div class="post-card-featured__content__date">
                                            <h5>{{$item->created_at->format('d')}}</h5>
                                            <p>{{$item->created_at->format('m')}}</p>
                                        </div>
                                        <div class="post-card-featured__content__detail">
                                            <div class="post-card-featured__info">
                                                <p>by <span>Lindsay Weinberg</span></p><a href="#">Beauty tips</a>
                                            </div><a class="post-card-featured-title"
                                                href="{{route('blogdetails.index',$item->id)}}">{{$item->name}}</a>
                                            </a>
                                            <p class="post-card-featured-description ">{!! $item->description !!}</p>
                                        </div>
                                    </div>

                                    @endforeach


                                </div>
                            </div>
                            @foreach ($old as $item)
                            <div class="col-12 col-md-6">
                                <div class="post-card-two">
                                    <div class="post-card-two__image"><img
                                            src="{{url('public/uploads')}}/{{$item->image}}">
                                        <div class="post-card-two__info">
                                            <div class="post-card-two__info__date">
                                                <h5>{{$item->created_at->format('d')}}</h5>
                                                <p>{{$item->created_at->format('m')}}</p>
                                            </div>
                                            <div class="post-card-two__info__detail">
                                                <p>by <span>Evelyn Tucker</span></p><a href="#">Make up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-card-two__content"> <a
                                            href="{{route('blogdetails.index',$item->id)}}">{{$item->name}}</a>
                                        <p>{!! $item->description !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                            <!-- <div class="col-12 col-md-6">
                                <div class="post-card-two">
                                    <div class="post-card-two__image"><img
                                            src="{{url('public/assets')}}/images/blog/3.png"
                                            alt="Well-ageing: Why is the skin matrisome important?" />
                                        <div class="post-card-two__info">
                                            <div class="post-card-two__info__date">
                                                <h5>05</h5>
                                                <p>Feb</p>
                                            </div>
                                            <div class="post-card-two__info__detail">
                                                <p>by <span>Jackson Hunter</span></p><a href="#">Skin care</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-card-two__content"><a href="/post-detail.html">Well-ageing: Why is
                                            the skin matrisome important?</a>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <ul class="paginator" >
                                <li class="page-item active">
                                    <button class="page-link">1</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link">2</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link"><i class="fa fa-angle-right"></i></button>
                                </li>
                            </ul> -->

                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    <div class="instagram-two" style="height:200px">
        <div class="instagram-two-slider">
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public/assets')}}/images/instagram/InstagramTwo/1.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public/assets')}}/images/instagram/InstagramTwo/2.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public/assets')}}/images/instagram/InstagramTwo/3.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public/assets')}}/images/instagram/InstagramTwo/4.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public/assets')}}/images/instagram/InstagramTwo/5.png" alt="Instagram image" /></a>
            <a class="slider-item" href="https://www.instagram.com/"><img
                    src="{{url('public/assets')}}/images/instagram/InstagramTwo/6.png" alt="Instagram image" /></a>
        </div>
    </div>

</div>

<x-footer />