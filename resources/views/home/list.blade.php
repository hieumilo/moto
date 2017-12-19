@extends('layouts.app')

@section('content')

<section class="slice sct-color-1 page-title b-xs-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3 class="heading heading-1 strong-400 text-capitalize mb-2">
                        <span>{{ $category->name }}</span>
                    </h3>

                    <ol class="breadcrumb breadcrumb--style-2">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-normal">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="text-normal">{{ $category->name }}<span>
                        </li>
                    </ol>
                </div>

                <!-- Fluid text paragraph -->
                {{-- <div class="fluid-paragraph text-center mt-4">
                    <p class="">
                        Parturient mus aenean a suspendisse est ligula eu dui a ultricies dictumst porttitor rhoncus a vestibulum est parturient.
                    </p>
                    <a href="#" class="btn btn-lg btn-base-4 mt-4" data-scroll-to="#sct_products">
                        Start shopping
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<section class="slice bg-minimalist" id="sct_products">
    <div class="container">
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
                                <a href="{{ route('home.contact.index') }}" class="price heading-6 c-gray-light strong-400">Liên hệ</a>
                            </div>
                        </div>

                        <div class="product-actions--a product-actions--3" data-animation-in="slideInLeft" data-animation-out="slideOutLeft">
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

        <!-- Pagination -->
        <div class="pagination-wrapper d-flex justify-content-center py-4">

            {{ $motos->links('vendor.pagination.custom') }}

        </div>
    </div>
</section>

@endsection
