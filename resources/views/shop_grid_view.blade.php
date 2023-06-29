{{-- @php $url= $app['config']['app.primary_url']; @endphp --}}
@php $url= "https://www.nithitex.com"; @endphp
@foreach ($shop_all_products as $shop_all_product)
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
        <div class="single-product-wrap mb-35">
            <div class="product-img product-img-zoom mb-15">
                <a href="{{ url('sarees/details/' . $shop_all_product->id . '/' . $shop_all_product->product_slug) }}">
                    <img src="{{ 'https://www.nithitex.com/' . $shop_all_product->product_image }}" alt=""
                        class="img-fluid">
                </a>
            </div>
            <div class="product-content-wrap-2 text-center">

                <h3><a
                        href="{{ url('sarees/details/' . $shop_all_product->id . '/' . $shop_all_product->product_slug) }}">{{ $shop_all_product->product_name }}</a>
                </h3>
                <h3><a href="{{ url('sarees/details/' . $shop_all_product->id . '/' . $shop_all_product->product_slug) }}">SKU:
                        {{ $shop_all_product->product_sku }}</a></h3>
                <div class="product-price-2">
                    <span class="btn btn-success" style="border-radius: 50px; color: #fff;">Avail. Qty:
                        {{ $shop_all_product->current_stock }}</span>
                </div>
            </div>
            <div class="product-content-wrap-2 product-content-position text-center">

                <h3><a
                        href="{{ url('sarees/details/' . $shop_all_product->id . '/' . $shop_all_product->product_slug) }}">{{ $shop_all_product->product_name }}</a>
                </h3>
                <div class="product-price-2">
                    <span class="btn btn-success" style="border-radius: 50px; color: #fff;">Avail. Qty:
                        {{ $shop_all_product->current_stock }}</span>
                </div>
                <div class="pro-add-to-cart">
                    <input type="hidden" id="product_id" value="{{ $shop_all_product->id }}">
                    <span id="pname" hidden>{{ $shop_all_product->product_name }}</span>
                    <h3><a
                            href="{{ url('sarees/details/' . $shop_all_product->id . '/' . $shop_all_product->product_slug) }}">SKU:
                            {{ $shop_all_product->product_sku }}</a></h3>
                    <input type="hidden" id="qty" value="1">
                </div>
            </div>
        </div>
    </div>
@endforeach
