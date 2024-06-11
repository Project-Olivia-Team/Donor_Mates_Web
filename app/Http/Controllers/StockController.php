<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('admin.stock', compact('stocks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'golongan_darah' => 'required|string|max:3',
            'stock' => 'required|integer',
        ]);

        Stock::create($validated);

        return redirect()->route('admin.stock')->with('success', 'Stock darah berhasil ditambahkan');
    }

    public function update(Request $request, Stock $stock)
    {
        $validated = $request->validate([
            'golongan_darah' => 'required|string|max:3',
            'stock' => 'required|integer',
        ]);

        $stock->update($validated);

        return redirect()->route('admin.stock')->with('success', 'Stock darah berhasil diperbarui');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return response()->json($stock);
    }

    public function destroy($stock_id)
    {
        $stock = Stock::findOrFail($stock_id);
        $stock->delete();
        return redirect()->route('admin.stock')->with('success', 'Stock darah berhasil dihapus');
    }
}
