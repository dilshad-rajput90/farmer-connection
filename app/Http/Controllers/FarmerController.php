<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{

    public function farmer_dashboard()
    {

        return view('layouts/farmer/farmer_dashboard');

    }

}
