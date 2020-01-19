        @extends('layouts/admin/master');

        @section('content')

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

                         <br><br>

                        <?php
                        if (session('msg'))
                        {
                        ?>
                            <p class="alert alert-danger text-center">
                                {{ Session::get('msg') }}
                            </p>
                        <?php
                        }
                        ?>


                            <h3 class="">Add A Product</h3>
                            <br>

                            {!! Form::open(['url'=>'/adding_product_process','method'=>'post','class'=>'form-control','files'=>true]) !!}


                            <table class="table">

                                <tr>
                                    <td>
                                        Select Category
                                        <br><br>
                                        <select name="product_category[]" class="form-control" multiple>
                                            @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}">
                                                {{ $category['category'] }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <input class="form-control" type="text" name="product_name">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Price</td>
                                    <td>
                                        <input class="form-control" type="number" name="price">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Featured Image</td>
                                    <td>
                                        <input class="form-control" type="file" name="product_image">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Description</td>
                                    <td>
                                        <textarea name="specification" cols="70" rows="7"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Stock</td>
                                    <td>
                                        <input type="number" name="stock">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input class="btn btn-success" type="submit" value="Add Product">
                                    </td>
                                </tr>

                            </table>

                            {!! Form::close() !!}


                            </div>
                        </div><!-- end .page title-->
                    </div>




                    <div class="clearfix"></div>
       @endsection
