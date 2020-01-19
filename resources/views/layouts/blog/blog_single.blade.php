@extends('layouts/blog/master')

@section('content')
{{-- {{ dd($comments) }} --}}
 <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <h1>Blog Single</h1>
        </div>
    </section>

    {{-- {{ dd($categories) }} --}}

    {{-- {{ dd($users[0]['profession']['profession']) }} --}}
    {{-- {{ dd($users[0]['created_at']) }} --}}
        {{-- {{ dd($users[0]['id']) }} --}}

        {{-- {{ dd($record) }} --}}


    {{-- {{ dd($record[0]['author_id'])  }} --}}
    {{-- {{ Session::get('comments') }} --}}
{{-- {{ dd($comments) }} --}}
    {{-- {{ dd(Session:{{}}:has('success')) }} --}}

    {{-- {{ dd($record) }} --}}

    {{-- {{ dd($record[0]['attachment'][0]['path']) }} --}}
    {{-- {{ dd($record[0]['id']) }} --}}
    {{-- {{ dd($record[0]['author_id']) }} --}}

    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--Blog Classic-->
                    <section class="blog-classic-view post-details">

                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img src="{{ asset('storage/images/'.$record[0]['attachment'][0]['path']) }}" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.html">{{ $record[0]['title'] }}</a></h3>
                                    <div class="post-content">
                                    	<div class="text">
                                            <p>
                                                {{ $record[0]['summary'] }}
                                            </p>
                                            <p>
                                              {{ $record[0]['post_content'] }}
                                            </p>
                                        </div>

                                        <div class="two-col-images">
                                        	<div class="row clearfix">
                                            	<!--Image Column-->
                                                <div class="image-column col-md-6 col-sm-6 col-xs-12"><figure><a href="images/resource/blog-image-9.jpg" class="lightbox-image" title="Image Captione Here" data-fancybox-group="fancybox"><img src="images/resource/blog-image-9.jpg" alt=""></a></figure></div>
                                                <!--Image Column-->
                                                <div class="image-column col-md-6 col-sm-6 col-xs-12"><figure><a href="images/resource/blog-image-10.jpg" class="lightbox-image" title="Image Captione Here" data-fancybox-group="fancybox"><img src="images/resource/blog-image-10.jpg" alt=""></a></figure></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="post-tags"><span class="fa fa-tag"></span> &ensp; <a href="#">Fertiliser</a>, <a href="#">Organic Food</a>, <a href="#">Tips</a> </div>
                                </div>
                            </div>
                        </div>

                        <!--Comments Area-->
                        <div class="comments-area">
                        	<div class="sidebar-title"><h3>Comments (02)</h3></div>

                            <div class="comment-box">

                                <div class="comment">
                                	<div class="comment-inner">
                                            <?php
                                              if(Auth::user()->id == 1)
                                                {
                                                ?>
                                                <div class="author-thumb"><img src=" {{ asset('storage/images/dr2.jpg') }} " alt=""></div>
                                                <?php
                                                }
                                            ?>

                                        <div class="comment-content">
                                            <div class="comment-header clearfix">
                                            <strong>By {{ $users[0]['profession']['profession'] }}</strong> <span class="date">Created At  {{ $users[0]['created_at'] }}</span>
                                            </div>
                                            @foreach ($comments as $comment)
                                            <div class="text">
                                                {{ $comment['comment'] }}
                                            </div>
                                               @endforeach
                                            <div class="link-box"><a href="#" class="reply-btn">Reply </a></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment reply-comment">
                                	<div class="comment-inner">
                                        <div class="author-thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></div>
                                        <div class="comment-content">
                                            <div class="comment-header clearfix">
                                                <strong>Ellena Gilbert</strong> <span class="date">September  22, 2016</span>
                                            </div>
                                            <div class="text">Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam cursus nibh vitae lacus  vitae dictum lectus faucibus.</div>
                                            <div class="link-box"><a href="#" class="reply-btn">Reply </a></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Comment Form-->
                        <div class="comment-form default-form">
                            <div class="sidebar-title"><h3>Leave a Comment</h3></div>

                                {{-- {!! Form::open(['url'=>'/comment/'.$record[0]['id'].'/'.$record[0]['author_id'],'method'=>'post']) !!} --}}
                                {!! Form::open(['url'=>'/comment','method'=>'post']) !!}

                                <div class="row clearfix">

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                        	<div class="field-label">Comments</div>
                                            <textarea name="comment" id="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    	<div class="form-group">
                                            <button type="submit" id="submit" class="theme-btn btn-style-two">Submit</button>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="post_id" value="{{ $record[0]['id'] }}">
                                <input type="hidden" name="author_id" value="{{ $record[0]['author_id'] }}">

                                {!! Form::close() !!}
                        </div>

                        {{-- @include('disqus') --}}



                    </section>

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

                        <div id="a">

                        </div>

                        <!-- Popular Categories -->
                        <div class="widget popular-categories sidebar-widget">
                            <div class="sidebar-title"><h3>Categories</h3></div>

                            <ul class="list">

                                  @foreach ($categories as $item)

                                    <li><a href="#"> {{ $item['category'] }}</a></li>
                                    @endforeach

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

