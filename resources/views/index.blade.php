@extends('layouts.app')

@section('content')

<section class="swiper-js-container background-image-holder" data-holder-type="fullscreen" data-holder-offset="" style="height: 450px;">
    <div class="swiper-container swiper-container-horizontal" data-swiper-autoplay="true" data-swiper-effect="slide" data-swiper-items="1" data-swiper-space-between="0">
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
            <!-- Slide -->
            {{-- <div class="swiper-slide swiper-slide-active" data-swiper-autoplay="8000" style="width: 1280px;">
                <div class="holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(../../../assets/images/backgrounds/slider/img-1.jpg); background-position: bottom bottom;">
                    <span class="mask mask-dark--style-2"></span>
                    <div class="container d-flex align-items-center">
                        <div class="col">
                            <div class="row text-xs-center text-sm-left">
                                <div class="col-10 col-sm-7 col-md-7">
                                    <h2 class="heading heading-1 strong-500 c-white animated animation-ended" data-animation-in="zoomIn" data-animation-delay="200">
                                        Creativity is intelligence having fun.
                                    </h2>
                                    <p class="lead mt-4 c-white animated animation-ended" data-animation-in="fadeInUp" data-animation-delay="1000">
                                        With so many features and page layouts, there is no way you can't transform your ideas into reality.
                                    </p>

                                    <a href="#" class="btn btn-styled btn-sm btn-base-1 btn-circle mt-4 animated animation-ended" data-animation-in="fadeInUp" data-animation-delay="1800" data-scroll-to="#scrollToSection">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Slide -->
            <div class="swiper-slide swiper-slide-next" data-swiper-autoplay="8000" style="width: 1280px;">
                <div class="holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(http://kawasaki-motors.com.vn/wp-content/uploads/2017/02/17ZR900B_44SBK2DRF00D_C_003-1.png); background-position: bottom center;">
                    <span class="mask mask-dark--style-2"></span>
                    <div class="container d-flex align-items-center">
                        <div class="col">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="heading heading-xl strong-400 text-uppercase animated" data-animation-in="zoomIn" data-animation-delay="200">
                                        <strong>Z900 ABS return</strong>
                                    </h2>
                                    <p class="lead animated" data-animation-in="fadeInUp" data-animation-delay="1000">
                                        A cutting edge rider-focused Supernaked wih the sublime balance of power and handling. The tubular trellis frame houses a willing and responsive 4-Cylinder engine while the styling and rider experience reflect a refined and raw feeling that only Z riders can experience.
                                    </p>

                                    {{-- <a href="https://goo.gl/9BbH7R" class="btn btn-styled btn-white btn-circle mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="1800">Get started</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide swiper-slide-next" data-swiper-autoplay="8000" style="width: 1280px;">
                <div class="holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(http://kawasaki-motors.com.vn/wp-content/uploads/2016/05/bnr-h2r-new.jpg); background-position: bottom center;">
                    <span class="mask mask-dark--style-2"></span>
                    <div class="container d-flex align-items-center">
                        <div class="col">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="heading heading-xl strong-400 text-uppercase animated" data-animation-in="zoomIn" data-animation-delay="200">
                                        KAWASAKI <strong>NINJA H2R</strong>
                                    </h2>
                                    <p class="lead animated" data-animation-in="fadeInUp" data-animation-delay="1000">
                                       Set to be the pinnacle of motorcycle performance, the Ninja H2R is a supercharged motorcycle masterpiece. Created with cooperation from across the engineering and technology scope of Kawasaki heavy industries, the Ninja H2R matches cutting-edge engine, performance, the highest quality chassis dynamics and a host of craftsmanship details to create a new two-wheel icon.
                                    </p>

                                    {{-- <a href="https://goo.gl/9BbH7R" class="btn btn-styled btn-white btn-circle mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="1800">Get started</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide swiper-slide-next" data-swiper-autoplay="8000" style="width: 1280px;">
                <div class="holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(http://kawasaki-motors.com.vn/wp-content/uploads/2016/05/bnr-zx10r.jpg); background-position: bottom center;">
                    <span class="mask mask-dark--style-2"></span>
                    <div class="container d-flex align-items-center">
                        <div class="col">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="heading heading-xl strong-400 text-uppercase animated" data-animation-in="zoomIn" data-animation-delay="200">
                                        KAWASAKI <strong>NINJA ZX-10R</strong>
                                    </h2>
                                    <p class="lead animated" data-animation-in="fadeInUp" data-animation-delay="1000">
                                        The Kawasaki Racing Team and Kawasaki factory in Japan forged a performance partnership to develop the new Ninja ZX-10R. Tested, refined and approved by World Champion’s Jonathan Rea and Tom Sykes, this is as close as it gets to being part of the official Kawasaki World Superbike team. Ninja ZX-10R Get Closer.
                                    </p>

                                    {{-- <a href="https://goo.gl/9BbH7R" class="btn btn-styled btn-white btn-circle mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="1800">Get started</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide swiper-slide-next" data-swiper-autoplay="8000" style="width: 1280px;">
                <div class="holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(http://kawasaki-motors.com.vn/wp-content/uploads/2016/05/bnr-versys1000abs.jpg); background-position: bottom center;">
                    <span class="mask mask-dark--style-2"></span>
                    <div class="container d-flex align-items-center">
                        <div class="col">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h2 class="heading heading-xl strong-400 text-uppercase animated" data-animation-in="zoomIn" data-animation-delay="200">
                                        KAWASAKI <strong>VERSYS 1000</strong>
                                    </h2>
                                    <p class="lead animated" data-animation-in="fadeInUp" data-animation-delay="1000">
                                        On any-street, the new Versys 1000 offers maximum riding enjoyment. Solo or two-up, around the corner or around the globe, a unique combination of a highly responsive In-Line Four engine plus a nimble chassis is a recipe for riding fun. Add in the upright riding position and you have a package that is an ideal city roamer that really comes into its own on twisty mountain roads. 
                                    </p>

                                    {{-- <a href="https://goo.gl/9BbH7R" class="btn btn-styled btn-white btn-circle mt-5 animated" data-animation-in="fadeInUp" data-animation-delay="1800">Get started</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>

        <!-- Add Arrows -->
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-button swiper-button-prev swiper-button-disabled"></div>
    </div>
</section>


                    <section class="slice bg-minimalist">
                        <div class="container">
                            <div class="row align-items-center mb-5">
                                <div class="col-md-6">
                                    <div class="text-center text-md-left">
                                        <h3 class="heading heading-3 strong-500 text-capitalize">
                                            Sản phẩm hiện có
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row-wrapper">
                                @foreach ($motos->chunk(4) as $chunk)
                                    <div class="row cols-xs-space cols-md-space cols-md-space">
                                        @foreach ($chunk as $moto)
                                            <div class="col-lg-3 col-md-6">
                                                <div class="block product no-border z-depth-2--hover">
                                                    <div class="block-image">
                                                        <a href="{{ route('moto.detail', $moto->slug) }}">
                                                            <img src="{{ $moto->images[0]->image }}">
                                                        </a>
                                                    </div>

                                                    <div class="block-body px-0 text-center">
                                                        <h3 class="heading heading-6 strong-500 text-capitalize">
                                                            <a href="{{ route('moto.detail', $moto->slug) }}">
                                                                {{ $moto->name }}
                                                            </a>
                                                        </h3>
                                                        <div class="price-wrapper">
                                                            <a href="{{ route('home.list', $moto->category->slug) }}" class="price heading-6 c-gray-light strong-400">{{ $moto->category->name }}</a>
                                                        </div>
                                                        <div class="price-wrapper">
                                                            <a class="price heading-6 c-gray-light strong-400" href="{{ route('home.contact.index') }}">Liên hệ</a>
                                                        </div>
                                                    </div>

                                                    <div class="product-actions--a product-actions--3" data-animation-in="slideInLeft"  data-animation-out="slideOutLeft">
                                                        <button type="button" class="btn-product-action">
                                                            <i class="ion-bag"></i>
                                                        </button>

                                                        <button type="button" class="btn-product-action">
                                                            <i class="ion-ios-heart-outline"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

                    <!-- FOOTER -->
@endsection
