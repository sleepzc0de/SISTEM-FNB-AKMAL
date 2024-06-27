<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function minuman()
    {
        $minuman = Minuman::all();
        return view('minuman',[
            'minuman' => $minuman
        ]);
    }
}
