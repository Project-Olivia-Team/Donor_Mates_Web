<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        // Use eager loading to ensure merchandise is loaded with orders
        $orders = Order::where('user_id', Auth::id())->with('merchandise')->get();

        return view('user.order', compact('orders'));
    }

    public function uploadProof(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'proof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $order = Order::find($request->order_id);
        if ($order->user_id != Auth::id()) {
            return redirect()->back()->with('error', 'Tidak diizinkan');
        }

        $fileName = time() . '.' . $request->proof->extension();
        $request->proof->move(public_path('proofs'), $fileName);

        $order->proof_of_payment = $fileName;
        $order->status = 'Waiting for approval';
        $order->save();

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diunggah');
    }
}
