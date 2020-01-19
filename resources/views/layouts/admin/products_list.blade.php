        @extends('layouts/admin/master');

        @section('content')

            {{-- {{ dd($products) }} --}}


                          <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Data Tables
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <div class="dropdown-menu panel-dropdown" role="menu">
                                                    <a  class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body  p-xl-3">
                                        <div class="table-responsive">
                                            <table id="basic-datatables" class="table table-bordered">

                                            <thead>
                                                <tr>
                                                    <td  class="text-center"><input type="checkbox" onClick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                                                    <td class="text-center">Image</td>
                                                    <td class="text-left">                    <a href="#" class="asc">Product Name</a>
                                                    </td>
                                                    </td>
                                                    <td class="text-left">                    <a href="#">Price</a>
                                                    </td>
                                                    <td class="text-right">                    <a href="#">Quantity</a>
                                                    </td>
                                                    <td class="text-left">                    <a href="#">Product Id</a>
                                                    </td>
                                                    <td class="text-right">Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                               @foreach ($products as $product)
                                                {!! Form::open(['url'=>'/edit_product/'.$product['product']['id'],'method'=>'post','files'=>true])  !!}
                                               <tr>
                                                   <td class="text-center">
                                                        <input type="checkbox" name="selected[]" value="42">
                                                   </td>
                                                   <td class="text-center">
                                                          <img src="{{ asset('storage/images/'.$product['path']) }}" alt="Apple Cinema 30&quot;" class="img-thumbnail" width="50px">
                                                   </td>
                                                   <td class="text-left">{{ $product['product']['name'] }}</td>
                                                   <td class="text-left">
                                                       <div class="text-danger">${{ $product['product']['price'] }}</div>
                                                   </td>
                                                   <td class="text-right">
                                                       <span class="label label-success">{{ $product['product']['stock'] }}</span>
                                                    </td>
                                                    <td>
                                                    <p>{{ $product['product']['id'] }}</p>
                                                    </td>
                                                    <td class="text-left">Enabled</td>
                                                    {{-- <td><input type="hidden" name="product_id" value="{{ $product['product']['id'] }}"></td> --}}
                                                    <td class="text-right"> <input type="submit" value="Edit"></td>
                                                </tr>


                                                 {!! Form::close() !!}

                                                 <tr>
                                                     <td>
                                                         {!! Form::open(['url'=>'/delete_product/'.$product['product']['id'],'method'=>'post']) !!}
                                                         <input type="hidden" name="_method" method="delete">
                                                         <input type="submit" value="Delete" class="alert alert-danger">
                                                        </p>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}

                                                             </td>
                                                        </tr>
                                                @endforeach
                                               </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th>Image</th>
                                                        <th>Product Name</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Product Id</th>
                                                        <th>Status</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>




                                    </div>
                                </div><!-- End .panel -->


                            </div>

                        </div>



       @endsection
