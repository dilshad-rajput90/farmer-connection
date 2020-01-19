        @extends('layouts/admin/master');

        @section('content')


            {{-- {{ dd($product_category[0]['id']) }} --}}

         <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                    <h4 class="float-left">Admin Dashboard</h4>

                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                        <li class="breadcrumb-item">Admin Dashboard</li>
                                    </ol>
                                </div>

                            <h3 class="">Edit A Product</h3>
                            <br>

                            {!! Form::open(['url'=>'/edit_product_process/'.$product_category[0]['id'],'method'=>'post','class'=>'form-control','files'=>true]) !!}

                            <table class="table">
                                <tr>
                                    <td>
                                        Select Category
                                        <br><br>
                                        <select name="product_category[]" class="form-control" multiple>                          
                            @foreach ($product_category as $category)
                                    @foreach ($category['category'] as $cate)

                                        <option value="{{ $cate['id'] }}">
                                            {{ $cate['category'] }}
                                        </option> 
                                    @endforeach
                            @endforeach
                                        </select> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <input class="form-control" type="text" name="product_name" value="{{$product_data[0]['name'] }}">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Price</td>
                                    <td>
                                        <input class="form-control" type="number" name="price" value="{{ $product_data[0]['price'] }}">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Featured Image</td>
                                    <td>
                                        <input class="form-control" type="file" name="product_image">
                                    </td>
                                    {{-- <br><br><br><br> --}}
                                    <td>
                                        <img src="{{ asset('storage/images/'.$product_data[0]['attachment'][0]['path']) }}" alt="" width="100px">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <textarea name="specification" cols="70" rows="7">
                                            {{ $product_data[0]['specification'] }}
                                        </textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Stock</td>
                                    <td>
                                        <input type="number" name="stock" value="{{ $product_data[0]['stock'] }}">
                                    </td>
                                </tr>



                                <tr>
                                    <td>
                                        <input class="btn btn-success" type="submit" value="Update Product">
                                    </td>
                                </tr>

                            </table>

                            {!! Form::close() !!}


                            </div>
                        </div><!-- end .page title-->
                    </div>




                    <div class="clearfix"></div>


        @endsection
