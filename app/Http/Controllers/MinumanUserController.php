<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanUserController extends Controller
{
    public function minuman()
    {
        $minuman = Minuman::all();
        return view ('user.minuman',[
            'minuman' => $minuman
        ]);
    }
}
