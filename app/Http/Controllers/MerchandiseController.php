<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::all();
        return view('admin.merchandise', compact('merchandises'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'gambar' => 'required|image',
            'harga' => 'required|numeric',
            'stock' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $destinationPath = 'images/';
            $filename = date('YmdHis') . "." . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path($destinationPath), $filename);
            $validated['gambar'] = "$destinationPath$filename";
        }

        Merchandise::create($validated);

        return redirect()->route('admin.merchandise')->with('success', 'Merchandise berhasil ditambahkan');
    }

    public function update(Request $request, Merchandise $merchandise)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stock' => 'required|integer',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            if (file_exists(public_path($merchandise->gambar))) {
                unlink(public_path($merchandise->gambar));
            }
            $destinationPath = 'images/';
            $filename = date('YmdHis') . "." . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path($destinationPath), $filename);
            $validated['gambar'] = "$destinationPath$filename";
        }

        $merchandise->update($validated);

        return redirect()->route('admin.merchandise')->with('success', 'Merchandise berhasil diperbarui');
    }

    public function edit($id)
    {
        $merchandise = Merchandise::findOrFail($id);
        return response()->json($merchandise);
    }

    public function destroy($merchandise_id)
    {
        $merchandise = Merchandise::findOrFail($merchandise_id);
        if (file_exists(public_path($merchandise->gambar))) {
            unlink(public_path($merchandise->gambar));
        }
        $merchandise->delete();
        return redirect()->route('admin.merchandise')->with('success', 'Merchandise berhasil dihapus');
    }

    public function showMerchandise()
    {
        $merchandises = Merchandise::all();
        return view('user.merchandise', compact('merchandises'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $merchandises = Merchandise::where('nama_produk', 'LIKE', "%$query%")->get();
        return view('user.merchandise', compact('merchandises'));
    }
    public function showDetail($id)
{
    $merchandise = Merchandise::findOrFail($id);
    return view('user.detailproduk', compact('merchandise'));
}
}
