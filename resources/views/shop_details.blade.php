@extends('main_master')
@section('content')
@section('title')
    Available Sarees | All Products
@endsection
<div class="shop-area pt-40 pb-40">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="shop-topbar-wrapper">
                    <div class="product-sorting-wrapper">
                        <form action="{{ url('category/product/') }}" method="get" enctype="multipart/form-data">
                            <div class="product-show shorting-style">
                                <label>Category :</label>
                                <select name="category" id="category">
                                    <option value="">select</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($category_id == $item->id) selected @endif>{{ $item->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="product-sorting-wrapper">
                        <form action="{{ route('product.color.sort') }}" method="get" enctype="multipart/form-data">
                            <div class="product-show shorting-style">
                                <label>Sort by color :</label>
                                <select name="color_sort" id="color_sort">
                                    <option value="">select</option>
                                    @foreach ($color as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($sel_color == $item->id) selected @endif>{{ $item->color_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="product-sorting-wrapper">
                        <form action="{{ route('product.sort') }}" method="get" enctype="multipart/form-data">
                            <div class="product-show shorting-style">
                                <label>Sort by :</label>
                                <select name="sort" id="sort">
                                    <option value="">select</option>
                                    <option value="latest_product" @if ($sort_by == 'latest_product') selected @endif>
                                        Latest Product</option>
                                    <option value="product_name" @if ($sort_by == 'product_name') selected @endif>
                                        Product Name</option>
                                    <option value="q_low_to_high" @if ($sort_by == 'q_low_to_high') selected @endif>
                                        Quantity : Low To High</option>
                                    <option value="q_high_to_low" @if ($sort_by == 'q_high_to_low') selected @endif>
                                        Quantity : High To Low</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row" id="grid_view_product">
                                @include('shop_grid_view')
                            </div>
                        </div>
                    </div>
                    <div class="ajax-loadmore-product text-center" style="display:none;">
                        <img src="{{ asset('frontend/assets/images/logo/Spinner-1s-200px.svg') }}"
                            style="width: 120px; height: 120px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>

</script>