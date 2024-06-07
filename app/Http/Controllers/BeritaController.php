<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all(); // Mengambil semua data berita dari database
        return view('admin.berita', compact('beritas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image',
            'tanggal_upload' => 'required|date',
            'penulis' => 'required|string|max:255',
            'isi_berita' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $destinationPath = 'images/';
            $filename = date('YmdHis') . "." . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path($destinationPath), $filename);
            $validated['gambar'] = "$destinationPath$filename";
        }

        Berita::create($validated);

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan');
    }

    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_upload' => 'required|date',
            'penulis' => 'required|string|max:255',
            'isi_berita' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            if (file_exists(public_path($berita->gambar))) {
                unlink(public_path($berita->gambar));
            }
            $destinationPath = 'images/';
            $filename = date('YmdHis') . "." . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path($destinationPath), $filename);
            $validated['gambar'] = "$destinationPath$filename";
        }

        $berita->update($validated);

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil diperbarui');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return response()->json($berita);
    }

    public function destroy($berita_id)
    {
        $berita = Berita::findOrFail($berita_id);
        if (file_exists(public_path($berita->gambar))) {
            unlink(public_path($berita->gambar));
        }
        $berita->delete();
        return redirect()->route('admin.berita')->with('success', 'Berita berhasil dihapus');
    }

    public function showBerita()
    {
        $beritas = Berita::all();
        return view('user.berita', compact('beritas'));
    }

    public function showDetail($berita_id)
    {
        $berita = Berita::findOrFail($berita_id);
        return view('user.detailberita', compact('berita'));
    }
}
