@extends('main_master')
@section('content')
@section('title')
    Available Sarees | All Products
@endsection
<div class="product-details-area pt-40 pb-40">
    <div class="container">
        @php
            $url = 'https://www.nithitex.com';
        @endphp
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div class="pro-dec-big-img-slider">
                        @foreach ($multiImage as $mulimg)
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ 'https://www.nithitex.com/' . $mulimg->product_mult_image }}">
                                        <img src="{{ 'https://www.nithitex.com/' . $mulimg->product_mult_image }}"
                                            alt="" class="img-fluid"> 
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-dec-slider-small product-dec-small-style1">
                        @if ($multiImage->count() > 1)
                            @foreach ($multiImage as $mulimg)
                                <div class="product-dec-small">
                                    <img src="{{ 'https://www.nithitex.com/' . $mulimg->product_mult_image }}"
                                        alt="">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product-details-content pro-details-content-mrg">
                    <input type="hidden" id="product_id" value="{{ $product_details->id }}">
                    <h2>
                        <span id="pname">{{ $product_details->product_name }}</span>
                    </h2>
                    <p class="pt-20">{!! $product_details->short_description !!}</p>
                    @if ($product_details->color_id != null)
                        <div class="pro-details-color-wrap">
                            <span>Color:</span>
                            <div class="pro-details-color-content">
                                <ul>
                                    <li>
                                        <a style="background-color: {{ $product_details->color->color_code }};"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="pro-details-quality">
                        <span class="pt-20">Avail. Qty: {{ $product_details->current_stock }}</span>
                    </div>
                    <div class="pro-details-quality">
                        <span>Product SKU: {{ $product_details->product_sku }}</span>
                    </div>
                    <div class="product-details-meta pt-20">
                        <ul>
                            <li>
                                <span>Categories:</span> {{ $product_details->category->category_name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-wrapper pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dec-review-topbar nav mb-45">
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                </div>
                <div class="tab-content dec-review-bottom">
                    <div id="des-details1" class="tab-pane active">
                        <div class="description-wrap">
                            {!! $product_details->long_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
