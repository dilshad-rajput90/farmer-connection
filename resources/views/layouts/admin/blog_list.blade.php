@extends('layouts/admin/master')

@section('content')

    {{-- {{ dd($data) }} --}}

        {{-- {{ dd($data[0]->id) }} --}}

        <!-- BEGIN CONTAINER -->
            <div class="page-container">

                <!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title marginb0">


                                    <h4 class="float-left">Blogs</h4>


                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                        <li class="breadcrumb-item">Blogs</li>
                                    </ol>


                                </div>
                            </div>
                        </div><!-- end .page title-->
                        <div class="row">
                        @foreach ($data as $record)
                            <div class="col-md-4 margin-b-30">
                                <div class="blog-post">
                                    <a href="#">
                                        <img src="{{ asset('storage/images/'.$record->path) }}" alt="" class="img-fluid">
                                    </a>
                                    <div class="blog-desc">
                                        <h3><a href="#">{{ $record->title }}</a></h3>
                                        <span class="blog-meta">
                                        <a href="#">
                                        {{-- @php
                                         if({{ $record->author_id == 1 }})
                                        {
                                         <p>By Admin</p>
                                        }
                                        @endphp     --}}
                                        </a>
                                         24 July 2015
                                       <a href="#">934 Comments</a>
                                       </span>
                                        <p>
                                          {{ $record->post_content }}
                                        </p>
                                        <p><a href="#">Continue Reading</a></p>
                                        <p>
                            {!! Form::open(['url'=>'/delete_post/'.$record->post_id,'method'=>'post']) !!}
                                         <input type="hidden" name="_method" method="delete">
                                         <input type="submit" value="Delete" class="alert alert-danger">
                                        </p>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                    <p><a href="/edit_post/{{ $record->post_id }}" class="alert alert-success">Edit</a></p>
                            </div>
                      @endforeach
                        </div>

                        <ul class="pagination text-right float-right clearfix">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTAINER -->


@endsection
