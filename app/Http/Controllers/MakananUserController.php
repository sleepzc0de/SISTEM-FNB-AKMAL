<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananUserController extends Controller
{
    public function makanan(){
        $makanan = Makanan::all();
        return view ('user.makanan',[
            'makanan'=> $makanan
        ]);
    }
}
