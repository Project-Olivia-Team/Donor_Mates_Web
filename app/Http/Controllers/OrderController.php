<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        
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

   
    public function adminIndex()
    {
        $orders = Order::with('merchandise', 'user')->get();
        return view('admin.orders', compact('orders'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $order = Order::findOrFail($id);

      
        if ($order->proof_of_payment || $request->status == 'Cancelled') {
            $order->status = $request->status;
            $order->save();

            return redirect()->route('admin.orders')->with('success', 'Status order berhasil diperbarui');
        }

        return redirect()->route('admin.orders')->with('error', 'Bukti pembayaran diperlukan');
    }

   
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders')->with('success', 'Order berhasil dihapus');
    }
}
 ?>