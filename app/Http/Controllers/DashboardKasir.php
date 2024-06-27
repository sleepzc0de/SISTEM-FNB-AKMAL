<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardKasir extends Controller
{
    public function index ()
    {
        return view('kasir/dashboard');
    }
}
