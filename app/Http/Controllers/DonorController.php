<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::all();
        return view('admin.donor', compact('donors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'NIK' => 'required|string|max:16|unique:donors,NIK',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tgl_lahir' => 'required|date',
            'umur' => 'required|integer',
            'berat_badan' => 'required|integer',
            'gol_darah' => 'required|string|max:3',
            'riwayat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'tgl_donor' => 'required|date',
        ]);

        Donor::create($validated);

        return redirect()->route('admin.donor')->with('success', 'Donor berhasil ditambahkan');
    }

    public function update(Request $request, Donor $donor)
    {
        $validated = $request->validate([
            'NIK' => 'required|string|max:16|unique:donors,NIK,'.$donor->donor_id.',donor_id',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tgl_lahir' => 'required|date',
            'umur' => 'required|integer',
            'berat_badan' => 'required|integer',
            'gol_darah' => 'required|string|max:3',
            'riwayat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'tgl_donor' => 'required|date',
        ]);

        $donor->update($validated);

        return redirect()->route('admin.donor')->with('success', 'Donor berhasil diperbarui');
    }

    public function edit($id)
    {
        $donor = Donor::findOrFail($id);
        return response()->json($donor);
    }

    public function destroy($donor_id)
    {
        $donor = Donor::findOrFail($donor_id);
        $donor->delete();
        return redirect()->route('admin.donor')->with('success', 'Donor berhasil dihapus');
    }

    public function show($donor_id)
    {
        $donor = Donor::findOrFail($donor_id);
        return view('admin.detaildonor', compact('donor'));
    }
}
