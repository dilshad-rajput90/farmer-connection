@extends('layouts/front/master')

@section('content')


 <!--Main Slider-->
    <section class="main-slider" id="scroll-section-one" data-start-height="900" data-slide-overlay="yes">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{ asset('front/images/main-slider/image-1.jpg') }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-150"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Farmer Crops</h2></div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-70"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="big-text">Locally Grown</div></div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="0"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one">Shop Now</a></div>


                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{ asset('front/images/main-slider/image-2.jpg') }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="{{ asset('front/images/main-slider/leaf-icon.pn') }}g" alt=""></figure></div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-10"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h3>The Huge variety of the Crops <br>wheat and cotton</h3></div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one">Shop Now</a> &ensp;&ensp; <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a></div>


                    </li>

                    <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{ asset('front/images/main-slider/image-3.jpg') }}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="{{ asset('front/images/main-slider/leaf-icon.pn') }}g" alt=""></figure></div>

                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-10"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h3 class="text-center">The Huge variety of the Crops <br>wheat and cotton</h3></div>

                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="110"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="shop.html" class="theme-btn btn-style-one">Shop Now</a> &ensp;&ensp; <a href="shop.html" class="theme-btn btn-style-three">Buy Now</a></div>
                    </li>
                </ul>
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>


    <!--Intro Section-->
    <section class="intro-section">
    	<div class="inner-part">
        	<div class="auto-container">
            	<div class="content-box">
                	<div class="inner-box">
                        <!--Section Title-->
                        <div class="sec-title-one">
                            <h2>Welcome to our Farmer Connect Site</h2>
                        </div>

                        <div class="row clearfix">
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner text-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <h3>01. 100% Organic</h3>
                                    <div class="text">Cheese strings bocconcini gouda. Parmesan emmental danish fontina cheese triangles bocconcini rubber cheese cheese slices bavarian bergkase.</div>
                                    <a href="blog-single.html" class="theme-btn btn-style-two">Read More</a>
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                                <div class="inner text-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <h3>02. Best Quality Products</h3>
                                    <div class="text">Cheese strings bocconcini gouda. Parmesan emmental danish fontina cheese triangles bocconcini rubber cheese cheese slices bavarian bergkase.</div>
                                    <a href="blog-single.html" class="theme-btn btn-style-two">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--About Farm Section-->
    <section class="about-farm">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title-two">
                <h2>About our farm</h2>
            </div>

            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <figure class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('front/images/resource/food-image-1.jpg') }}" alt=""></figure>
                </div>
                <!--Column-->
                <div class="column col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="tabs-box tabs-style-one">
                    	<div class="row clearfix">

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <!--Tab Buttons-->
                                <ul class="tab-buttons clearfix">
                                    <li class="tab-btn" data-tab="#tab-one"><span class="txt">2012</span></li>
                                    <li class="tab-btn active-btn" data-tab="#tab-two"><span class="txt">2014</span></li>
                                    <li class="tab-btn" data-tab="#tab-three"><span class="txt">2016</span></li>
                                </ul>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <!--Tabs Content-->
                                <div class="tabs-content">

                                    <!--Tab-->
                                    <div class="tab" id="tab-one">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	<p>We started Warsaw Organic Store in order to source organic produce directly from local farms.  The year was 2012.  It was the best of times, it was the worst of times.</p>
                                            <p>Our Goal:  The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.</p>
                                            <p>We’ve spent the past few years building a business and service that we love.  A service that makes the safest</p>
                                        </div>
                                        <h5 class="author-name">Muhibbur Rashid</h5>
                                    </div>

                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="tab-two">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	<p>We started Warsaw Organic Store in order to source organic produce directly from local farms.  The year was 2014.  It was the best of times, it was the worst of times.</p>
                                            <p>Our Goal:  The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.</p>
                                            <p>We’ve spent the past few years building a business and service that we love.  A service that makes the safest</p>
                                        </div>
                                        <h5 class="author-name">Stevan Smith</h5>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="tab-three">
                                    	<h3>Have look at out beautiful farm </h3>
                                        <div class="content">
                                        	<p>We started Warsaw Organic Store in order to source organic produce directly from local farms.  The year was 2016.  It was the best of times, it was the worst of times.</p>
                                            <p>Our Goal:  The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.</p>
                                            <p>We’ve spent the past few years building a business and service that we love.  A service that makes the safest</p>
                                        </div>
                                        <h5 class="author-name">Tafseer Hussain</h5>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--Fluid Section One-->
    <section class="fluid-section-one">
    	<div class="oval-cut"></div>

        <!--FLoated Image Left-->
        <figure class="floated-image-left wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('front/images/resource/food-image-2.jpeg') }}" alt=""></figure>
        <!--FLoated Image Right-->
        <figure class="floated-image-right wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('front/images/resource/food-image-3.jpeg') }}" alt=""></figure>

    	<div class="outer-box clearfix">
        	<!--Left Column-->
            <div class="left-column">
            	<div class="clearfix">
                    <div class="inner-box">
                    	<h3>Save up to 50 %</h3>
                        <h5>on your first purchase</h5>
                        <a href="shop-single.html" class="theme-btn btn-style-three">Shop Now</a>
                    </div>
                </div>
            </div>

            <!--Right Column-->
            <div class="right-column">
            	<div class="clearfix">
                    <div class="inner-box">
                    	<h3>Free Shipping</h3>
                        <h5>On order over $99</h5>
                        <a href="shop-single.html" class="theme-btn btn-style-three">Track Now</a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">
			<!--Section Title-->
            <div class="sec-title-one">
                <h2>Our new products</h2>
            </div>

            <div class="mixitup-gallery">
        		<!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        <li class="filter" data-role="button" data-filter=".fruits">Crops</li>
                        <li class="filter" data-role="button" data-filter=".vegetables">wheat</li>
                        <li class="filter" data-role="button" data-filter=".breads">Cotton</li>
                    </ul>
                </div>

                <!--Filter List-->
                <div class="filter-list row clearfix">


                    <!--Default Food Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all juices">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/1.jpg" title="Image Title Here"><img src="{{ asset('front/images/gallery/1.jp') }}g" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Passion Fruits</a></h3>
                                    <div class="price">$ 25.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Food Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all breads juices">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/2.jpg" title="Image Title Here"><img src="{{ asset('front/images/gallery/2.jp') }}g" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Kiwi Fruits</a></h3>
                                    <div class="price">$ 18.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Food Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all fruits vegetables">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/3.jpg" title="Image Title Here"><img src="{{ asset('front/images/gallery/3.jp') }}g" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Tomatoes</a></h3>
                                    <div class="price">$ 30.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Food Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all fruits vegetables breads juices">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="{{ asset('images/gallery/4.jpg') }}" title="Image Title Here"><img src="{{ asset('front/images/gallery/4.jp') }}g" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Ripe pea</a></h3>
                                    <div class="price">$ 15.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Food Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all vegetables">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/5.jpg" title="Image Title Here"><img src="{{ asset('front/images/gallery/5.jp') }}g" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Figs Sweet</a></h3>
                                    <div class="price">$ 18.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Food Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-food-item mix mix_all all breads juices">
                        <div class="inner-box">
                            <div class="image-box">
                            	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="images/gallery/6.jpg" title="Image Title Here"><img src="{{ asset('front/images/gallery/6.jp') }}g" alt=""></a></figure>
                                <div class="lower-content">
                                	<h3><a href="shop.html">Rye Bread</a></h3>
                                    <div class="price">$ 20.00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

				<!--Button Outer-->
				<div class="more-btn-outer text-center"><a href="shop.html" class="theme-btn btn-style-four">View More</a></div>

            </div>

        </div>
    </section>

    <!--Deal of the Day-->
    <section class="deal-of-day">
    	<div class="auto-container">

            <!--Title Box-->
            <div class="title-box">
                <h3>Save up to 50 %</h3>
                <h2>Deal of the day</h2>
            </div>

            <!--Carousel Outer-->
            <div class="carousel-outer">
            	<div class="single-item-carousel">
                	<!--Slide Item-->
                    <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="{{ asset('front/images/resource/food-image-4.pn') }}g" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="{{ asset('front/images/resource/food-image-4.pn') }}g" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                            <div class="image-column col-md-8 col-sm-7 col-xs-12">
                            	<figure class="image-box"><a href="images/resource/food-image-4.png" class="lightbox-image"><img src="{{ asset('front/images/resource/food-image-4.pn') }}g" alt=""></a></figure>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-4 col-sm-5 col-xs-12">
                            	<div class="inner">
                                    <div class="prod-title">Orancic Soup Mix 5004</div>
                                    <div class="price">Price: $350</div>
                                    <div class="text">Boursin boursin cheese strings. Cheesy feet roquefort pecorino danish fontina cheesecake chalk.</div>
                                    <div class="options clearfix">
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-shopping-bag"></span></a>
                                        <a href="shop.html" class="theme-btn shop-btn">Shop Now</a>
                                        <a href="shop.html" class="theme-btn normal-btn"><span class="flaticon-connection"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!--Our Team-->
    <section class="team-section">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Our farmers</h2>
            </div>

        	<div class="row clearfix">
            	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                	<!--Default Team Member-->
                    <div class="default-team-member">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                            <div class="image-column"><figure class="image"><a href="#"><img src="{{ asset('front/images/resource/team-image-1.jp') }}g" alt=""></a></figure></div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner">
                                    <h3>Peter Parker</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                        <a href="#"><span class="fa fa-skype"></span></a>
                                        <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Default Team Member-->
                    <div class="default-team-member alternate">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                            <div class="image-column"><figure class="image"><a href="#"><img src="{{ asset('front/images/resource/team-image-2.jp') }}g" alt=""></a></figure></div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner">
                                    <h3>Darly Dixon</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                        <a href="#"><span class="fa fa-skype"></span></a>
                                        <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                	<!--Default Team Member / Vertical-->
                    <div class="default-team-member vertical">
                        <div class="inner-box clearfix">
                            <!--Image Column-->
                            <div class="image-column"><figure class="image"><a href="#"><img src="{{ asset('front/images/resource/team-image-3.jp') }}g" alt=""></a></figure></div>
                            <!--Content Column-->
                            <div class="content-column">
                                <div class="inner">
                                    <h3>Rick Grimes</h3>
                                    <div class="text">Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters.</div>
                                    <div class="social-links">
                                        <a href="#"><span class="fa fa-facebook-official"></span></a>
                                        <a href="#"><span class="fa fa-twitter"></span></a>
                                        <a href="#"><span class="fa fa-instagram"></span></a>
                                        <a href="#"><span class="fa fa-skype"></span></a>
                                        <a href="#"><span class="fa fa-vimeo-square"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Testimonials Section-->
    <section class="testimonial-section">

    	<div class="oval-cut"></div>

    	<div class="auto-container">
        	<div class="carousel-outer">
            	<div class="icon-box"><span class="flaticon-blocks-with-angled-cuts"></span></div>

            	<div class="single-item-carousel">
                	<!--Slide Item-->
                    <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('front/images/resource/author-thumb-1.jp') }}g" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('front/images/resource/author-thumb-1.jp') }}g" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>

                    <!--Slide Item-->
                    <div class="slide-item">
                    	<div class="text-content">Morbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequatSed quis condimentum quamorbi condimentum egestas quam, tempus ornare tortor. Vivamus ultricies gravida elit, sit amet interdum odio fringilla consequat.</div>
                        <div class="quote-info">
                        	<figure class="author-thumb img-circle"><img class="img-circle" src="{{ asset('front/images/resource/author-thumb-1.jp') }}g" alt=""></figure>
                            <h4>Adam Gilchrist</h4>
                            <div class="designation">CEO / Founder</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--sponsors style one-->
    <section class="sponsors-style-one">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Our partners</h2>
            </div>

    		<div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/1.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/2.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/3.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/4.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/5.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/1.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/2.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/3.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/4.pn') }}g" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('front/images/sponsors/5.pn') }}g" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>


    <!--Fluid Section Two-->
    <section class="fluid-section-two">

    	<div class="outer-box clearfix">
        	<!--Left Column-->
            <div class="left-column">
            	<div class="clearfix">
                    <div class="inner-box">
                        <h5>Newsletter</h5>
                    	<h3>Stay tune for updates</h3>

                        <div class="subscribe-form">
                        	<form method="post" action="http://world5.commonsupport.com/2017/warsaw/contact.html">
                            	<div class="form-group">
                                	<input type="email" name="email" value="" placeholder="Enter Your Email" required>
                                    <button type="submit" class="theme-btn btn-style-three">Send Now</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--Right Column-->
            <div class="right-column">
            	<!--Map Canvas-->
                <div class="map-canvas"
                    data-zoom="10"
                    data-lat="23.815811"
                    data-lng="90.412580"
                    data-type="roadmap"
                    data-hue="#fc721e"
                    data-title="Dhaka"
                    data-content="Dhaka 1000-1200, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>

        </div>
    </section>

@endsection
