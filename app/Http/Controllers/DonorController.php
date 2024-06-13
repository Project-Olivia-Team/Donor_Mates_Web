<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use Illuminate\Support\Facades\Auth;

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

    public function pendaftaranForm()
    {
        $user = Auth::user();
        return view('user.pendaftaran', compact('user'));
    }

    public function pendaftaran(Request $request)
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

        return redirect()->route('user.pendaftaran')->with('success', 'Pendaftaran berhasil');
    }
    public function update(Request $request, $donor_id)
    {
        $request->validate([
            'NIK' => 'required|string|max:16',
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

        $donor = Donor::findOrFail($donor_id);
        $donor->update($request->all());

        return redirect()->route('admin.donor')->with('success', 'Donor berhasil diperbarui');
    }
}
