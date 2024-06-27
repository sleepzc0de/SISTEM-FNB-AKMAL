<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        // dd($user);
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        Menu::all();
        $data = $request->validate([
            'menu_id' => 'nullable|exists:menu,id',
            // 'minuman_id' => 'nullable|exists:menu,id',
        ]);
        dd($data);
        $order = Order::where('user_id', $user->id)->whereNull('tanggal_order')->first();

        if (!$order) {
            $order = new Order();
            $order->user_id = $user->id;
            $order->nomor_meja = 1; // Assume a default table number for now
            $order->save();
        }

        $menuId = $request->makanan_id ?: $request->minuman_id;

        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $order->id;
        $orderDetail->menu_id = $menuId;
        $orderDetail->jumlah = 1;
        $orderDetail->subtotal = 0; // Calculate the subtotal based on the menu item's price
        $orderDetail->save();

        return redirect()->back()->with('success', 'Item has been added to your order!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $user = auth()->user();
        $order = OrderDetail::all();
        // $order = Order::with('details')->findOrFail($id);
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
