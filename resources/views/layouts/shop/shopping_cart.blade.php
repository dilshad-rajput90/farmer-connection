@extends('layouts/front/master')

@section('content')

    {{-- {{ dd($product_cart) }} --}}

{{-- {{ Session::get('data') }} --}}
    {{-- {{ dd($data) }} --}}
    {{-- {{ dd($product_cart) }} --}}

        {{-- {{
          dd($product_cart[0]['cart_item'][0]['quantity'])
    }}


        @foreach ($product_cart as $item)
{{--
            {{ dd($item['name']) }}
            {{ dd($item['price']) }}
            {{ dd($item['is_featured']) }} --}}



    {{-- @foreach ($data as $item)

        {{ dd($item['id']) }}
        {{ dd($item['user_id']) }}
        {{ dd($item['name']) }}
        {{ dd($item['specification']) }}
        {{ dd($item['price']) }}
        {{ dd($item['stock']) }}
        {{ dd($item['is_featured']) }}

    @endforeach --}}

  <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Shopping Cart</h1>
        </div>
    </section>


    <!--Cart Section-->
    <section class="cart-section">
        <div class="auto-container">

            <!--Cart Outer-->
            <div class="cart-outer">
                <div class="table-outer">
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                            	<th class="prod-column">PRODUCT</th>
                                <th>&nbsp;</th>
                                <th class="price">Price</th>
                                <th>QUANTITY</th>
                                <th><span class="fa fa-trash-m">Update</span></th>
                                <th><span class="fa fa-trash-o"></span></th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php $count = 0; ?>
                                    @foreach ($product_cart as $item)

                                        {{-- {{ dd($item) }} --}}
                                        <tr>
                                            <td colspan="2" class="prod-column">
                                                <div class="column-box">
                                                <figure class="prod-thumb"><a href="#"><img src="{{asset('storage/images/'.$item['is_featured'])}}" alt=""></a></figure>
                                                    <div class="prod-title">{{ $item['name'] }}</div>
                                                    <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span></div>
                                                </div>
                                            </td>
                                            {!! Form::open(['url'=>'/update_cart','method'=>'post','class'=>'form-control','files'=>true]) !!}
                                            <td class="price">${{ $item['price'] }}</td>
                                        <td class="qty"><div class="quantity-spinner"><button type="button" class="minus"><span class="fa fa-minus"></span></button><input type="text" name="product" value="{{ $product_cart[$count]['cart_item'][0]['quantity'] }}" class="prod_qty" /><button type="button" class="plus"><span class="fa fa-plus"></span></button></div></td>
                                        <input type="hidden" name="cart_item_id" value="{{ $product_cart[$count]['cart_item'][0]['id'] }}">
                                        <input type="hidden" name="price" value="{{ $item['price'] }}">
                                        <input type="hidden" name="total_price" value="{{ Session::get('data') }}">
                                         <td><input type="submit" value="Update"></td>
                                        {!! Form::close() !!}
                                        <td class="remove">
                                            {!! Form::open(['url'=>'/delete_cart','method'=>'post','class'=>'form-control','files'=>true]) !!}
                                            <input type="submit" value="Remove" class="remove-btn"><span class="fa fa-remove"></span>
                                            <input type="hidden" name="cart_item_id" value="{{ $product_cart[0]['cart_item'][0]['id'] }}">
                                            {!! Form::close() !!}
                                        </td>


                                        <?php $count++ ?>
                                        @endforeach

                         {!! Form::open(['url'=>'/get_totalcart_qty_id','method'=>'post','class'=>'form-control','files'=>true]) !!}
                                    <?php $count = 0; ?>
                                    @foreach ($product_cart as $item)

                         <input type="hidden" name="all_cart_item_id[]" value="{{ $product_cart[$count]['cart_item'][0]['id'] }}">
                         <input type="hidden" name="all_qty[]" value="{{ $product_cart[$count]['cart_item'][0]['quantity'] }}">
                         <input type="hidden" name="all_price[]" value="{{ $item['price'] }}">


                             <?php $count++ ?>
                              @endforeach

                            <td>
                            <input type="submit" value="GetTOtalPrice">
                            </td>
                             {!! Form::close() !!}



                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                            <div class="cart-options clearfix">
                                <div class="pull-left">
                                    <div class="apply-coupon clearfix">
                                        <div class="form-group clearfix">
                                            <input type="text" name="coupon-code" value="" placeholder="Your Coupon Code">
                                        </div>
                                        <div class="form-group clearfix">
                                            <button type="button" class="theme-btn btn-style-one">Apply</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="pull-right">
                                <a href="/update_cart/{{ $product_cart[0]['cart_item'][0]['id']}}">
                                        <button type="button" class="theme-btn btn-style-one">Update Cart</button>
                                    </a>
                                </div>
                            </div>


                <div class="row clearfix">

                    <div class="column pull-right col-md-4 col-sm-8 col-xs-12">
                        <div class="normal-title"><h3>Cart Totals</h3></div>

                        <!--Totals Table-->
                        <ul class="totals-table">
                            <li class="clearfix"><span class="col">Sub Total</span><span class="col">$15.00</span></li>
                            <li class="clearfix total"><span class="col">Total</span><span class="col">${{ Session::get('data') }}</span></li>
                        </ul>

                        <div class=""><button type="submit" class="theme-btn btn-style-two proceed-btn">Proceed to Checkout &ensp; <span class="fa fa-long-arrow-right"></span></button></div>
                    </div>

                </div>


            </div>

        </div>
    </section>




@endsection
