<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function home()
    {
        $menus = Menu::all();
        // dd($menus);
        return view ('welcome',[
            'menu' => $menus
        ]); 
    }
}
