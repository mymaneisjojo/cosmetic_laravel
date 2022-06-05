<x-nav-bar />

<div id="content">
    <div class="breadcrumb">
        <div class="container">
            <h2>Shop</h2>
            <ul>
                <li>Home</li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
    <div class="shop">
        <div class="container-full-half">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    <div class="shop-sidebar">
                        <div class="shop-sidebar__content">
                        <form action="" method="get">

                                <div class="shop-sidebar__section -categories">
                                    <div class="section-title -style1 -medium" style="margin-bottom:1.875em">
                                        <h2>Categories</h2><img
                                            src="{{('public/assets')}}/images/introduction/IntroductionOne/content-deco.png"
                                            alt="Decoration">
                                    </div>



                                        <select name="cat" id="">
                                            <option value="">All Category</option>
                                            @foreach($cats_global as $catg)
                                            <option value="{{$catg->id}}"
                                                {{$catg->id == request()->cat ? 'selected' : ''}}>{{$catg->name}}
                                            </option>
                                            @endforeach
                                        </select>
 
                                </div>
                                <div class="shop-sidebar__section -refine">
                                    <div class="section-title -style1 -medium" style="margin-bottom:1.875em">
                                        <h2>Refine Search</h2><img
                                            src="{{('public/assets')}}/images/introduction/IntroductionOne/content-deco.png"
                                            alt="Decoration">
                                    </div>
                                    <div class="shop-sidebar__section__item">
                                        <h5>Brand</h5>
                                        <ul>
                                            @foreach($brands as $bra)
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" name="bra" value="{{$bra->id}}">{{$bra->name}}
                                                    </label>
                                                </li>
                                                @endforeach

                                            </ul>
                                    </div>
                                   
                                    <button type="submit" class="btn -white">Fill</button>

                                </div>
                                </form>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                    
                    <div class="shop-products">
                        <div class="shop-products__gird" style="display: none;">
                            <div class="row mx-n1 mx-xl-n3">
                                @foreach($prodNew as $np)

                                <div class="col-6 col-lg-4 col-xl-3 px-1 px-xl-3">

                                    <div class="product ">

                                        <div class="image-pro">
                                            <img src="{{url('public/uploads')}}/{{$np->image}}"
                                                style="width: 263px; height:333px" />
                                            <div class="product-overlay">
                                                <img src="{{url('public/uploads')}}/{{$np->image}} " alt=""
                                                    style="width: 263px; height:333px" class="product-image">
                                            </div>
                                            <div class="image-hover"
                                                style="background-color: rgb(255, 255, 255);height: 70px;">
                                                <div class="row" style="padding:20px 0px 10px 50px;">
                                                    <div class="product-btn">
                                                        <a class="item-round-cart " href="#"><i
                                                                class="fas fa-shopping-bag fa-xs"></i></a>
                                                    </div>
                                                    <div class="product-btn">
                                                        <a class="item-round"
                                                            href="{{route('product_detail.index', ['id' => $np->id])}}"><i
                                                                class="fas fa-eye fa-xs"></i></a>
                                                    </div>
                                                    <div class="product-btn">
                                                        <a class="item-round-love fa-xs" href="">
                                                            <i class="fas fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-content-header pt-4">
                                                <div class="row">
                                                    <h5 class="pl-3 product-category">{{$np->cat->name}}</h5>
                                                    <div class="rate" style="margin-left: 50px; color: chocolate;">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-size : 20px">{{$np->name}}</p>
                                            <div class="product-content__footer">

                                                <h5 class="product-price--main">${{$np->sale_price}}</h5>
                                                <h5 class="product-price--discount">${{$np->price}}</h5>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                @endforeach

                            </div>
                        </div>
                        {{$prodNew->links()}}

                    </div>

                </div>


            </div>
        </div>

    </div>

</div>

<x-footer />