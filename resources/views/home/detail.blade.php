@extends('layouts.app')

@section('content')

<section class="slice sct-color-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="gallery-container">
                    <div id="slideshow" class="gallery-top no-padding bg-minimalist">
                        <div class="desoslide-wrapper">
                            <img class="img-responsive" src="{{ $moto->images[0]->image }}" style="opacity: 1;">
                        </div>
                    </div>
                    <div id="slideshow_thumbs" class="swiper-js-container gallery-thumbs gallery-thumbs--style-1 mt-4">
                        <div class="swiper-container swiper-container-horizontal swiper-container-undefined" data-swiper-items="5" data-swiper-space-between="10" data-swiper-xs-items="3" data-swiper-xs-space-between="10" data-swiper-sm-items="4" data-swiper-sm-space-between="10">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                @foreach ($moto->images as $key => $image)
                                    <div class="swiper-slide{{ $key == 0 ? ' swiper-slide-active' : '' }}" style="width: 100px; margin-right: 10px;">
                                        <a href="{{ $image->image }}" data-desoslide-index="{{ $key }}">
                                            <img src="{{ $image->image }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 ml-lg-auto">
                <div class="product-description-wrapper">
                    <!-- Product title -->
                    <h2 class="heading heading-4 strong-600 text-capitalize">
                        {{ $moto->name }}
                    </h2>
                    <span class="heading heading-light heading-5 strong-600 mt-3">
                        Liên hệ
                    </span>

                    {{-- <span class="space-xs-md"></span>

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
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row-wrapper">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Động cơ</h3>
                        <div>{!! $moto->engine !!}</div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Truyền động</h3>
                        <div>{{ $moto->drive_train }}</div>
                    </div>
                </div>
            </div>

            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Hệ thống giảm sóc</h3>
                        {{ $moto->suspension }}
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Khung sườn</h3>
                        {{ $moto->frame }}
                    </div>
                </div>
            </div>

            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Phanh(Thắng)</h3>
                        <div>{{ $moto->brakes }}</div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Kích thước</h3>
                        <div>{{ $moto->dimensions }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
<script>
$('#slideshow').desoSlide({
    thumbs: $('#slideshow_thumbs .swiper-slide > a'),
    thumbEvent: 'click',
    first: 0,
    effect: 'none',
    overlay: 'none',
    controls: {
        show: false,
        keys: false
    },
});
</script>
@endsection
