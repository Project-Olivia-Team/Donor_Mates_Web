<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminOrderController extends Controller
{
    public function index()
    {
        // Mengambil semua pesanan
        $orders = Order::with('merchandise')->get();

        return view('admin.orders', compact('orders'));
    }

    public function approveOrder(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
        ]);

        $order = Order::find($request->order_id);
        $order->status = 'Approved';
        $order->save();

        return redirect()->route('admin.orders')->with('success', 'Pesanan berhasil diapprove');
    }
}
