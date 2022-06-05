<x-nav-bar />

<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Services</h2>
            <ul>
                <li>Home</li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
    <div class="shop">
        <div class="container">


            @foreach($data as $k => $item )

            @if($k % 2==0)
            <div class="services__item">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="services__item__image">
                            <div class="services__item__image__background"><img
                                    src="{{url('public/assets')}}/images/introduction/IntroductionThree/bg.png"
                                    alt="background" />
                            </div>
                            <div class="services__item__image__detail">
                                <div class="image__item">
                                    <div class="wrapper"><img data-depth="0.3"
                                            src="{{url('public/uploads')}}/{{$item->image}}" alt="image" /></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="services__item__content">
                            <div class="services__item__order">
                                <h3>0{{$k+1}}</h3>
                            </div>
                            <h2 class="services__item__title">{{ $item->summary}}</h2>
                            <p class="services__item__description">{!! $item['content'] !!}</p>
                            <ul>
                                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur.</li>
                                <li><i class="fas fa-check"></i>Adipiscing elit, sed do eiusmod tempor.</li>
                                <li><i class="fas fa-check"></i>Incididunt ut labore et dolore magna aliqua.</li>
                                <li><i class="fas fa-check"></i>Quis ipsum suspendisse ultrices gravida.</li>
                            </ul><a class="btn -white" href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="services__item -reverse">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-2">
                        <div class="services__item__image">
                            <div class="services__item__image__background"><img
                                    src="{{url('public/assets')}}/images/introduction/IntroductionThree/bg.png"
                                    alt="background" />
                            </div>
                            <div class="services__item__image__detail">
                                <div class="image__item">
                                    <div class="wrapper"><img data-depth="0.3"
                                            src="{{url('public/uploads')}}/{{$item->image}}" alt="image" /></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order-md-1">
                        <div class="services__item__content">
                            <div class="services__item__order">
                                <h3>0{{$k+1}}</h3>
                            </div>
                            <h2 class="services__item__title">{{ $item->summary}}</h2>
                            <p class="services__item__description">{!! $item['content'] !!}</p>
                            <ul>
                                <li><i class="fas fa-check"></i>Lorem ipsum dolor sit amet, consectetur.</li>
                                <li><i class="fas fa-check"></i>Adipiscing elit, sed do eiusmod tempor.</li>
                                <li><i class="fas fa-check"></i>Incididunt ut labore et dolore magna aliqua.</li>
                                <li><i class="fas fa-check"></i>Quis ipsum suspendisse ultrices gravida.</li>
                            </ul><a class="btn -white" href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @endforeach

            <div class="cta -style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mx-auto">
                            <div class="cta__form">
                                <div class="section-title " style="margin-bottom: 1.875em">
                                    <h2>Book Service</h2><img
                                        src="{{url('public/assets')}}/images/introduction/IntroductionOne/content-deco.png"
                                        alt="Decoration" />
                                </div>
                                <form class="cta__form__detail validated-form"
                                    action="{{route('service.post_service')}}" method="post">
                                    @csrf

                                    <div class="input-validator">
                                        <select class="customed-select required" name="service_id">
                                            <option value="" hidden="hidden">Choose a services</option>
                                            @foreach($choose as $op)
                                            <option value="{{$op->id}}">{{$op -> summary}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-validator">
                                        <input name="cus_date" type="date">
                                    </div>

                                    <input type="hidden" name="customer_id"
                                        value="{{Auth::guard('cus')->user()->firtsName}} ">
                                    <button type="submit" class="btn -light-red">Appoitment
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer />