<x-nav-bar />
<div id="content">
        <div class="breadcrumb">
            <div class="container">
                <h2>Blogdetail</h2>
                <ul>
                    <li>Home</li>
                    <li class="active">Blogdetail</li>
                </ul>
            </div>
        </div>
        <div class="shop">
            <div class="container">
                <div class="services__item">
                    <div class="row">
                  
                        <div class="col-12 col-md-6">
                            <div class="services__item__image">
                                <div class="services__item__image__background"><img src="{{url('public/assets')}}/images/introduction/IntroductionThree/bg.png" alt="background" /></div>
                                <div class="services__item__image__detail">
                                    <div class="image__item">
                                        <div class="wrapper"><img
                                        src="{{url('public/uploads')}}/{{$data['image']}}"></div>
                                    </div>
                                    <div class="image__item">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="services__item__content">
                                <div class="services__item__order">
                                    <h3>{{$data['id']}}</h3>
                                </div>
                                <h2 class="services__item__title">{{$data['name']}}</h2>
                                <p class="services__item__description">{!! $data['description'] !!}</p>
                                <ul>
                                    <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur.</li>
                                    <li><i class="fas fa-check"></i>Adipiscing elit, sed do eiusmod tempor.</li>
                                    <li><i class="fas fa-check"></i>Incididunt ut labore et dolore magna aliqua.</li>
                                    <li><i class="fas fa-check"></i>Quis ipsum suspendisse ultrices gravida.</li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="cta -style-1" style="background-image: url(&quot;assets/images/cta/CTAOne/1.png&quot;)">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <div class="cta__form">
                            <div class="section-title " style="margin-bottom: 1.875em">
                                <h2>Book Service</h2><img src="{{url('public/assets')}}/images/introduction/IntroductionOne/content-deco.png" alt="Decoration" />
                            </div>
                            <form class="cta__form__detail validated-form" action="#">
                                <div class="input-validator">
                                    <input type="text" placeholder="Your name" name="name" required="required" />
                                </div>
                                <div class="input-validator">
                                    <input type="text" placeholder="Your phone" name="phone" required="required" />
                                </div>
                                <div class="input-validator">
                                    <select class="customed-select required" name="service">
                    <option value="" hidden="hidden">Choose a services</option>
                    <option value="Spa">Spa</option>
                    <option value="Salon">Salon</option>
                    <option value="Nail">Nail</option>
                  </select>
                                </div>
                                <div class="input-validator">
                                    <select class="customed-select required" name="date">
                    <option value="" hidden="hidden">Choose a data</option>
                    <option value="Yesterday">Yesterday</option>
                    <option value="Today">Today</option>
                    <option value="Tomorow">Tomorow</option>
                  </select>
                                </div>
                                <button class="btn -light-red">Appoitment
                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<x-footer />