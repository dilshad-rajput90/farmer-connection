        @extends('layouts/admin/master');

        @section('content')

    {{-- <h2>working</h2> --}}

            {{-- {{ dd($category) }} --}}


                {{-- {{ die }} --}}


                    {{-- {{ dd($data) }} --}}
                {{-- {{ dd($data[0]['attachment'][0]['path']) }} --}}

                 <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">

                                <h3>Edit A Post</h3>

                            {!! Form::open(['url'=>'/edit_post_process/'.$data[0]['id'],'method'=>'post','files'=>true])  !!}
                              <table class="table">
                                <tr>
                                    <td>Post Title</td>
                                    <td><input type="text" name="title" class="form-control" value="{{ $data[0]['title'] }}"  id="title"></td>
                                </tr>

                                <tr>
                                    <td>Post Summary</td>
                                    <td>
                                    <textarea name="summary" id="summary" cols="80" rows="7">
                                        {{ $data[0]['summary'] }}
                                    </textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Post Description</td>
                                  <td>
                                    <textarea name="description" id="description" cols="100" rows="8">
                                        {{ $data[0]['post_content'] }}
                                    </textarea>
                                    </td>
                                </tr>

                            <tr>
                                <td>choose File</td>
                                <td>
                                    <input type="file" name="attach_file" class="form-control" value="{{ $data[0]['attachment'][0]['path'] }}" id="attach_file">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{-- <img src="storage('public/images/{{$data[0]['attachment'][0]['path'] }}')" alt=""> --}}
                                    <p class="text-right">
                                        <img src="{{asset('storage/images/'.$data[0]['attachment'][0]['path'] )}}" name="attach_file" width="100px" height="100px" alt="">
                                    </p>
                                </td>
                            </tr>

                               <tr>

                                   <td>
                                    <select name="category" id="">

                       @foreach ($category as $item)
                        @foreach ($item['category'] as $items)

                        <option value="{{ $items['id'] }}">
                        {{ $items['category'] }}
                        </option>

                        @endforeach
                      @endforeach

                                      </select>
                                  </td>
                            </tr>

                                <tr>

                                <td>
                                    <input type="submit" class="btn btn-success" value="Update Post">
                                </td>

                            </tr>
                            </table>
                            {!! Form::close() !!}
                            </div>
                        </div><!-- end .page title-->
                    </div>

                    <div class="clearfix"></div>


        @endsection
