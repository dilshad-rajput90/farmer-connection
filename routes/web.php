<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

//     return view('home');

// });

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'AdminController@admin');
Route::get('/farmer_dashboard', 'FarmerController@farmer_dashboard');
Route::get('/academic_dashboard', 'AcadmicsContorller@index');
Route::get('/consultant_dashboard', 'ConsultantController@index');
Route::get('/general_dashboard', 'GeneralController@index');

Route::get('/custom_register', 'RegisterLoginController@register_form');
Route::get('/custom_login', 'RegisterLoginController@login_form');

Route::post('/register_process', 'RegisterLoginController@register_process');
Route::get('/login_process', 'RegisterLoginController@login_process');
Route::get('/logout', 'RegisterLoginController@logout');

Route::get('/add_post', 'PostController@index');
Route::post('/add_post_process', 'PostController@add_post_process');

Route::post('/delete_post/{id}', 'PostController@delete_post');
Route::get('/edit_post/{id}', 'PostController@edit_post');

Route::post('/edit_post_process/{id}', 'PostController@edit_post_process');


Route::get('/blog', 'BlogController@index');
Route::get('/blog_list', 'BlogController@blog_list');
Route::get('/blog_single/{id}', 'BlogController@blog_single')->name('blog.single');

// Route::post('/comment/{id}/{author_id}', 'BlogController@comment');
Route::post('/comment', 'BlogController@comment');


Route::get('/shop', 'ShopController@index');


Route::get('/adding_product', 'ShopController@adding_product');
Route::post('/adding_product_process', 'ShopController@adding_product_process');
Route::get('/product_list', 'ShopController@product_list');
Route::post('/edit_product/{id}', 'ShopController@edit_product');

Route::post('/edit_product_process/{id}', 'ShopController@edit_product_process');
Route::post('/delete_product/{id}', 'ShopController@delete_product');
Route::get('/shop_single_product/{id}', 'ShopController@shop_single_product');

Route::post('/add_to_cart/{id}', 'ShopController@add_to_cart');

Route::get('/shopping_cart', 'ShopController@shopping_cart');

Route::post('/delete_cart', 'ShopController@delete_cart');

Route::post('/update_cart', 'ShopController@update_cart');

Route::post('/get_totalcart_qty_id', 'ShopController@get_totalcart_qty_id');


