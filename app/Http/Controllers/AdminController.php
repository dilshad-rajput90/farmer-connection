<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class AdminController extends Controller
{

    public function __construct()
    {
    $this->middleware('admin.middleware');
    }


    public function admin()
    {

        return view('layouts/admin/dashboard');

    }

}
