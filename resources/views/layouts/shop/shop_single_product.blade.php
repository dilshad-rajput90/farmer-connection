        @extends('layouts/front/master');

        @section('content')

{{--
        {{ dd($products[0]['name']) }}
        {{ dd($products[0]['specification']) }}
        {{ dd($products[0]['price']) }}
        {{ dd($products[0]['stock']) }} --}}
        {{-- {{ dd($products[0]['attachment'][0]['path']) }} --}}

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Single Product</h1>
        </div>
    </section>


    <!--Shop Single-->
    <div class="shop-single">

        <!--Product Details Section-->
        <section class="product-details">
            <div class="auto-container">
                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                        <div class="image-column col-md-4 col-sm-5 col-xs-12">
                            <figure class="image-box"><a href="images/resource/prducts/image-13.jpg" class="lightbox-image" title="Image Caption Here"><img src=" {{ asset('storage/images/'.$products[0]['attachment'][0]['path']) }}" alt=""></a></figure>
                        </div>
                        <div class="info-column col-md-8 col-sm-7 col-xs-12">
                             {!! Form::open(['url'=>'/add_to_cart/'.$products[0]['id'],'method'=>'post']) !!}
                            <div class="details-header">
                                <h4>{{ $products[0]['name'] }}</h4>
                                <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-half-empty"></span> <span class="txt">(Customer Review)</span> </div>
                                <div class="item-price"><span class="old-price">$128</span> ${{ $products[0]['price'] }}</div>
                            </div>

                            <div class="text"> {{ $products[0]['specification'] }} </div>
                            <div class="availablity">Available: {{ $products[0]['stock'] }} items Left in Stock</div>

                            <div class="clearfix">
                                <div class="item-quantity"><div class="quantity-spinner">
                                    <button type="button" class="minus"><span class="fa fa-minus"></span></button>
                                    <input type="text" name="product_qunatity" value="1" class="prod_qty" />
                                    <button type="button" class="plus"><span class="fa fa-plus"></span></button>
                                </div>
                            </div>
                                    {{-- <button type="button" class="theme-btn btn-style-one add-to-cart">Add To Cart <span class="icon fa fa-shopping-cart"></span></button> --}}
                                    <input type="submit" class="theme-btn btn-style-one add-to-cart" value="AddToCart">
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div><!--Basic Details-->


                <!--Product Info Tabs-->
                <div class="product-info-tabs">

                    <!--Product Tabs-->
                    <div class="prod-tabs tabs-box" id="product-tabs">

                        <div class="row clearfix">
                        	<div class="buttons-column col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-description" class="tab-btn active-btn">Product description</li>
                                    <li data-tab="#add-information" class="tab-btn">Additional Information</li>
                                    <li data-tab="#prod-reviews" class="tab-btn">Reviews (02)</li>
                                </ul>
                            </div>

                            <div class="content-column col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                <!--Tabs Content-->
                                <div class="tabs-container tabs-content">

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-description">
                                        <h3>Product Description</h3>
                                        <div class="content">
                                            <p>Never heard the word impossible. This time there's no stopping us. Were gonna do it. Give us any chance well take it. Give us any rule we'll break it. We're gonna make our dreams come true. The Love Boat soon will be making an other run. The Love Boat promises something for everyone.</p>
                                            <p>It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight. They were four men living all together yet they were all alone. And we'll do it our way yes our way. </p>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="add-information">
                                        <h3>Additional Information</h3>
                                        <div class="content">
                                            <p>Never heard the word impossible. This time there's no stopping us. Were gonna do it. Give us any chance well take it. Give us any rule we'll break it. We're gonna make our dreams come true. The Love Boat soon will be making an other run. The Love Boat promises something for everyone.</p>
                                            <p>It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight. They were four men living all together yet they were all alone. And we'll do it our way yes our way. </p>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="prod-reviews">
                                        <h3>2 Reviews Found</h3>

                                        <!--Reviews Container-->
                                        <div class="reviews-container">

                                            <!--Reviews-->
                                            <article class="review-box clearfix">
                                                <figure class="rev-thumb"><img src="images/resource/author-thumb-2.jpg" alt=""></figure>
                                                <div class="rev-content">
                                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span></div>
                                                    <div class="rev-info">Admin – April 03, 2016: </div>
                                                    <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                                </div>
                                            </article>

                                            <article class="review-box clearfix">
                                                <figure class="rev-thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></figure>
                                                <div class="rev-content">
                                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></div>
                                                    <div class="rev-info">Ahsan – April 01, 2016: </div>
                                                    <div class="rev-text"><p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis</p></div>
                                                </div>
                                            </article>

                                        </div>

                                        <!--Add Review-->
                                        <div class="add-review">
                                            <h3>Add a Review</h3>

                                            {{-- <form method="post" action="shop-single.html"> --}}
                                             {{-- {!! Form::open(['url'=>'/add_to_cart','method'=>'post']) !!} --}}
                                                <div class="row clearfix">
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Name *</label>
                                                        <input type="text" name="name" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Email *</label>
                                                        <input type="email" name="email" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Website *</label>
                                                        <input type="text" name="website" value="" placeholder="" required>
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                                        <label>Rating </label>
                                                        <div class="rating">
                                                            <a href="#" class="rate-box" title="1 Out of 5"><span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="2 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="3 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"> </span> <span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="4 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                            <a href="#" class="rate-box" title="5 Out of 5"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <label>Your Review</label>
                                                        <textarea name="review-message"></textarea>
                                                    </div>
                                                    <div class="form-group text-right col-md-12 col-sm-12 col-xs-12">
                                                        <button type="button" class="theme-btn btn-style-one">Add Review</button>
                                                    </div>
                                                </div>
                                                {{-- {!! Form::close() !!} --}}
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!--Related Products-->
        <section class="related-products">
        	<div class="auto-container">
                <div class="sec-title-one"><h2>Related Products</h2></div>

                <div class="row clearfix">

                    <!--Default Shop Item-->
                    <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="shop-single.html"><img src="images/resource/products/image-9.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="shop-single.html">Green Olives</a></h3>
                                <div class="price"><span class="price-txt">$ 40.00</span></div>
                            </div>

                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                    <a class="lightbox-image option-btn" href="images/resource/products/image-9.jpg" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-eye"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-heart-o"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-retweet"></span></a>
                                    <a href="shop-single.html" class="theme-btn add-cart-btn">ADD TO CART <span class="fa fa-shopping-cart"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Default Shop Item-->
                    <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="shop-single.html"><img src="images/resource/products/image-10.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="shop-single.html">Carambola Fruits</a></h3>
                                <div class="price"><span class="price-txt">$ 24.00</span></div>
                            </div>

                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                    <a class="lightbox-image option-btn" href="images/resource/products/image-10.jpg" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-eye"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-heart-o"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-retweet"></span></a>
                                    <a href="shop-single.html" class="theme-btn add-cart-btn">ADD TO CART <span class="fa fa-shopping-cart"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Default Shop Item-->
                    <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="shop-single.html"><img src="images/resource/products/image-11.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="shop-single.html">Dragon Fruits</a></h3>
                                <div class="price"><span class="price-txt">$ 50.00</span></div>
                            </div>

                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                    <a class="lightbox-image option-btn" href="images/resource/products/image-11.jpg" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-eye"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-heart-o"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-retweet"></span></a>
                                    <a href="shop-single.html" class="theme-btn add-cart-btn">ADD TO CART <span class="fa fa-shopping-cart"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Default Shop Item-->
                    <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="shop-single.html"><img src="images/resource/products/image-12.jpg" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="shop-single.html">Broccoli</a></h3>
                                <div class="price"><span class="price-txt">$ 16.00</span></div>
                            </div>

                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="prod-options">
                                    <a class="lightbox-image option-btn" href="images/resource/products/image-12.jpg" title="Image Caption Here" data-fancybox-group="example-gallery"><span class="fa fa-eye"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-heart-o"></span></a>
                                    <a class="option-btn" href="shop-single.html"><span class="fa fa-retweet"></span></a>
                                    <a href="shop-single.html" class="theme-btn add-cart-btn">ADD TO CART <span class="fa fa-shopping-cart"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>


    </div>



         @endsection
