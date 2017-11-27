@extends('layouts.app')

@section('content')

<section class="slice sct-color-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="gallery-container">
                    <div id="slideshow" class="gallery-top no-padding bg-minimalist"><div class="desoslide-wrapper"><img class="img-responsive" src="../../../assets/images/prv/shop/home-deco/img-lg-1.png" style="opacity: 1;"></div></div>
                    <div id="slideshow_thumbs" class="swiper-js-container gallery-thumbs gallery-thumbs--style-1 mt-4">
                        <div class="swiper-container swiper-container-horizontal swiper-container-undefined" data-swiper-items="5" data-swiper-space-between="10" data-swiper-xs-items="3" data-swiper-xs-space-between="10" data-swiper-sm-items="4" data-swiper-sm-space-between="10">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" style="width: 100px; margin-right: 10px;">
                                    <a href="../../../assets/images/prv/shop/home-deco/img-lg-1.png" data-desoslide-index="0">
                                        <img src="../../../assets/images/prv/shop/home-deco/img-lg-1.png" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 100px; margin-right: 10px;">
                                    <a href="../../../assets/images/prv/shop/home-deco/img-lg-2.png" data-desoslide-index="1">
                                        <img src="../../../assets/images/prv/shop/home-deco/img-lg-2.png" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide" style="width: 100px; margin-right: 10px;">
                                    <a href="../../../assets/images/prv/shop/home-deco/img-lg-3.png" data-desoslide-index="2">
                                        <img src="../../../assets/images/prv/shop/home-deco/img-lg-3.png" alt="">
                                    </a>
                                </div>
                                <div class="swiper-slide" style="width: 100px; margin-right: 10px;">
                                    <a href="../../../assets/images/prv/shop/home-deco/img-lg-4.png" data-desoslide-index="3">
                                        <img src="../../../assets/images/prv/shop/home-deco/img-lg-4.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 ml-lg-auto">
                <div class="product-description-wrapper">
                    <!-- Product title -->
                    <h2 class="heading heading-4 strong-600 text-capitalize">
                        Sofa, with open end, Arsta golden-yellow
                    </h2>
                    <span class="heading heading-light heading-5 strong-600 mt-3">
                        $2850.00
                    </span>

                    <span class="space-xs-md"></span>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-default">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Color</option>
                                                <option>Yellow</option>
                                                <option>Orange</option>
                                                <option>Black</option>
                                                <option>Purple</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg text-center" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <!-- Add to cart button -->
                                        <button type="button" class="btn btn-lg btn-block btn-gray-dark btn-icon-left">
                                            <i class="icon ion-bag"></i> Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rating stars -->
                    <div class="rating mt-2">
                        <span class="star voted" rel="1"></span>
                        <span class="star voted" rel="2"></span>
                        <span class="star voted" rel="3"></span>
                        <span class="star" rel="4"></span>
                        <span class="star" rel="5"></span>

                        <span class="rating-count">(2 customer reviews)</span>
                    </div>

                    <span class="space-xs-md"></span>

                    <!-- Product description -->
                    <div class="product-short-text">
                        <p>
                            Pellentesque habitant morbi tristique senectus et netus malesuada fames turpis egestas. Vestibulum tortor quam feugiat vitae ultricies eget tempor.
                        </p>

                        <ul class="icons mt-4">
                            <li class="text-sm">
                                <i class="icon icon-clothes-029"></i> Exterior: 98% cotton, 2% elastane
                            </li>
                            <li class="text-sm">
                                <i class="icon icon-electronics-002"></i> Machine wash up to 30°/86°F gentle cycle
                            </li>
                            <li class="text-sm">
                                <i class="icon icon-electronics-043"></i> Iron up to 110°C/230°F
                            </li>
                        </ul>

                        <ul class="inline-links inline-links--style-1 mt-4">
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#">Facebook</a>
                            </li>
                            <li>
                                <a href="#">Pinterest</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-wrapper">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-4">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Software</h3>
                        <p>
                            macOS High Sierra
                            <br>
                            Office 365 - 1 year license
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Keyboard and Trackpad</h3>
                        <p>
                            78 (U.S.) or 79 (ISO) keys including 12 function keys and 4 arrow keys
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Wireless</h3>
                        <p>
                            802.11ac Wi-Fi wireless networking; IEEE 802.11a/b/g/n compatible
                        </p>
                    </div>
                </div>
            </div>

            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-4">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Video Support</h3>
                        <p>
                            One display with 5120-by-2880 resolution at 60Hz at over a billion colors
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Audio</h3>
                        <p>
                            Stereo speakers with high dynamic range
                            <br>
                            Two microphones
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Battery and Power</h3>
                        <p>
                            Up to 10 hours wireless web
                            <br>
                            Up to 30 days of standby time
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
