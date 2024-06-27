<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class HomeUserController extends Controller
{
    public function home()
    {
        $menus = Menu::all();
        return view('user.home',[
            'menu' => $menus
        ]);
    }
}
