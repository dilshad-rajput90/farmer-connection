@extends('layouts/front/master')

@section('content')

    {{-- {{ dd($products[0]['product']['id']) }} --}}

      {{-- {{ dd($products) }} --}}

    {{-- @foreach ($products as $item) --}}

        {{-- {{ dd($item['id']) }} --}}
        {{-- {{ dd($item['name']) }} --}}
        {{-- {{ dd($item['specification']) }} --}}
        {{-- {{ dd($item['price']) }} --}}
        {{-- {{ dd($item['stock']) }} --}}
        {{-- {{ dd($item['attachment'][0]['path']) }} --}}

    {{-- @endforeach --}}
      <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Shop</h1>
        </div>
    </section>


    <!--Shop Section-->
    <section class="shop-section">
    	<div class="auto-container">

            <!--Sort By-->
            <div class="items-sorting">
                <div class="row clearfix">
                    <div class="results-column col-md-9 col-sm-12 col-xs-12">
                        <div class="text">Showing 1 - 12  of  30 Result</div>
                    </div>
                    <div class="select-column col-md-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <select name="sort-by">
                                <option>Default Sorting</option>
                                <option>Ascending Order</option>
                                <option>Descending Order</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
            	<!--Default Shop Item-->
                <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    @foreach ($products as $item)
                	<div class="inner-box">

                        <div class="image-box">
                        <figure class="image"><a href="shop-single.html"><img src="{{ asset('storage/images/'.$item['attachment'][0]['path']) }}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="shop-single.html">{{ $item['name'] }}</a></h3>
                            <div class="price"><span class="price-txt">{{ $item['price'] }}</span></div>
                        </div>

                         <!--Overlay Box-->
                        <div class="overlay-box">
                        	<div class="prod-options">
                            	<a class="lightbox-image option-btn" href="images/resource/products/image-1.jpg" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-eye"></span></a>
                                <a class="option-btn" href="/shop_single_product"><span class="fa fa-heart-o"></span></a>
                                <a class="option-btn" href="/shop_single_product"><span class="fa fa-retweet"></span></a>
                                <a href="/shop_single_product/{{$item['id']}}" class="theme-btn add-cart-btn">ADD TO CART <span class="fa fa-shopping-cart"></span></a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>

            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="next" href="#">Next</a></li>
                </ul>
            </div>

        </div>
    </section>


@endsection
