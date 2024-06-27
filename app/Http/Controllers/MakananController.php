<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function makanan()
    {
        $makanan = Makanan::with('category')->get();
        // dd($makanan->category->category_name); 

        return view('makanan', [
            'makanan' => $makanan
        ]);
    }
}
