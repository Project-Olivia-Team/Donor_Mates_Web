<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'merchandise_id' => 'required|exists:merchandise,merchandise_id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::where('user_id', Auth::id())
                        ->where('merchandise_id', $request->merchandise_id)
                        ->first();

        if ($cartItem) {
            
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
           
            Cart::create([
                'user_id' => Auth::id(),
                'merchandise_id' => $request->merchandise_id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('user.keranjang')->with('success', 'Produk telah ditambahkan ke keranjang.');
    }

    public function showCart()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('merchandise')->get();
        $total = $cartItems->sum(function($item) {
            return $item->merchandise->harga * $item->quantity;
        });

        session()->put('total', $total); 

        return view('user.keranjang', compact('cartItems', 'total'));
    }

    public function removeFromCart($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('user.keranjang')->with('success', 'Produk telah dihapus dari keranjang.');
    }

    public function updateCart(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0',
        ]);

        $cartItem = Cart::findOrFail($id);
        if ($request->quantity == 0) {
            $cartItem->delete();
        } else {
            $cartItem->update(['quantity' => $request->quantity]);
        }

        return response()->json(['success' => true]);
    }
}
