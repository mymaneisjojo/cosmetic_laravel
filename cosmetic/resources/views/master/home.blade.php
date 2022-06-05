<x-nav-bar/>
    <div id="content">
        
        @yield('carousel')
        @yield('service')

        <div class="product-slide">
            <div class="container">
                <div class="section-title -center" style="margin-bottom: 1.875em">
                    <h2>Beauty Products</h2><img
                        src="{{url('public/assets')}}/images/introduction/IntroductionOne/content-deco.png"
                        alt="Decoration" />
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme">

                    @yield('product')
                    </div>
                </div>
            </div>
        </div>
        @yield('comment')
      
        <div class="cta -style-1"
            style="background-image: url(&quot;{{url('public/assets')}}/images/cta/CTAOne/1.png&quot;)">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <div class="cta__form">
                            <div class="section-title " style="margin-bottom: 1.875em">
                                <h2>Book Service</h2><img
                                    src="{{url('public/assets')}}/images/introduction/IntroductionOne/content-deco.png"
                                    alt="Decoration" />
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
<x-footer/>