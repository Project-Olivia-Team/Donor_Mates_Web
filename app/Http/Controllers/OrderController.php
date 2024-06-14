<?php namespace App\Http\Controllers;

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

    // Method to list all orders for admin
    public function adminIndex()
    {
        $orders = Order::with('merchandise', 'user')->get();
        return view('admin.orders', compact('orders'));
    }

    // Method to update the status of an order
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $order = Order::findOrFail($id);

        // Check if proof of payment is uploaded before allowing status update
        if ($order->proof_of_payment || $request->status == 'Cancelled') {
            $order->status = $request->status;
            $order->save();

            return redirect()->route('admin.orders')->with('success', 'Order status updated successfully.');
        }

        return redirect()->route('admin.orders')->with('error', 'Proof of payment required to confirm the order.');
    }

    // Method to delete an order
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders')->with('success', 'Order deleted successfully.');
    }
}
 ?>