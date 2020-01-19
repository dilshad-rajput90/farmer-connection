@extends('layouts/blog/master')

@section('content')

{{-- {{ dd($data) }} --}}


{{-- {{ dd($data[0]->post_id)  }} --}}

        {{-- {{ dd($record->title)  }} --}}

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
            <div class="auto-container">
                <h1>Our Blog</h1>
            </div>
        </section>


        <!--Sidebar Page-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    @foreach ($data as $record)
                        <!--Blog Classic-->

                        {{-- {{ dd($record->post_id) }} --}}

                        <section class="blog-classic-view">

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                            <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('storage/images/'.$record->path) }}" alt=""></a></figure>
                                <div class="lower-content">
                                <h3><a href="blog-single.html">{{ $record->title }}</a></h3>
                                    <div class="text"> {{ $record->post_content }} </div>
                                    <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="fa fa-clock-o"></span> Sep  25, 2016</a></li>
                                            <li><a href="#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>
                                        </ul>
                                    <div class="more-link"><a href="/blog_single/{{ $record->post_id }}">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img src="images/resource/blog-image-5.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.html">New Good Quality Apple</a></h3>
                                    <div class="text">Aenean sodales dictum auguein faucibus sollicitudin eunulla semper arcu vel diam auctor condimentums nam likes  tp molestie fermentum Well, first of all I've never been the farmer type. My father had a farm and he wanted me to work hard like him so one day he can leave the farm to me. </div>
                                    <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="fa fa-clock-o"></span> Sep  25, 2016</a></li>
                                            <li><a href="#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>
                                        </ul>
                                        <div class="more-link"><a href="blog-single.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img src="images/resource/blog-image-6.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.html">Fresh Vegetable Food</a></h3>
                                    <div class="text">Aenean sodales dictum auguein faucibus sollicitudin eunulla semper arcu vel diam auctor condimentums nam likes  tp molestie fermentum Well, first of all I've never been the farmer type. My father had a farm and he wanted me to work hard like him so one day he can leave the farm to me. </div>
                                    <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="fa fa-clock-o"></span> Sep  25, 2016</a></li>
                                            <li><a href="#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>
                                        </ul>
                                        <div class="more-link"><a href="blog-single.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img src="images/resource/blog-image-7.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.html">Fresh First Quality</a></h3>
                                    <div class="text">Aenean sodales dictum auguein faucibus sollicitudin eunulla semper arcu vel diam auctor condimentums nam likes  tp molestie fermentum Well, first of all I've never been the farmer type. My father had a farm and he wanted me to work hard like him so one day he can leave the farm to me. </div>
                                    <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="fa fa-clock-o"></span> Sep  25, 2016</a></li>
                                            <li><a href="#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>
                                        </ul>
                                        <div class="more-link"><a href="blog-single.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img src="images/resource/blog-image-8.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.html">Fresh and Fine Quality</a></h3>
                                    <div class="text">Aenean sodales dictum auguein faucibus sollicitudin eunulla semper arcu vel diam auctor condimentums nam likes  tp molestie fermentum Well, first of all I've never been the farmer type. My father had a farm and he wanted me to work hard like him so one day he can leave the farm to me. </div>
                                    <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="#"><span class="fa fa-clock-o"></span> Sep  25, 2016</a></li>
                                            <li><a href="#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>
                                        </ul>
                                        <div class="more-link"><a href="blog-single.html">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!-- Styled Pagination -->
                    <div class="styled-pagination text-left">
                        <ul>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#">Next</a></li>
                        </ul>
                    </div>

                </div><!--End Content Side-->

                <!--Sidebar-->
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        <div class="widget search-box sidebar-widget">

                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Now">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>

                        </div>

                        <!-- Popular Categories -->
                        <div class="widget popular-categories sidebar-widget">
                            <div class="sidebar-title"><h3>Categories</h3></div>

                            <ul class="list">
                                <li><a href="#">Autumn (1)</a></li>
                                <li><a href="#">Fruits (2)</a></li>
                                <li class="current"><a href="#">Organic Foods (2)</a></li>
                                <li><a href="#">Vegetables (4)</a></li>
                                <li><a href="#">Spring (2)</a></li>
                            </ul>

                        </div>

                        <!-- Recent Posts -->
                        <div class="widget recent-posts sidebar-widget">
                            <div class="sidebar-title"><h3>Latest News</h3></div>

                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="#">It is a long established the fresh fruits fact</a></div>
                                <div class="time">September 22, 2016</div>
                            </div>

                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="#">12 plants that repel un wanted insects</a></div>
                                <div class="time">Augest 29, 2016</div>
                            </div>

                        </div>

                        <!-- Archives -->
                        <div class="widget archives-list sidebar-widget">
                            <div class="sidebar-title"><h3>Archives</h3></div>

                            <ul class="list">
                                <li><a href="#">August 2016</a></li>
                                <li><a href="#">July 2016</a></li>
                                <li><a href="#">June 2016</a></li>
                                <li><a href="#">May 2016</a></li>
                                <li><a href="#">Apirl 2016</a></li>
                            </ul>

                        </div>

                        <!-- Popular Tags -->
                        <div class="widget sidebar-widget popular-tags">
                            <div class="sidebar-title"><h3>Tags</h3></div>

                            <a href="#">Family</a>
                            <a href="#">Farming</a>
                            <a href="#">Clean &amp; Clear</a>
                            <a href="#">Fruits</a>
                            <a href="#">Fresh</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Nutrition</a>
                            <a href="#">Health</a>
                            <a href="#">Life</a>

                        </div>

                    </aside>
                </div><!--End Sidebar-->

            </div>
        </div>
    </div>





@endsection
