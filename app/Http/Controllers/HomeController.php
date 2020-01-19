<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartItem;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $cartItems = CartItem::get()->toArray();
        session()->put(['items'=> $cartItems]);
        // dd(session()->get('items'));




    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
