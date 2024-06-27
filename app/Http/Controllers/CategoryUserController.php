<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    public function category()
    {
        $category = Category::all();
        return view ('user.category',[
            'category' => $category
        ]);
    }
}
