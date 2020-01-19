<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcadmicsContorller extends Controller
{


    public function index()
    {
        return view('layouts/academic/academic_dashboard');
    }

}
