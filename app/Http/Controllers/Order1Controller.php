<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('details')->findOrFail($id);
        return view('order.show', compact('order'));
    }

    public function store(Request $request)
    {
        $order = $request->validate([
            'menu_id' => 'required'
        ]);
        dd($order);

        $user = Auth::user();

    }
}
