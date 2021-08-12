@extends('layout.layout')

@section("content")

<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                @foreach ($imageSlider as $slider)                    
                <div class="item-slide">
                    <img src="{{asset('images/slider/'.$slider->image)}}" alt="" class="img-slide" style="height: 50rem;">
                </div>
                @endforeach
            </div>
        </div>



        <!--On Sale-->
        {{-- <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box">On Sale</h3>
            <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                @foreach ($productss as $productt)
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="{{$productt['name']}}">
                            <figure><img src="{{ asset('/images/products/digital_01.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="group-flash">
                            <span class="flash-item new-label">new</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>

                    </div>
                    <div class="product-info">

                        <a href="#" class="product-name"><span>{{$productt['description']}}</span></a>
                        <div class="wrap-price"><span class="product-price">{{$productt['price']}}</span></div>
                    </div>
                </div>
                @endforeach

            </div>
        </div> --}}


        <!--Latest Products-->

        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="{{route('products.list')}}" class="link-banner banner-effect-2">
                    <figure><img src="/images/cover.jpg" width="1170" height="240" alt="" style="height: 30rem"></figure>
                </a>
            </div>
            
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                                @foreach ($latests as $latest)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('indexdetails', ['id' => $latest->id])}}" title="phone">
                                            <figure><img src="{{ url($latest->image) }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{route('indexdetails', ['id' => $latest->id])}}" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('indexdetails', ['id' => $latest->id])}}" class="product-name"><span style="text-transform:uppercase;">{{$latest->name }}</span></a>
                                        <div class="wrap-price"><span class="product-price">${{ $latest->price }}</span></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="/images/fashion-accesories-banner.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        {{-- @foreach($categories as $category)

                        <a href="{{route('showproduct',['catid' => $category['id']])}}" class="tab-control-item active">{{$category['name']}}</a>
                        @endforeach --}}
                    </div>
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="fashion_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                               

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span></span></a>
                                        <div class="wrap-price"><span class="product-price"></span></div>
                                    </div>
                                </div>
                               


                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1d">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>


@endsection