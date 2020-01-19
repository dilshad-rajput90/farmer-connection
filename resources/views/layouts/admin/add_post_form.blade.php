        @extends('layouts/admin/master');

        @section('content')

                {{-- {{ dd($post_type) }} --}}
                 <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">

                                <h3>Add A New Post</h3>

                            {!! Form::open(['url'=>'/add_post_process','method'=>'post','files'=>true])  !!}

                            <table class="table">
                                <tr>
                                    <td>Post Title</td>
                                    <td><input type="text" name="title" class="form-control"  id="title"></td>
                                </tr>

                                <tr>
                                    <td>Post Summary</td>
                                    <td>
                                    <textarea name="summary" id="summary" cols="80" rows="7"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Post Description</td>
                                  <td>
                                    <textarea name="description" id="description" cols="100" rows="8"></textarea>
                                    </td>
                                </tr>

                               <tr>
                                   <td>Post Type</td>
                                   <td>
                                    @foreach ($post_type as $record)
                                   {{ $record['type'] }} <input type="radio" name="post_type_id"  value="{{ $record['id'] }}">
                                    @endforeach
                                   </td>
                               </tr>

                            <tr>
                                <td>choose File</td>
                                <td>
                                    <input type="file" name="attach_file" class="form-control" id="attach_file">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Select Blog Category
                                    <br><br>
                                    <select name="category[]" id="category" class="form-control" multiple>
                                        @foreach ($data as $record)
                                        <option value="{{ $record['id'] }}">{{ $record['category'] }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" class="btn btn-success" value="Add Post">
                                </td>
                            </tr>
                            </table>
                            {!! Form::close() !!}
                            </div>
                        </div><!-- end .page title-->



                    </div>
                    <div class="clearfix"></div>





        @endsection
