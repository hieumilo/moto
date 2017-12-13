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

                    <span class="space-xs-md"></span>

                    <!-- Product description -->
                    <div class="product-short-text">
                        <p>
                            {!! $moto->description !!}
                        </p>
                    </div>
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
                        <div>{!! $moto->drive_train !!}</div>
                    </div>
                </div>
            </div>

            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Hệ thống giảm sóc</h3>
                        {!! $moto->suspension !!}
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Khung sườn</h3>
                        {!! $moto->frame !!}
                    </div>
                </div>
            </div>

            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Phanh(Thắng)</h3>
                        <div>{!! $moto->brakes !!}</div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature feature--boxed-border feature--bg-1">
                        <h3 class="heading heading-6 strong-600">Kích thước</h3>
                        <div>{!! $moto->dimensions !!}</div>
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
