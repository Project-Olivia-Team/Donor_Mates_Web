<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $total = session()->get('total', 0);

        return view('user.checkout', compact('cartItems', 'total'));
    }

    public function processCheckout(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'shipping' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
        ]);

        $cartItems = session()->get('cart', []);
        $total = session()->get('total', 0);

        foreach ($cartItems as $item) {
            Order::create([
                'user_id' => Auth::id(),
                'merchandise_id' => $item['merchandise_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total_price' => $item['price'] * $item['quantity'],
                'status' => 'Pending',
                'shipping_method' => $request->shipping,
                'payment_method' => $request->payment_method,
            ]);
        }

        session()->forget('cart');
        session()->forget('total');

        return redirect()->route('user.order')->with('success', 'Checkout berhasil!');
    }
}


