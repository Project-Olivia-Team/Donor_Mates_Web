<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('merchandise')->get();
        $total = $cartItems->sum(function($item) {
            return $item->merchandise->harga * $item->quantity;
        });

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

        $cartItems = Cart::where('user_id', Auth::id())->with('merchandise')->get();
        $total = $cartItems->sum(function($item) {
            return $item->merchandise->harga * $item->quantity;
        });

        foreach ($cartItems as $item) {
            Order::create([
                'user_id' => Auth::id(),
                'merchandise_id' => $item->merchandise_id,
                'quantity' => $item->quantity,
                'price' => $item->merchandise->harga,
                'total_price' => $item->merchandise->harga * $item->quantity,
                'status' => 'Pending',
                'shipping_method' => $request->shipping,
                'payment_method' => $request->payment_method,
            ]);
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('user.order')->with('success', 'Checkout berhasil!');
    }
}
