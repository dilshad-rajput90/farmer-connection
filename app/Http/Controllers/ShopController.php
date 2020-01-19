<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Attachment;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use\App\Product;
use\App\Cart;
// use\App\Redirect;
use\App\Category;
use App\CartItem;
class ShopController extends Controller
{

    public function index()
    {


         // $product = Product::with('Attachment')->get()->toArray();
        //$product['products'] = Attachment::with('Product')->get()->toArray();
        //differnece btwn both query.

        $product['products'] = Product::with('Attachment')->get()->toArray();

        // dd($product);

        return view('layouts/shop/our_shop_page',$product);

    }

    public function product_list()
    {

        $product['products'] = Attachment::with('Product')->get()->toArray();

        return view('layouts/admin/products_list',$product);


    }



    public function adding_product(Request $_request)
    {


        $categories['categories'] = Category::get()->toArray();

        return view('layouts/admin/adding_product',$categories);

    }

      public function adding_product_process(Request $_request)
    {

        //   dd($_request->all());


        $category = $_request->input('product_category');
        $data['name'] = $_request->input('product_name');
        $data['specification'] = $_request->input('specification');
        $data['price'] = $_request->input('price');
        $data['stock'] = $_request->input('stock');
        $data['user_id']  = Auth::user()->id;

             if($_request->has('product_image'))
            {

                $file_name  = $_request->file('product_image')->getClientOriginalName();
                $_request->file('product_image')->storeAs('public/images',$file_name);
            }

            $data['is_featured']  = $file_name;

                 $product = Product::create($data);

                $product->Category()->attach($category);
                // return back()->with('product inserted succesfully');


                if($_request->has('product_image'))
            {

                $file_name =  $_request->file('product_image')->getClientOriginalName();

                $_request->file('product_image')->storeAs('public/images',$file_name);


                            $data['path']            = $file_name;
                            $data['product_id']      = $product->id;

                        Attachment::create($data);

                   return back()->with('msg','product inserted succesfully');
            }

    }

            public function edit_product(Request $_request,$id)
            {


               $product_id = $id;

              $data['product_data'] = Product::where('id','=',$product_id)->with('Attachment')->get()->toArray();

                // dd($data['data']);

              $data['product_category'] = Product::where('id','=',$product_id)->with('category')->get()->toArray();



            return view('layouts/admin/edit_product_form',$data);
            }

        public function edit_product_process(Request $_request,$id)
        {

            // dd($id);
            // dd($_request->all());

        $name = $_request->input('product_name');
        $price = $_request->input('price');
        $specification = $_request->input('specification');
        $stock = $_request->input('stock');

                 Product::where('id','=',$id)
                       ->update([
                            'name'=>$name,
                            'price'=>$price,
                            'specification'=>$specification,
                            'stock'=>$stock,
                             ]);
            // $value = Post::find($id);

            $category = $_request->input('product_category');
            // dd($category);

           $result =  Product::find($id);

           $rr =  $result->category()->sync($category);

            // dd($rr);

            if($_request->has('product_image'))

            {

                $file_name =  $_request->file('product_image')->getClientOriginalName();

                // dd($file_name);
              $_request->file('product_image')->storeAs('public/images',$file_name);

                    Attachment::where('product_id','=', $id)
                        ->update(['path'=> $file_name]);

                    // dd('done');
                   return redirect('/product_list')->with('done');
            }


        }

        public function delete_product(Request $_request,$id)
        {

            $data = Product::with('Attachment')
            ->find($id)
            ->delete();

            return back()->with('deleted successfully');

        }


       public function shop_single_product(Request $_request,$id)
       {

        // dd($id);

          $product['products'] = Product::with('Attachment')->where('id','=',$id)->get()->toArray();

        //   dd($product['products']);

        return view('layouts/shop/shop_single_product',$product);
       }


   public function add_to_cart(Request $request,$id)
    {

        // dd($id);
        // dd($request->all());
        $newProduct_id = $id;
        // dd($newProduct_id);
        $new_quantity  = $request->input('product_qunatity');
        // dd($new_quantity);

            if(Auth::check())
            {

                $check = FALSE;
                $user_id['user_id']   = Auth::id();

                // dd($user_id['user_id']);
                $cart = Cart::where('user_id','=',Auth::id())->where('status','=',0)->get()->toArray();
                // dd($cart);
                //if pending
                if(count($cart)>0)
                {
                    $cart_id = $cart[0]['id'];

                    // dd($cart_id);
                    $cart_items = CartItem::where('cart_id','=',$cart_id)->get()->toArray();

                    // dd($cart_items);
                    foreach ($cart_items as  $value) {

                     $product_id = $value['product_id'];
                     if($newProduct_id == $product_id)
                     {
                        $update = CartItem::where('id',$value['id'])->update(['quantity'=>$new_quantity]);
                        $check = TRUE;
                        return back()->with('item_message','Item Updated Successfully');
                     }
                 }


                    if($check == FALSE){

                        //   dd('inside if');

                      $data['data']=[

                            'product_id'     => $id,
                            'quantity'       => $request->input('product_qunatity'),
                            'cart_id'        => $cart_id,
                        ];

                            $result = CartItem::create($data['data']);
                            dd('inserted');
                     }

         }


                //if not pending
                else
                {




                }






        }

        else{

             $data['data']=[


                    'product_id'     => $request->input('product_id'),
                    'quantity'       => $request->input('quantity'),

                ];

                //dd($data);
                    session()->put('data', $data);
                    session()->save();

                    dd(session()->get('data'));

        }

    }

    public function shopping_cart(Request $request)
    {
        $data['data'] = session()->get('items');

        //   dd($data);

        foreach($data['data'] as $product)
        {
            $arr[]  = $product['product_id'];
            echo '<br>';
        }

        // dd($arr);
    //   $data['data'] =  Product::where('id',$product_id)->get()->toArray();
    //   $data['cart_item'] =  CartItem::where('product_id',$product_id)->get()->toArray();

      $data['product_cart'] =  Product::with('CartItem')->whereIn('id',$arr)->get()->toArray();

        // dd($data['product_cart']);





       return view('layouts/shop/shopping_cart',$data);
    }


    public function delete_cart(Request $request)
    {

        // dd($request->all());
       $cartItemId =  $request->input('cart_item_id');
         dd($cartItemId);
        CartItem::where('id','=',$cartItemId)->delete();
         return back()->with('cartitem','CartItem Deleted Succesdfully');

    }

    public function update_cart(Request $request)
    {


        // dd($request->all());
           $qty =  $request->input('product');
           $cart_id =  $request->input('cart_item_id');
           $price =  $request->input('price');
           $total_price =  $request->input('total_price');
           $update =  CartItem::where('id','=',$cart_id)->update(['quantity'=>$qty]);




            // Product::with('CartItem')->whereIn('')->get()->toArray();



           $data = $qty * $price;
      //   return route('/shopping_cart')->with( ['data' => $data] );
           return back()->with( ['data' => $data] );

    }


    public function get_totalcart_qty_id(Request $request)
    {


        $total_price2 = 0;
        foreach($request->all()['all_qty'] as $key => $item)
        {
            // echo $request->all()['all_qty'][$key] * $request->all()['all_price'][$key], '<br>';
            $total_price1 = $request->all()['all_qty'][$key] * $request->all()['all_price'][$key];
            echo '<br>';
             $total_price2 += $total_price1;
        }

            echo $total_price2;

        dd('working');


    }


}
