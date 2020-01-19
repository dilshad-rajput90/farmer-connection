<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantController extends Controller
{


    public function __construct()
    {
    $this->middleware('consultant.middleware');
    }


    public function index()

    {
        return view('layouts/consultant/consultant_dashboard');
    }


}
